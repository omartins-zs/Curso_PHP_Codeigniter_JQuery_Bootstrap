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
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('pessoa/cadastrar_pessoa');
		$this->load->view('templates/footer');
	}

	public function cadastrar()
	{
		// Pessoa
		$param['nome'] = $this->input->post('nome');
		$param['sobrenome'] = $this->input->post('sobrenome');
		$param['apelido'] = $this->input->post('apelido');
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
	public function atualizar()
	{
		// Pessoa/Usuario
		$param['nome'] = $this->input->post('nome');
		$param['sobrenome'] = $this->input->post('sobrenome');
		$param['apelido'] = $this->input->post('apelido');
		$param['email'] = $this->input->post('email');

		$this->Pessoa_model->atualizarDados($param);

		// //forma 1
		// $this->load->view('pessoa/pessoa');

		//forma 2
		redirect('pessoa');
	}

	public function delete()
	{
		// Pessoa/Usuario
		$idP = $this->input->post('idPessoa');

		$this->Pessoa_model->deletarPessoa($idP);
		$this->Usuario_model->deletarUsuario($idP);

		redirect('pessoa');
	}

	public function getPessoas()
	{
		echo json_encode($this->Pessoa_model->buscaPessoas());
	}
}
