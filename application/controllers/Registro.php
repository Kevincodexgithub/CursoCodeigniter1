<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->helper(array('getmenu'));		
		//$this->load->database();
		$this->load->model('Users');

		$this->load->library(array('form_validation'));
	}

	public function index()
	{
		$data['menu'] = main_menu();
		$this->load->view('RegistroView',$data);
		//$query = $this->db->get('usuarios');
		//var_dump($query->result());
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
		//var_dump($username ." ". $email ." ". $password ." ". $password_confirm);

		//Validacion de campos

		$datos = array(
			'nombre_usuario' => $username,
			'correo' => $email,
			'contrasena' => $password,
		);

		$config = array(
			array(
					'field' => 'username',
					'label' => 'Nombre de Usuario',
					'rules' => 'required|alpha_numeric',
					'errors' => array(
						'required' => 'El {field} es requerido',
				),
			),
			array(
					'field' => 'email',
					'label' => 'Password',
					'rules' => 'required|valid_email',
					'errors' => array(
							'required' => 'El email %s. es invalido',
					),
			)
		);
	
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE){
			$data['menu'] = main_menu();
			$this->load->view('registro',$data);
		}
		else{
			$data['menu'] = main_menu();
			if(!$this->Users->create($datos)){
				$data['msg'] = 'Ocurrio un error al insertar los datos';
				$this->load->view('registro',$data);
			}
			$data['msg'] = 'Registrado correctamente!';
			$this->load->view('registro',$data);
		}

		
	}

}
