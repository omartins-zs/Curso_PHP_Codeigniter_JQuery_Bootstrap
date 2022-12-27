<?php

class Cidade_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function buscaCidades($s)
    {
		$s = $this->db->get_where('cidades', array('situacao' => $s));
        return $s->result();
    }
}
