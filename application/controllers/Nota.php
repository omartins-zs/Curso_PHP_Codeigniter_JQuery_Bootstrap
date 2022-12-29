<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nota extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Nota_model');
		// $this->load->model('Usuario_model');
		// $this->load->library('encrypt');
	}
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('nota');
		$this->load->view('templates/footer');
	}

	public function getNotas()
	{
		echo json_encode($this->Nota_model->buscarNotas());
	}
}
