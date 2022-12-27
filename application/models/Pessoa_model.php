<?php

class Pessoa_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function insert($param)
    {
        $campos = array(
            'nome' =>    $param['nome'],
            'sobrenome' =>    $param['sobrenome'],
            'apelido' =>    $param['apelido'],
            'documento' =>    $param['documento'],
            'email' =>    $param['email'],
            'data_nasc' =>   date('Y-m-d', strtotime(str_replace('/', '-', $param['data_nasc'])))
        );

        $this->db->insert('pessoas', $campos);
        return $this->db->insert_id();
    }

    public function atualizarDados($param)
    {
        $campos = array(
            'nome' =>    $param['nome'],
            'sobrenome' =>    $param['sobrenome'],
            'apelido' =>    $param['apelido'],
            'email' =>    $param['email']
        );

        $this->db->where('idPessoa', $this->session->userdata('s_idPessoa'));
        $this->db->update('pessoas', $campos);

        return 1;
    }

    public function deletarPessoa($idP)
    {
        // Eliminar 1 Registro
        $campos = array(
            'idPessoa' => $idP
        );

        $this->db->delete('pessoas', $campos);

        // Elimar 2 Registros
        // $this->db->where('idPessoa',$idP);
        // $this->db->delete('pessoas');
    }
    public function buscaPessoas()
    {
        $this->db->select('p.nome, p.sobrenome, p.apelido, p.documento, c.cidade');
        $this->db->from('pessoas p');
        $this->db->join('cidades c', 'c.idCidade = p.idCidade');

        $r = $this->db->get();

        return $r->result();
    }
}
