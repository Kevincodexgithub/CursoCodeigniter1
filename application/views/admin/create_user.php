<div id="page-head">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Registro de Usuarios</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->


    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="#"><i class="demo-pli-home"></i></a></li>
        <li><a href="#">Usuarios</a></li>
        <li class="active">Datos de Usuarios</li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

</div>
<style>
    .page-header, #page-head, #page-head h1, #page-head h2, #page-head h3, #page-head h4, #page-head h5, #page-head h6, #page-head .text-main, #page-head .breadcrumb li, #page-head .breadcrumb li a, #page-head .breadcrumb .active {
    color: #4d627b;
}
#page-head .breadcrumb>li+li:before {
    border-color: #4d627b;
}
</style>
<!--Page content-->
<!--===================================================-->
<div id="page-content">

    <div class="panel">
        <form action="<?= base_url('users/store') ?>" method="POST">
            <div class="panel-heading">
                <h3 class="panel-title">Datos de la Cuenta</h3>
            </div>
            <!--Block Styled Form -->
            <!--===================================================-->
            
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label class="control-label">Nombre de Usuario</label>
                            <input name="user" type="text" placeholder="Ingrese nombre de usuario" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Correo</label>
                            <input name="correo" type="email" placeholder="correo@gmail.com" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Rango de Usuario</label>
                            <!-- Default Bootstrap Select -->
                            <!--===================================================-->
                            <select name="rango" class="form-control selectpicker">
                                <option>Seleccione el rango</option>
                                <option>Administrador</option>
                                <option>Usuario</option>                                
                            </select>
                            <!--===================================================-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-heading">
                <h3 class="panel-title">Informacion del Usuario</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label class="control-label">Nombre(s)</label>
                            <input name="name" type="text" placeholder="Inserte su nombre" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label class="control-label">Apellidos</label>
                            <input name="lastname" type="text" placeholder="Inserte su apellido" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Area</label>
                            <!-- Default Bootstrap Select -->
                            <!--===================================================-->
                            <select name="area" class="form-control selectpicker">
                                <option>Seleccione el area</option>
                                <option>Medicina General</option>
                                <option>Genética</option>
                                <option>Clínica del Higado</option>
                            </select>
                            <!--===================================================-->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Especialidad</label>
                            <input name="especialidad" type="text" placeholder="Ingrese la especialidad" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Cédula</label>
                            <input name="cedula" type="text"placeholder="xxxxxxxxx-x" class="form-control">
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="panel-footer text-left">
                <button class="btn btn-success" type="submit">Dar de Alta Usuario</button>
            </div>
        </form>
        <!--===================================================-->
        <!--End Block Styled Form -->
    </div>
</div>
<!--===================================================-->
<!--End page content-->