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
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <section id="section-nav" class="py-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center text-lg-left d-md-flex">
            <!-- <h4 class="my-auto page-title"></h4> -->
            <p class="my-auto font-nav"><i class="fas fa-users mr-3"></i>Sección <strong>Retiros</strong></p>
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
                <div class="row">
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-sm-12">
                        <h5>Complete los campos</h5>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-12">
                        <form class="" id="formGastar">
                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Fecha:</label>
                            <div class="col-sm-9">
                              <!-- <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm"> -->
                              <?php
                                date_default_timezone_set('America/Lima');
                                $fechaGasto = date('Y-m-d');
                              ?>
                              <input type="date" name="fechagasto" class="form-control form-control-sm text-center" placeholder="City" value="<?php echo $fechaGasto ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Gasto:</label>
                            <div class="col-sm-9">
                              <!-- <input type="email" class="form-control " id="colFormLabelSm" placeholder="col-form-label-sm"> -->
                              <select class="form-control form-control-sm" id="tipoGasto" name="tipogasto">
                                <option value="0">Elije una..</option>
                                <option value="Combustible">Combustible</option>
                                <option value="Movilidad">Movilidad</option>
                                <option value="Útiles de Aseo">Útiles de Aseo</option>
                                <option value="Útiles de Oficina">Útiles de Oficina</option>
                                <option value="Aumentos">Aumentos</option>
                                <option value="Otros">Otros</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Precio:</label>
                            <div class="col-sm-9">
                              <!-- <input type="email" class="form-control " id="colFormLabelSm" placeholder="col-form-label-sm"> -->
                              <input type="number" name="montogasto" step="any" class="form-control form-control-sm" placeholder="S/.">
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-12">
                        <button type="button" class="btn btn-success-melody w-100" id="createGasto"><i class="fas fa-save fa-sm mr-2"></i> Guardar</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <div id="tableRetiro"></div>
                  </div>
                </div>
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
