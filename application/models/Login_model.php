<?php

class Login_model extends CI_Model
{
    public function logar($usuario, $senha)
    {
        $this->db->select('p.idPessoa, u.idUsuario, p.nome, p.sobrenome, p.apelido');
        $this->db->from('usuarios u');
        $this->db->join('pessoas p','p.idPessoa = u.idPessoa');
        $this->db->where('u.nomeUsuario', $usuario);
        $this->db->where('u.senha', $senha);

        $resultado = $this->db->get();

        if ($resultado->num_rows() == 1) {
            $r = $resultado->row();

            $s_usuario = array(
                's_ipdPessoa' => $r->idPessoa,
                's_idUsuario' => $r->idUsuario,
                's_usuario' => $r->nome . "," . $r->sobrenome." " . $r->apelido
            );

            $this->session->set_userdata($s_usuario);
          
            return 1;
        } else {
            return 0;
        }
    }
}
