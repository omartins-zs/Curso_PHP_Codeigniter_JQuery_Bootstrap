<?php

class Nota_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function buscarNotas()
	{
		$this->db->select("p.idPessoa, CONCAT(p.nome, ', ', p.sobrenome, ' ', p.apelido) aluno, IFNULL(n.1B,'') a , IFNULL(n.2B,'') b, IFNULL(n.3B,'')  c, IFNULL(n.4B,'')  d,  IFNULL(n.notaFinal,'') notaFinal", false);
		$this->db->from('notas n');
		$this->db->join('pessoas p', ' p.idPessoa = n.idPessoa', 'right');

		$r = $this->db->get();
		return $r->result();
	}


	public function salvarNotas($param)
	{
		$campos = array(
			'idPessoa' => $param['idPessoa'],
			'1B' => $param['n1'],
			'2B' => $param['n2'],
			'3B' => $param['n3'],
			'4B' => $param['n4'],
			'notaFinal' => $param['nf'],
		);

		$this->db->insert('notas', $campos);
	}
}
