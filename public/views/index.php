<?php
  session_start();
  require '../../config/conexion.php';
  // require '../../config/ventas.php';
  date_default_timezone_set('America/Lima');
  if (isset($_SESSION['loginPat'])) {
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php include("head.php"); ?>
</head>
<body>
  <div class="page">
    <header class="header">
      <?php include("navbar.php"); ?>
    </header>
    <div class="page-content">
      <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="alert alert-warning" role="alert">
              <div class="row">
                <div class="col-sm-3 d-flex mb-3 mb-lg-0">
                  <h1 class="alert-heading m-auto"><i class="fas fa-exclamation-triangle fa-2x"></i></h1>
                </div>
                <div class="col-sm-9">
                  <p><strong>Advertencia!</strong> Debes aperturar Caja para poder empezar a usar el sistema. Dale click en el enlace de abajo para ingresar el monto correspondiente.</p>
                  <hr>
                  <p class="mb-0">Aperturar caja <a href="#" class="alert-link"> Click Aquí</a>.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-12">
            <h5>Panel de Control</h5>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-4">
            <div class="card card-img-holder bg-gradient-danger text-white border-0">
              <div class="card-body card-body-pad">
                <img src="../../assets/css/img/circle.svg" class="card-img-absolute" alt="">
                <h4 class="mb-3">
                  Ventas
                  <i class="fas fa-chart-line fa-sm float-right"></i>
                </h4>

                <h2 class="mb-5">2500</h2>
                <h5>Cantidad Vendida</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-3 mt-lg-0">
            <div class="card card-img-holder bg-gradient-info text-white border-0">
          <div class="card-body card-body-pad">
            <img src="../../assets/css/img/circle.svg" class="card-img-absolute" alt="">
            <h4 class="mb-3">
              Gastos
              <i class="fas fa-wallet fa-sm float-right"></i>
            </h4>

            <h2 class="mb-5">28500</h2>
            <h5>Salida de Dinero</h5>
          </div>
        </div>
          </div>
          <div class="col-md-4 mt-3 mt-lg-0">
            <div class="card card-img-holder bg-gradient-success text-white border-0">
          <div class="card-body card-body-pad">
            <img src="../../assets/css/img/circle.svg" class="card-img-absolute" alt="">
            <h4 class="mb-3">
              Caja
              <i class="fas fa-money-bill-wave fa-sm float-right"></i>
            </h4>

            <h2 class="mb-5">45000</h2>
            <h5>Caja Diaria</h5>
          </div>
        </div>
          </div>
        </div>

      </div>
      <hr>
      <div class="container">
    <footer class="footer">
      <div class="d-sm-flex justify-content-sm-between justify-content-center">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
          Copyright <i class="far fa-copyright"></i>2019
          <a href="#" target="_blank">Patricia V.</a>. Todos los derechos reservados
        </span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
          Desarrollado <i class="fas fa-code text-danger"></i> por F&M <i class="fas fa-laptop text-danger"></i>
        </span>
      </div>
    </footer>
  </div>
    </div>
  </div>
  <!---****************************************************************************-->
    <?php include('scripts.php'); ?>
  <!---****************************************************************************-->
</body>

</html>
<?php
  }else{
    header('Location: ../../');
  }
 ?>
