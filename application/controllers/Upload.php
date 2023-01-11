<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ppload extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Upload_model');
		$this->load->helper('download');
		// if (!$this->session->userdata('s_idUsuario')) {
		//     redirect('login');
		// }
	}

	public function index()
	{
		$data['error'] = "";
		$data['errorArquivo'] = "";
		$data['estado'] = "";
		$data['arquivo'] = "";

		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('teste');
		$this->load->view('templates/footer');
	}

	public function enviar()
	{
		$config['upload_path'] = './uploads/imagens/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2048';
		$config['max_width'] = '2024';
		$config['max_height'] = '2008';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload("fileImagen")) {
			$data['error'] = $this->upload->display_errors();
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('upload', $data);
			$this->load->view('templates/footer');
		} else {

			$file_info = $this->upload->data();

			$this->crearMiniatura($file_info['file_name']);

			$titulo = $this->input->post('titeImagem');
			$imagen = $file_info['file_name'];

			$subir = $this->Upload_model->subir($titulo, $imagen);
			$data['titulo'] = $titulo;
			$data['imagen'] = $imagen;

			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('upload', $data);
			$this->load->view('templates/footer');
		}
	}

	function crearMiniatura($filename)
	{
		$config['image_library'] = 'gd2';
		$config['source_image'] = 'uploads/imagens/' . $filename;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['new_image'] = 'uploads/imagens/thumbs/';
		$config['thumb_marker'] = ''; //captura_thumb.png
		$config['width'] = 150;
		$config['height'] = 150;
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
	}

	public function fazerUpload()
	{
		$config['upload_path'] = './uploads/arquivos/';
		$config['allowed_types'] = 'pdf|xlsx|docx';
		$config['max_size'] = '20048';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload("fileImagem")) {
			$data['errorArquivo'] = $this->upload->display_errors();
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('upload', $data);
			$this->load->view('templates/footer');
		} else {

			$file_info = $this->upload->data();

			$titulo = $this->input->post('titeImagem');
			$arquivo = $file_info['file_name'];
			$subir = $this->Upload_model->subir($titulo, $arquivo);
			$data['estado'] = "Arquivo subido.";
			$data['arquivo'] = $arquivo;
			$data['error'] = "";
			$data['errorArquivo'] = "";

			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('upload', $data);
			$this->load->view('templates/footer');
		}
	}

	public function downloads($nome)
	{
		$data = file_get_contents('./uploads/arquivos/' . $nome);
		force_download($nome, $data);
	}
}
