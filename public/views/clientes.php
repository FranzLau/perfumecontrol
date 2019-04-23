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
    <?php include('../modal/modalClienteCreate.php'); ?>
    <?php include('../modal/modalClienteEdit.php'); ?>
    <?php include('navbar.php'); ?>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <section id="section-nav" class="py-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 text-center text-lg-left d-md-flex">
            <!-- <h4 class="my-auto page-title"></h4> -->
            <p class="my-auto font-nav"><i class="fas fa-users mr-3"></i>Sección <strong>Clientes</strong></p>
          </div>
          <div class="col-sm-6 mt-3 mt-lg-0 text-center text-lg-right">
            <button type="button" class="btn btn-primary-melody" data-toggle="modal" data-target="#modalClienteCreate"><i class="far fa-file fa-sm mr-2"></i> Nuevo Cliente</button>
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
                <div id="tableCliente"></div>
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
        $('#tableCliente').load('../componentes/tableCliente.php');
      });
    </script>
    <script type="text/javascript">
      function readCliente(idcli){
        $.ajax({
          url: '../../public/procesos/cliente/readCliente.php',
          type: 'POST',
          data: "idcli=" + idcli,
          success:function(r){
            var datos= $.parseJSON(r);

            $('#CliIdEdit').val(datos['idcliphp']);
            $('#CliNombreEdit').val(datos['nomcliphp']);
            $('#CliApellidoEdit').val(datos['apecliphp']);
            $('#CliTipoDocEdit').val(datos['tdcliphp']);
            $('#CliNumDocEdit').val(datos['ndcliphp']);
            $('#CliDireccionEdit').val(datos['dircliphp']);
            $('#CliTelefonoEdit').val(datos['fnocliphp']);
            $('#CliEmailEdit').val(datos['mailcliphp']);
          }
        })
      }
      function deleteCliente(idcli){
        alertify.confirm("¿Seguro de BORRAR el cliente?.",
        function(){
          $.ajax({
            url: '../../public/procesos/cliente/deleteCliente.php',
            type: 'POST',
            data: "idcli=" + idcli,
            success:function(r){
             if (r==1) {
              $('#tableCliente').load('../componentes/tableCliente.php');
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
