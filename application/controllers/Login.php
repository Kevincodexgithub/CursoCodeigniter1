<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');	
		$this->load->helper(array('auth/login_rules'));	
	}

	public function index()
	{
		$this->load->view('login');
		
	}

	public function Validate(){
		$this->form_validation->set_error_delimiters('', '');
		$rules = getLoginRules();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == FALSE){
			$errors = array(
				'email' => form_error('email'),
				'password' => form_error('password')
			); 
			echo json_encode($errors); 
			$this->output->set_status_header(400);
		}
		else{
			/* $this->load->view('form_completado'); */
		}

	}
	//la url se conforma de controlador,metodo y parametro
	/*public function test($id,$hola = 'peru'){
		echo "Hola mundo desde el controlador " . $id;
		echo '<br>';
		echo " Hola ".$hola;
	}*/
	//para comentar es shift + alt+ a
	/* public function vistas(){
		$data['titulo']='Desde las vistas';
		$data['lista']=array('negro','azul','blanco');
		$this->load->view('vistas',$data);
		$this->load->view('footer');
	} */

}
