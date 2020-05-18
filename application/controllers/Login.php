<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');	
		$this->load->helper(array('auth/login_rules'));	
		$this->load->model('Auth');
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
			$usr = $this->input->post('email');
			$pass = $this->input->post('password');
			if(!$res = $this->Auth->login($usr,$pass)){
				echo json_encode(array('msg' => 'Verifique sus credenciales'));
				$this->output->set_status_header(401);
				exit;
			}else{
				echo json_encode(array('msg' => 'Bienvenido'));
			}
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
