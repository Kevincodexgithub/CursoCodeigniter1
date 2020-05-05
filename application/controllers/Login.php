<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->helper(array('getmenu'));
	}

	public function index()
	{
		$data['menu'] = main_menu();
		$this->load->view('login',$data);
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
