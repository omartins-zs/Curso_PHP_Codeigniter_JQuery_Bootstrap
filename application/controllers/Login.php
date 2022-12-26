<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$data['mensagem'] = "";
		$this->load->view('login', $data);
	}

	public function ingressar()
	{
		$usuario = $this->input->post('nomeUsuario');
		// Não funcionou
		// $senha = $this->encrypt->sha1($this->input->post('senha'));
		$senha = sha1($this->input->post('senha'));

		$logar = $this->Login_model->logar($usuario, $senha);

		if ($logar == 1) {
			// echo 'Voce esta logado';
			$this->load->view('pessoa/persona');
		} else {
			$data['mensagem'] = "Usuario ou senha incorreta";
			$this->load->view('login', $data);
		}
	}
}
