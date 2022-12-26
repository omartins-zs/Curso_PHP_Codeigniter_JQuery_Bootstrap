<?php

class Usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
    }

    public function insertUsuario($paramUsu)
    {
        $campos = array(
            'nomeUsuario' =>    $paramUsu['nomeUsuario'],
            'senha' =>    $paramUsu['senha'],
            'idPessoa' =>    $paramUsu['idPessoa'],
        );

        $this->db->insert('usuarios', $campos);

        // return $this->db->insert_id();
    }

    public function deletarUsuario($idP)
    {
        $this->db->where('idPessoa', $idP);
        $this->db->delete('usuarios');
        // $campos = array(
        //     'idUsuario' => $idP
        // );

        // $this->db->where('idPessoa', $idP);
        // $this->db->delete('usuarios', $campos);

        // return 1;
    }
}
