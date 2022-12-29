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
	public function saveNotas()
	{
		$param['idPessoa'] = $this->input->post('idPessoa');
		$param['n1'] = $this->input->post('n1');
		$param['n2'] = $this->input->post('n2');
		$param['n3'] = $this->input->post('n3');
		$param['n4'] = $this->input->post('n4');
		$param['nf'] = $this->input->post('nf');

		$this->Nota_model->salvarNotas($param);
		// echo json_encode($this->Nota_model->buscarNotas());
	}
}
