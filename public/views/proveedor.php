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
    <?php include('../modal/modalProveedorCreate.php'); ?>
    <?php include('../modal/modalProveedorEdit.php'); ?>
    <?php include('navbar.php'); ?>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <section id="section-nav" class="py-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 text-center text-lg-left d-md-flex">
            <!-- <h4 class="my-auto page-title"></h4> -->
            <p class="my-auto font-nav"><i class="fas fa-users mr-3"></i>Sección <strong>Proveedores</strong></p>
          </div>
          <div class="col-sm-6 mt-3 mt-lg-0 text-center text-lg-right">
            <button type="button" class="btn btn-primary-melody" data-toggle="modal" data-target="#modalProveedorCreate"><i class="far fa-file"></i> Nuevo Proveedor</button>
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
                <div id="tableProveedor"></div>
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
        $('#tableProveedor').load('../componentes/tableProveedor.php');
      });
    </script>
    <script type="text/javascript">
      function readDatosProve(idprov){
        $.ajax({
          url: '../../public/procesos/proveedor/readProveedor.php',
          type: 'POST',
          data: "idprov=" + idprov,
          success:function(r){
            var datos = $.parseJSON(r);
            $('#ProveIdEdit').val(datos['idprovphp']);
            $('#ProveRazonEdit').val(datos['rsprovphp']);
            $('#proveSectorEdit').val(datos['scprovphp']);
            $('#ProveTipoDocEdit').val(datos['tdprovphp']);
            $('#ProvNumDocEdit').val(datos['ndprovphp']);
            $('#ProveDirEdit').val(datos['dirprovphp']);
            $('#ProveTelfEdit').val(datos['fonprovphp']);
            $('#ProveEmailEdit').val(datos['emailprovphp']);
            $('#ProveUrlEdit').val(datos['urlprovphp']);
          }
        })
        .done(function() {
          console.log("success");
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
      }
      function deleteProveedor(idprov){
        alertify.confirm("¿Seguro de ELIMINAR este PROVEEDOR?.",
          function(){
             $.ajax({
              url: '../../public/procesos/proveedor/deleteProveedor.php',
              type: 'POST',
              data: "idprov=" + idprov,
              success:function(r){
               if (r==1) {
                $('#tableProveedor').load('../componentes/tableProveedor.php');
                alertify.success("Eliminaste con EXITO");
               }else{
                alertify.error("No se pudo Eliminar");
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
