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
    <?php include('../modal/modalReadVenta.php') ?>
    <?php include('navbar.php'); ?>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <section id="section-nav" class="py-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 text-center text-lg-left d-md-flex">
            <!-- <h4 class="my-auto page-title"></h4> -->
            <p class="my-auto font-nav"><i class="fas fa-shopping-cart mr-3"></i>Sección <strong>Ventas</strong></p>
          </div>
          <div class="col-sm-6 mt-3 mt-lg-0">
            <ul class="nav nav-pills nav-pills-primary justify-content-lg-end justify-content-center" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-newventa-tab" data-toggle="pill" href="#pills-new-venta" role="tab" aria-controls="pills-new-venta" aria-selected="true"><i class="fas fa-file mr-2"></i>Nueva Venta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-ventas-tab" data-toggle="pill" href="#pills-ventas" role="tab" aria-controls="pills-ventas" aria-selected="false"><i class="fas fa-file-alt mr-2"></i>Mis Ventas</a>
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
              <div class="tab-pane fade show active" id="pills-new-venta" role="tabpanel" aria-labelledby="pills-newventa-tab">
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
                        <form class="px-2" id="formVentas">
                          <div class="form-group row">
                            <label for="ventasCliente" class="col-sm-3 col-form-label col-form-label-sm">Cliente:</label>
                            <div class="col-sm-9">
                              <!-- <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm"> -->
                              <select class="form-control form-control-sm" id="ventasCliente" name="ventasCliente">
                                <option >Elije cliente</option>
    														<option value="0">Publico General</option>
    														<?php $prod = $con->query("SELECT * FROM cliente");
    															while ($row = $prod->fetch_assoc()) {
    																echo "<option value='".$row['id_cli']."' ";
    																echo ">";
    																echo $row['nom_cli'];
    																echo " ";
    																echo $row['ape_cli'];
    																echo "</option>";
    															}
    														?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="ventasProducto" class="col-sm-3 col-form-label col-form-label-sm">Producto:</label>
                            <div class="col-sm-9">
                              <!-- <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm"> -->
                              <select class="form-control form-control-sm" id="ventasProducto" name="ventasProducto">
                                <option value="">Elije producto</option>
    														<?php $prod = $con->query("SELECT * FROM producto");
    																while ($row = $prod->fetch_assoc()) {
    																	echo "<option value='".$row['id_prod']."' ";
    																	echo ">";
    																	echo $row['nom_prod'];
    																	echo "</option>";
    																}
    														?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="ventasCantidad" class="col-sm-3 col-form-label col-form-label-sm">Cantidad:</label>
                            <div class="col-sm-4">
                              <input type="number" class="form-control form-control-sm" id="ventasCantidad" name="ventasCantidad" placeholder="0">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="ventasDescuento" class="col-sm-3 col-form-label col-form-label-sm">Descuento:</label>
                            <div class="col-sm-4">
                              <input type="number" step="any" class="form-control form-control-sm" id="ventasDescuento" name="ventasDescuento" placeholder="s/0">
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <button type="button" id="btnDeleteVentaTemp" class="btn btn-danger-melody w-100"><i class="fas fa-trash mr-2"></i>Limpiar todo</button>
                      </div>
                      <div class="col-sm-6">
                        <button type="button" id="btnCreateVentaTemp" class="btn btn-info-melody w-100"><i class="fas fa-plus mr-2"></i>Agregar</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-7 mt-3 mt-lg-0">
                    <div id="TablaVentasTempLoad"></div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-ventas" role="tabpanel" aria-labelledby="pills-ventas-tab">
                <div id="tableVentas" class="table-responsive"></div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('scripts.php'); ?>
    <script>
      $(document).ready(function() {
        $('#TablaVentasTempLoad').load("../componentes/tableVentasTemp.php");
				$('#tableVentas').load("../componentes/tableVentas.php");
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#btnCreateVentaTemp').click(function() {
    			vacios = validarFrmVacio('formVentas');
					if(vacios > 0){
						alertify.error("Debe llenar todos los campos!");
						return false;
					}
					datos = $('#formVentas').serialize();
					$.ajax({
						url: '../../public/procesos/ventas/createVentaTemp.php',
						type: 'POST',
						data: datos,
						success:function(r){
							if (r==2) {
								alertify.error('No hay producto');
							}else if(r==1){
								alertify.error('Pocos Prodcutos en Stock');
							}else{
								$('#TablaVentasTempLoad').load("../componentes/tableVentasTemp.php");
							}
						}
					})
				});
        $('#btnDeleteVentaTemp').click(function() {
		    	$.ajax({
		    		url: '../../public/procesos/ventas/deleteVentaTemp.php',
		    		success:function(r){
		    			$('#TablaVentasTempLoad').load("../componentes/tableVentasTemp.php");
		    		}
		    	})
		    });
      });
    </script>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <script type="text/javascript">
      function deleteProductoTemp(index){
        $.ajax({
          url: '../../public/procesos/ventas/deleteProductoTemp.php',
          type: 'POST',
          data: "ind=" + index,
          success:function(r){
            $('#TablaVentasTempLoad').load("../componentes/tableVentasTemp.php");
            alertify.success("Se quito el producto :)");
          }
        })
      }
      function createVenta(){
    		$.ajax({
    			url: '../../public/procesos/ventas/createVenta.php',
    			success:function(r){
    				if (r > 0) {
    					$('#TablaVentasTempLoad').load("../componentes/tableVentasTemp.php");
    					$('#formVentas')[0].reset();
							$('#tableVentas').load("../componentes/tableVentas.php");
    					alertify.alert("Venta creada con Exito, consulte las lista de Ventas");
    				}else if(r == 0){
    					alertify.alert("No hay lista de Venta");
    				}else{
    					alertify.error("No se Pudo crear la Venta");
    				}
    			}
    		})
    	}
      function readDetallesVenta(idventa){
        $.ajax({
          url: '../../public/views/ventas.php',
          type: 'POST',
          data: "idventa=" + idventa,
          success:function(r){
            console.log(r);
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
    </script>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>
