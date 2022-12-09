<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pessoa extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Pessoa_model');
		$this->load->model('Usuario_model');
		$this->load->library('encrypt');
	}

	public function index()
	{
		$this->load->view('pessoa/cadastra_pessoa');
	}
	public function cadastrar()
	{
		// Pessoa
		$param['nome'] = $this->input->post('nome');
		$param['documento'] = $this->input->post('documento');
		$param['email'] = $this->input->post('email');
		$param['data_nasc'] = $this->input->post('data_nasc');

		// Usuario
		$paramUsu['nomeUsuario'] = $this->input->post('nomeUsuario');
		$paramUsu['senha'] = sha1($this->input->post('senha'));

		$lastId = $this->Pessoa_model->insert($param);

		if ($lastId > 0) {
			$paramUsu['idPessoa'] = $lastId;
			$this->Usuario_model->insertUsuario($paramUsu);
		}
	}
}
