<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
        parent:: __construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('users/users_rules'));
    }

    public function index(){
        echo "Tabla de Usuarios";
    }

    public function create(){
        $vista = $this->load->view('admin/create_user','',true);
        $this->getTemplate($vista);
    }

    public function store(){
        $user = $this->input->post('user');
        $correo = $this->input->post('correo');
        $rango = $this->input->post('rango');
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        $area = $this->input->post('area');
        $especialidad = $this->input->post('especialidad');
        $cedula = $this->input->post('cedula');
        $this->form_validation->set_rules(getCreateRules());

        if($this->form_validation->run() == FALSE){

        }else{
            //insertar el modelo
            $this->session->set_flashdata('msg','El usuario a sido registrado');
            redirect('users');
        };
        $vista = $this->load->view('admin/create_user','',true);
        $this->getTemplate($vista);
    }

    public function getTemplate($view){
        $data = array(
            'head' => $this->load->view('layout/head','',TRUE),
            'nav' => $this->load->view('layout/nav','',TRUE),
            'content' => $view,
            'aside' => $this->load->view('layout/aside','',TRUE),
            'footer' => $this->load->view('layout/footer','',TRUE),

        );
        $this->load->view('DashboardView',$data);
    }


}