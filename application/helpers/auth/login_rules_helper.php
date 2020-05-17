<?php 
    function getLoginRules(){
        return array(
            array(
                'field' => 'email',
                'label' => 'Correo',
                'rules' => 'required|trim|valid_email',
                'errors' => array(
                    'required' => 'El %s es requerido',
                    'valid_email' => 'El %s debe ser un correo valido'
                ),
            ),
            array(
                'field' => 'password',
                'label' => 'Contraseña',
                'rules' => 'required|trim|',
                'errors' => array(
                    'required' => 'El %s es requerido'
                ),
            )
        );            
    }