<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}


	public function sendMailGmail()
	{
		//cargamos la libreria email de ci
		$this->load->library("email");
		$email = $this->input->post('email');
		$estado = $this->input->post('estado');
		$nrPedido = $this->input->post('idPedido');

		//configuracion para gmail
		$configGmail = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => '465',
			'smtp_user' => 'gabrielmartinsdev@gmail.com',
			'smtp_pass' => '12345',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		);

		//cargamos la configuración para enviar con gmail
		$this->email->initialize($configGmail);


		$mensaje = "asdasdasd";

		$this->email->from('gabrielmartinsdev@gmail.com');
		$this->email->to('gabrielmatheus209@gmail.com');
		// $this->email->to($email);
		$this->email->subject('Esto es una prueba');
		// $this->email->message($mensaje);
		$this->email->message('h2>
	Correio com Imagem
	</h2>
	<hr><br>
	Kurt Kobain
	<br>
	<a href=""><img src="" alt=""></a>
	<h3>Click na imagem e veja o link da pagina :D</h3>');


		// if ($this->email->send()) {
		// 	echo 'Enviado para Teste ';
		// } else {
		// 	show_error($this->email->print_debugger());
		// }


		for ($i = 1; $i <= 1; $i++) {
			if ($this->email->send()) {
				echo 'Enviado para Teste ';
			} else {
				show_error($this->email->print_debugger());
			}
			sleep(1);
			// $this->email->send();
			// //con esto podemos ver el resultado
			// echo json_encode($this->email->print_debugger());
		}
	}
}
