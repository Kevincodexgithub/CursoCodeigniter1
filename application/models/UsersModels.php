<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModels extends CI_Model {

	public function __construct()
	{
		parent:: __construct();	
    }
    
    public function save($user, $user_info){
        $this->db->trans_start();
        $this->db->insert('usuarios',$user);
        $user_info['id_usuario'] = $this->db->insert_id();
        $this->db->insert('medicos',$user_info);
        $this->db->trans_complete();            
        return !$this->db->trans_status() ? false : true;                                                                                                                                               
    }
}
