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
            'documento' =>    $param['documento'],
            'email' =>    $param['email'],
            'data_nasc' =>   date('Y-m-d', strtotime(str_replace('/','-', $param['data_nasc'])))
        );

        $this->db->insert('pessoas', $campos);

        return $this->db->insert_id();
    }
}
