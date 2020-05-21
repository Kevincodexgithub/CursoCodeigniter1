<?php 
    function getCreateRules(){
        return array(
            array(
                'field' => 'user',
                'label' => 'Usuario',
                'rules' => 'required|trim|max_length[100]',
                'errors' => array(
                    'required' => 'El %s es requerido',
                    'max_length' => 'El %s es demasiado grande'
                ),
            ),
            array(
                'field' => 'correo',
                'label' => 'Correo',
                'rules' => 'required|trim|valid_email',
                'errors' => array(
                    'required' => 'El %s es requerido',
                    'valid_email' => 'El %s debe ser un correo valido'
                ),
            ),
            array(
                'field' => 'rango',
                'label' => 'Rango',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerido'
                ),
            ),
            array(
                'field' => 'name',
                'label' => 'Nombre(s)',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerido'
                ),
            ),
            array(
                'field' => 'lastname',
                'label' => 'Apellido(s)',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Sus %s son requeridos'
                ),
            ),
            array(
                'field' => 'area',
                'label' => 'Area',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerida'
                ),
            ),
            array(
                'field' => 'especialidad',
                'label' => 'Especialidad',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida'
                ),
            ),
            array(
                'field' => 'cedula',
                'label' => 'Cedula',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida'
                ),
            ),
        );            
    }