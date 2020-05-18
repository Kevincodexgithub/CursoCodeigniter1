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
		$this->load->view('LoginView');
		
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
				$data = array(
					'id' => $res->id,
					'rango' => $res->rango,
					'status' => $res->status,
					'nombre_usuario' => $res->nombre_usuario,
					'is_logged' => TRUE
				);
				$this->session->set_userdata($data);
				$this->session->set_flashdata('msg','Bienvenido al sistema '.$data['nombre_usuario']);
				echo json_encode(array('url' => base_url('dashboard')));
			}
		}

	}

	public function Logout(){
		$vars = array('id','rango','status','nombre_usuario','is_logged');
		/* Borra todas las variables de sesión */
		$this->session->unset_userdata($vars);
		/* Destruimos la sesion */
		$this->session->sess_destroy();
		/* Direccion al login */
		redirect('login');
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
