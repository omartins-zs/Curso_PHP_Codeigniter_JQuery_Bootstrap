<?php

class Nota_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function buscarNotas($usuario, $senha)
    {
        // $Q = "SELECT (p.idPessoa, CONCAT(p.nome, ',', p.sobrenome, ' ', p.apelido' u.idUsuario, p.nome, p.sobrenome, p.apelido) aluno,n.1B,,n.2B,,n.3B,n.4B,n.notaFinal FROM notas n 
        // RIGHT JOIN pessoas p ON p.idPessoa = n.idPessoa";

        $this->db->select("p.idPessoa, CONCAT(p.nome, ', ' , p.sobrenome, ' ', p.apelido) aluno,n.1B,,n.2B,n.3B,n.4B,n.notaFinal", false);
        $this->db->from('notas n ');
        $this->db->join('pessoas p', ' p.idPessoa = n.idPessoa', 'right');


        
        $r = $this->db->get();
        return $r->result();
        
        // $this->db->where('u.senha', $senha);
        // $this->db->where('u.nomeUsuario', $usuario);
        // if ($resultado->num_rows() == 1) {
        //     $r = $resultado->row();

        //     $s_usuario = array(
        //         's_idPessoa' => $r->idPessoa,
        //         's_idUsuario' => $r->idUsuario,
        //         's_usuario' => $r->nome . "," . $r->sobrenome . " " . $r->apelido
        //     );

        //     $this->session->set_userdata($s_usuario);

        // } else {
        //     return 0;
        // }
    }
}
