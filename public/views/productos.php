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
    <?php include('navbar.php'); ?>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <div class="container">
      <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
      <div class="row mt-5">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6 text-center text-lg-left d-lg-flex">
                  <h4 class="my-lg-auto page-title"><i class="fas fa-cubes mr-3"></i>Productos</h4>
                </div>
                <div class="col-sm-6 text-center text-lg-right">
                  <button type="button" class="btn btn-primary-melody" data-toggle="modal" data-target="#ModalNewProd"><i class="far fa-file fa-sm mr-2"></i> Nuevo Producto</button>
                </div>
              </div>
              <hr>
              <div class="row mt-4">
                <div class="col-sm-12">
                  <div id="tableProducto"></div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    </div>
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
            // $('#').val(datos['ProdStock']);
            $('#ProdMarcaUpdate').val(datos['ProdMarca']);
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
