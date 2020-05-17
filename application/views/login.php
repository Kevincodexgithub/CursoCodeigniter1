<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <!-- <h1>Login</h1>
    <ul>
    <?php foreach ($menu as $item) : ?>
        <li>
            <a href="<?php echo $item['url'] ?>"><?php echo $item['title'] ?></a>
        </li>
    <?php endforeach; ?>
    <?php var_dump($menu) ?> 
    </ul> -->
    <?= validation_errors(); ?>
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-lg-6">
                <form action="<?= base_url('login/validate') ?>" method="POST">                    
                    <div class="form-group">
                        <h1>Login</h1>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo</label>
                        <input type="email" name="email" placeholder="Ingrese su email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <!-- <small id="emailHelp" class="form-text text-muted">Ingrese su email ejemplo@gmail.com</small> -->
                        <div class="invalid-feedback">
                            El correo está vacio
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" name="password" placeholder="Ingrese su contraseña" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>
            </div>

        </div>
    </div>

</body>

</html>