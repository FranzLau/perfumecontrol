<?php
	session_start();
	//print_r($_SESSION['tablaCompraTemp']);
 ?>
 <div class="row">
   <div class="col-sm-12">
		 <div style="height: 300px; width: 100%;border: 1px solid #e0e0ef;" class="overflow-auto table-responsive">
			 <table class="table table-sm table-bordered">
	       <thead class="bg-light">
	         <tr>
	           <th scope="col">Cant.</th>
	           <th scope="col">Producto</th>
	           <th scope="col">Precio</th>
	           <th scope="col">Desc.</th>
	           <th scope="col">Sub Total</th>
	           <th scope="col">Quitar</th>
	         </tr>
	       </thead>
	       <tbody>
	         <?php
	         $total = 0; //esta variable guarda los totales de las venta

	         if(isset($_SESSION['tablaCompraTemp'])):
	           $i=0;
	           foreach (@$_SESSION['tablaCompraTemp'] as $key) {
	             $d= explode("||", @$key);

	         ?>
	         <tr>
	           <td><?php echo $d[3]; ?></td>
	           <td><?php echo $d[1]; ?></td>
	           <td><?php echo $d[4]; ?></td>
	           <td><?php echo $d[6]; ?></td>
	           <td><?php echo $st=($d[4]-$d[7])*$d[3]; ?></td>
	           <td>
	             <button class="btn btn-danger-melody btn-sm" onclick="quitarP('<?php echo $i; ?>')"><i class="fas fa-trash"></i></button>
	           </td>
	         </tr>
	         <?php
	           $total = $total + $st;
	           $i++;
	           $cliente = $d[2];
	           }
	         endif;
	       ?>
	       </tbody>
	     </table>
		 </div>
   </div>
 </div>

 <div class="p-2 mt-3" style="border: 1px solid #e0e0ef; background-color:#F2F3F4;">
 	<div class="row" >
		<div class="col-sm-9">
			<div class="row">
		  	<div class="col-sm-6 text-center text-lg-left">
		  		<p>Cliente</p>
		  	</div>
		  	<div class="col-sm-6 text-center text-lg-right">
		  		<p id="clienteVent">Franz Cruz UCharico</p>
		  	</div>
		  </div>
		  <div class="row">
		 	<div class="col-sm-6 text-center text-lg-left">
		 			<h2>Total</h2>
		 	</div>
		 	<div class="col-sm-6 text-center text-lg-right">
		 			<h2>s/.<?php echo $total; ?></h2>
		 	</div>
		  </div>
	 	</div>
	 	<div class="col-sm-3">
	 		<button class="btn btn-success-melody w-100 h-100" onclick="crearVentas()">
				<i class="fas fa-shopping-cart"></i>
				Vender
			</button>
	 	</div>
 	</div>
 </div>

<script>
  $(document).ready(function() {
    nombre = "<?php echo @$cliente ?>";
    $('#clienteVent').val(nombre);
  });
</script>
