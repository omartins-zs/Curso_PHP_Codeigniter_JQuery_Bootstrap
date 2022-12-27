<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cidade extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Cidade_model');
	}

	public function getCidades()
	{
		$s = $this->input->post('situacao');
		$resultado = $this->Cidade_model->buscaCidades($s);

		echo json_encode($resultado);
	}
}
