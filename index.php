<?php
    session_start();
    if(isset($_SESSION['loginPat'])){
        header('Location: public/views/');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Natura</title>
    <link rel="icon" type="image/ico" href="assets/css/img/patrivil.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/alertify/css/alertify.css">
    <link rel="stylesheet" href="assets/alertify/css/themes/bootstrap.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body id="body-index">

  <section id="section-name" class="text-center text-white">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-12">
          <h1>Patricia Vilca Centeno</h1>
          <p class="lead">Consultora de Belleza y Distribuidora de Productos</p>
        </div>
      </div>
    </div>
  </section>
  <section id="section-form">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-6 d-flex">
          <div class="form-login mx-auto">
            <div class="row">
              <div class="col-md-12 text-white">
                <p>Empezar Ya !</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="fr-login">
                  <form action="" id="form-lg">
                    <input id="userlg" name="userlg" type="text" placeholder="Usuario" class="form-control mb-2" pattern="[A-Za-z0-9_-]{1,15}" required autocomplete="off" autofocus>
                    <input id="passlg" name="passlg" type="password" placeholder="Contraseña" class="form-control mb-2" pattern="[A-Za-z0-9_-]{1,15}" required>
                  </form>
                  <button class="btn btn-info-melody w-100" id="btnlg"><i class="fas fa-sign-in-alt mr-2"></i> Ingresar</button>
                  <?php
						        require 'config/conexion.php';
						        $sql = $con->query("SELECT * FROM empleado WHERE acceso_emp= 'Administrador' ");
						        $validar =0;
						        if ($result=$sql->fetch_row()>0){
						           $validar = 1;
						         }
						         if (!$validar):
						      ?>
                  <p class="text-white mt-3">Puedes registrarte <a href="register.php"> Aquí</a></p>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-sm-12 text-white">
                <p><i class="fab fa-whatsapp"></i> 952920730</p>
                <p><i class="fab fa-whatsapp"></i> RPM: #164945 RPC: 984335205</p>
                <p><i class="far fa-envelope"></i> bellezaaldiatacna@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 text-white">
          <div class="row">
            <div class="col-md-2">
              <i class="fab fa-whatsapp fa-2x"></i>
            </div>
            <div class="col-md-10">
              <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <i class="far fa-envelope fa-2x"></i>
            </div>
            <div class="col-md-10">
              <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <i class="far fa-envelope fa-2x"></i>
            </div>
            <div class="col-md-10">
              <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr>
  <section id="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-white text-center">
          <p>©2019 by M&F Desarrolladores Tacna.</p>
        </div>
      </div>
    </div>
  </section>

  <script src="assets/js/jquery.3.2.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/alertify/alertify.js"></script>
  <script src="assets/js/login.js" charset="utf-8"></script>
</body>
</html>
