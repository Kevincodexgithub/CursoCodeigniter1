<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>


    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-lg-6">
                <form action="<?= base_url('login/validate') ?>" method="POST" id="frm_login">
                    <div class="form-group">
                        <h1>Login</h1>
                    </div>
                    <div class="form-group" id="email">
                        <label for="exampleInputEmail1">Correo</label>
                        <input type="email" name="email" placeholder="Ingrese su email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <!-- <small id="emailHelp" class="form-text text-muted">Ingrese su email ejemplo@gmail.com</small> -->
                        <div class="invalid-feedback">
                            El correo está vacio
                        </div>
                    </div>
                    <div class="form-group" id="password">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" name="password" placeholder="Ingrese su contraseña" class="form-control" id="exampleInputPassword1">
                        <div class="invalid-feedback">
                            La contraseña está vacio
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                    <div class="form-group" id="alert"></div>
                </form>
            </div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= base_url('assets/js/auth/login.js') ?>"></script>

</body>

</html>