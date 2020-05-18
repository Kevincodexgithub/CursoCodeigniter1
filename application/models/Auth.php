<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {

	public function __construct()
	{
		parent:: __construct();	
		$this->load->database();
    }
    
    public function Login($usuario,$password){
        $data = $this->db->get_where('Usuarios', array('correo' => $usuario,'contrasena' => $password),1);
        if(!$data->result()){
            return false;
        }else{
            return $data->row();
        }
        
    }
    
}
