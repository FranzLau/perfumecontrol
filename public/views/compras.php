<?php
  session_start();
  require '../../config/conexion.php';
  if (isset($_SESSION['loginPat'])) {
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include('head.php'); ?>
  </head>
  <body style="background: #F2F4F4">
    <?php include('navbar.php'); ?>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <section id="section-nav" class="py-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 text-center text-lg-left d-md-flex">
            <!-- <h4 class="my-auto page-title"></h4> -->
            <p class="my-auto font-nav"><i class="fas fa-cubes mr-3"></i>Ingreso de <strong>Stock</strong></p>
          </div>
          <div class="col-sm-6 mt-3 mt-lg-0">
            <ul class="nav nav-pills nav-pills-primary justify-content-lg-end justify-content-center" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-newcompra-tab" data-toggle="pill" href="#pills-new-compra" role="tab" aria-controls="pills-new-compra" aria-selected="true"><i class="fas fa-file mr-2"></i>Nuevo Ingreso</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-compras-tab" data-toggle="pill" href="#pills-compras" role="tab" aria-controls="pills-compras" aria-selected="false"><i class="fas fa-file-alt mr-2"></i>Mis Ingresos</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <section id="section-content">
      <div class="container">
        <div class="row mt-3">
          <div class="col-sm-12">
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-new-compra" role="tabpanel" aria-labelledby="pills-newcompra-tab">
                <div class="row">
                  <div class="col-sm-5">
                    <div class="row">
                      <div class="col-sm-12">
                        <h5>Complete los campos</h5>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-12">
                        <form class="">

                        </form>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <button type="button" id="" class="btn btn-danger-melody w-100"><i class="fas fa-trash mr-2"></i>Limpiar todo</button>
                      </div>
                      <div class="col-sm-6">
                        <button type="button" id="" class="btn btn-info-melody w-100"><i class="fas fa-plus mr-2"></i>Agregar</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-7">
                    <div id="TablaComprasTempLoad"></div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-compras" role="tabpanel" aria-labelledby="pills-compras-tab">
                <div id="tableCompra"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#TablaComprasTempLoad').load("../componentes/tableComprasTemp.php");
        $('#tableCompra').load('../componentes/tableCompras.php');
      });
    </script>
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>
