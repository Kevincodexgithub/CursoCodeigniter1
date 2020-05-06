<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->helper(array('getmenu'));		
	}

	public function index()
	{
		$data['menu'] = main_menu();
		$this->load->view('registro',$data);
	}
	//la url se conforma de controlador,metodo y parametro
	/*public function test($id,$hola = 'peru'){
		echo "Hola mundo desde el controlador " . $id;
		echo '<br>';
		echo " Hola ".$hola;
	}*/

	public function create(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$password_confirm = $this->input->post('password_confirm');

		var_dump($username ." ". $email ." ". $password ." ". $password_confirm);
	}

}
