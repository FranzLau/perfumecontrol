<?php

    require 'config/conexion.php';
    $sql= $con->query("SELECT * FROM empleado WHERE acceso_emp='Administrador'  ");
    $result = $sql->fetch_row();

    if ($result>0) {
    	header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Natura</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/ico" href="assets/css/img/log.ico">
  <link rel="icon" type="image/ico" href="assets/css/img/patrivil.ico">
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" href="assets/fontawesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/alertify/css/alertify.css">
  <link rel="stylesheet" href="assets/alertify/css/themes/bootstrap.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body id="body-register"><!--***************************************************************-->
  <div class="page-register">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-12 text-center text-white">
          <h3>Sección de Registro</h3>
          <p>¡Registrate como Administrador para usar el sistema y llevar todo el control!</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-12 px-0 px-lg-5">
          <div class="form-register">
            <div class="row">
              <div class="col-md-12 text-white">
                <p>Administrador</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-white">
                <form action="" id="frmregemp">
                  <div class="form-row">
                    <div class="col-sm-6">
                      <!-- <label for="inputemp" class="col-form-label">Nombres :</label> -->
                      <input name="nomemp" type="text" class="form-control" id="inputemp" placeholder="Nombres">
                    </div>
                    <div class="col-sm-6">
                      <!-- <label for="inputape" class="col-form-label">Apellidos :</label> -->
                      <input name="apeemp" type="text" class="form-control" id="inputape" placeholder="Apellidos">
                    </div>
                  </div>
                  <div class="form-row mt-2">
                    <div class="col-sm-6">
                        <!-- <label for="inputDocemp" class="col-form-label">DNI :</label> -->
                        <input name="dniemp" type="number" class="form-control" id="inputDocemp" placeholder="Nro. de DNI">
                    </div>
                    <div class="col-sm-6">
                      <!-- <label for="" class="col-form-label col-form-label-sm">Contraseña :</label> -->
                      <input name="passemp" type="password" class="form-control" id="inputpass" placeholder="Constraseña">
                    </div>
                  </div>
                  <hr>
                  <div class="form-row">
                    <div class="col-sm-4">
                      <!-- <label for="inputDatemp" class="col-form-label">Fecha Nacimiento:</label> -->
                      <input name="fechnac" type="date" class="form-control" id="inputDatemp">
                    </div>
                    <div class="col-sm-4">
                      <!-- <label for="inputSex" class="col-form-label">Sexo :</label> -->
                      <select name="sexemp" id="inputSex" class="form-control">
                        <option selected>Elije una</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                      </select>
                    </div>
                    <div class="col-sm-4">
                      <!-- <label for="inputAcceso" class="col-form-label col-form-label-sm">Cargo</label> -->
                      <!--<input type="text" class="form-control form-control-sm" name="cargoemp" id="inputAcceso" value="1">-->
                      <select name="cargoemp" id="inputAcceso" class="form-control">
                        <option value="0">Elije una...</option>
                        <option value="Gerente">Gerente</option>
                        <option value="Chofer">Chofer</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Contador">Contador</option>
                        <option value="Soporte Técnico">Soporte Técnico</option>
                        <option value="Recepcionista de Llamadas">Recepcionista de Llamadas</option>
                        <option value="Ventas">Ventas</option>
                        <option value="Limpieza">Limpieza</option>
                        <option value="Otro">Otro</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row mt-2">
                    <div class="col-md-12">
                      <!-- <label for="inputdirpro" class="col-form-label">Dirección:</label> -->
                      <input name="diremp" type="text" class="form-control" id="inputdirpro" placeholder="Tu dirección">
                    </div>
                  </div>
                  <div class="form-row mt-2">
                    <div class="col-sm-8">
                      <!-- <label for="inputemail" class="col-form-label col-form-label-sm">Correo :</label> -->
                      <input name="emailemp" type="email" class="form-control" id="inputemail" placeholder="E-mail">
                    </div>
                    <div class="col-sm-4">
                      <!-- <label for="inputfone" class="col-form-label col-form-label-sm">Teléfono :</label> -->
                      <input name="telfemp" type="number" class="form-control" id="inputfone" placeholder="Telefono">
                    </div>

                  </div>
                  <div class="form-row" hidden="">
                    <div class="form-group col-sm-6">
                      <!-- <label for="" class="col-form-label col-form-label-sm">Acceso :</label> -->
                      <input type="text" class="form-control form-control-sm" name="accemp" id="inputAccEmp" value="Administrador">
                    </div>
                    <div class="form-group col-sm-6">
                      <!-- <label for="" class="col-form-label col-form-label-sm">Acceso :</label> -->
                      <input type="text" class="form-control form-control-sm" name="estaemp" id="inputEmpEmp" value="Activo">
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-12 text-center">
                <button id="btnregemp" type="button" class="btn btn-info-melody"><i class="fas fa-save"></i> Registrar Empleado</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


	<script src="assets/js/jquery.3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js" ></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/alertify/alertify.js"></script>
  <script src="assets/js/helpers.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#btnregemp').click(function(event) {
      vacios = validarFrmVacio('frmregemp');
    if(vacios > 0){
      alertify.error("Debe llenar todos los campos!");
      return false;
    }
    var datos=$('#frmregemp').serialize();
      $.ajax({
        url: 'public/procesos/empleado/addemp.php',
        type: 'POST',
        dataType: 'json',
        data: datos,
      })
      .done(function(r) {
        if (!r.error) {
        alertify.success("Agregado con ÉXITO");
        window.location.href='index.php';
      }else{
        alertify.error("Datos Incorrectos");
      }
          });
    });
  });
  </script>
</body>
</html>
