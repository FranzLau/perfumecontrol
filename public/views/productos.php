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
    <?php include('../modal/modalProductoCreate.php'); ?>
    <?php include('../modal/modalProductoEdit.php'); ?>
    <?php include('../modal/modalProductoAdd.php'); ?>
    <?php include('navbar.php'); ?>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <section id="section-nav" class="py-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 text-center text-lg-left d-md-flex">
            <!-- <h4 class="my-auto page-title"></h4> -->
            <p class="my-auto font-nav"><i class="fas fa-cubes mr-3"></i>Sección <strong>Productos</strong></p>
          </div>
          <div class="col-sm-6 mt-3 mt-lg-0 text-center text-lg-right">
            <button type="button" class="btn btn-primary-melody" data-toggle="modal" data-target="#ModalNewProd"><i class="far fa-file fa-sm mr-2"></i> Nuevo Producto</button>
          </div>
        </div>
      </div>
    </section>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <section id="section-content">
      <div class="container">
        <div class="row mt-3">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <div id="tableProducto"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tableProducto').load('../componentes/tableProducto.php');
      });
    </script>
    <script type="text/javascript">
      function ReadProducto(idprod){
        $.ajax({
          url: '../../public/procesos/producto/readProducto.php',
          type: 'POST',

          data: "idprod=" + idprod,
          success:function(r){
            var datos= $.parseJSON(r);
            $('#ProdIdUpdate').val(datos['ProdId']);
            $('#ProdCodUpdate').val(datos['ProdCodig']);
            $('#ProdNombUpdate').val(datos['ProdNomb']);
            $('#ProdPrecioUpdate').val(datos['ProdPrecio']);
            $('#ProdMarcaUpdate').val(datos['ProdMarca']);
            // info para Ingresos
            $('#idProdIngreso').val(datos['ProdId']);
            $('#CodProdIngreso').text(datos['ProdCodig']);
            $('#NombProdIngreso').text(datos['ProdNomb']);
            $('#StockProdIngreso').text(datos['ProdStock']);
          }
        })
        .done(function(r) {
          console.log(r);
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
      }
      function deleteProducto(idprod){
        alertify.confirm("¿Seguro de BORRAR este producto?.",
        function(){
           $.ajax({
            url: '../../public/procesos/producto/deleteProducto.php',
            type: 'POST',
            data: "idprod=" + idprod,
            success:function(r){
             if (r==1) {
              $('#tableProducto').load('../componentes/tableProducto.php');
              alertify.success("Eliminaste con EXITO");
             }else{
              alertify.error("No se pudo Eliminar este producto");
             }
            }
          })
        },
        function(){
          alertify.warning('Estuviste a punto de Eliminar');
        });
      }
    </script>
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>
