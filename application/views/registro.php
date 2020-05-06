<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>

    <?php foreach($menu as $item): ?>
        <li>
            <a href="<?php echo $item['url'] ?>"><?php echo $item['title'] ?></a>
        </li>
    <?php endforeach; ?>

    <?php 
        echo form_open('registro/create',array('method' => 'POST'));
        echo form_label('Nombre de Usuario');
        echo form_input('username');
        echo '<br>';
        echo form_label('Correo Electrónico');
        echo form_input(array('type' => 'email', 'name' => 'email'));
        echo '<br>';
        echo form_label('Contraseña');
        echo form_password('password');
        echo '<br>';
        echo form_label('Confirmacion de contraseña');
        echo form_password('password_confirm');
        echo '<br>';
        echo form_submit('submit','Enviar Datos');
        echo form_close();
    ?>
</body>
</html>