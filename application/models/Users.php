<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model {

	public function __construct()
	{
		parent:: __construct();	
		$this->load->database();
    }
    
    public function create($datos){
        $datos = array(
            'nombre_usuario' => $datos['nombre_usuario'],
			'correo' => $datos['correo'],
            'contrasena' => $datos['contrasena'],
            'status' => 1,
            'rango' => 2,
        );
        if(!$this->db->insert('Usuarios', $datos)){
            return false;
        }return true;
    }
}
