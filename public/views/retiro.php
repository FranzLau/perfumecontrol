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
    <?php include('../modal/gastoEditModal.php'); ?>
    <?php include('navbar.php'); ?>
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-2 text-center text-lg-left d-md-flex">
                  <h4 class="my-auto font-primary"><i class="fas fa-wallet mr-3"></i>Retiros</h4>
                </div>
                <div class="col-sm-8">
                  <form id="formGastar">
                    <div class="form-row">
                      <div class="col-3">
                        <?php
                          date_default_timezone_set('America/Lima');
                          $fechaGasto = date('Y-m-d');
                        ?>
                        <input type="date" name="fechagasto" class="form-control text-center" placeholder="City" value="<?php echo $fechaGasto ?>" readonly>
                      </div>
                      <div class="col-6">
                        <select class="form-control" id="tipoGasto" name="tipogasto">
                          <option value="0">Elije una..</option>
                          <option value="Combustible">Combustible</option>
                          <option value="Movilidad">Movilidad</option>
                          <option value="Útiles de Aseo">Útiles de Aseo</option>
                          <option value="Útiles de Oficina">Útiles de Oficina</option>
                          <option value="Aumentos">Aumentos</option>
                          <option value="Otros">Otros</option>
                        </select>
                      </div>
                      <div class="col-3">
                        <input type="number" name="montogasto" step="any" class="form-control" placeholder="S/.">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-sm-2 text-center text-lg-right">
                  <button type="button" class="btn btn-success-melody w-100" id="createGasto"><i class="fas fa-save fa-sm mr-2"></i> Guardar</button>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-body">
                      <div id="tableRetiro"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tableRetiro').load('../componentes/tablegasto.php');
      });
    </script>
    <script type="text/javascript">
      function obtenDatosGasto(idgto){
        $.ajax({
          url: '../../public/procesos/gastos/readGasto.php',
          type: 'POST',
          data: "idgto=" + idgto,
          success:function(r){
            var datos= $.parseJSON(r);
            $('#precioGastoEdit').val(datos['precioGasto']);
            $('#idGto').val(datos['idgtophp']);
            $('#tipoGastoEdit').val(datos['tipoGasto']);
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
      function eliminarGastos(idgto){
    	  alertify.confirm("¿Seguro de BORRAR?.",
          function(){
             $.ajax({
              url: '../../public/procesos/gastos/deleteGasto.php',
              type: 'POST',
              data: "idgto=" + idgto,
              success:function(r){
               if (r==1) {
                $('#tableRetiro').load('../componentes/tablegasto.php');
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
