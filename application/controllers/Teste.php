<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Teste extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('teste');
	}
}