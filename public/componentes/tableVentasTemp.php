<?php
	session_start();
 ?>
 <div class="row">
   <div class="col-sm-12">
		 <div style="height: 300px; width: 100%;border: 1px solid #e0e0ef;overflow-y: scroll;" class="table-responsive">
			 <table class="table table-sm table-bordered">
	       <thead class="bg-light">
	         <tr>
	           <th scope="col">Cant.</th>
	           <th scope="col">Producto</th>
	           <th scope="col">Precio</th>
	           <th scope="col">Desc.</th>
	           <th scope="col">Sub Total</th>
	           <th scope="col" class="text-center"><i class="fas fa-trash"></i></th>
	         </tr>
	       </thead>
	       <tbody>
	         <?php
	         $total = 0; //esta variable guarda los totales de las venta
	         if(isset($_SESSION['ProductoVentaTemp'])):
	           $i=0;
	           foreach (@$_SESSION['ProductoVentaTemp'] as $key) {
	             $d= explode("||", @$key);
	         ?>
	         <tr>
	           <td class="text-center"><?php echo $d[7]; ?></td>
	           <td><?php echo $d[3]; ?></td>
	           <td>s/ <?php echo $d[5]; ?></td>
	           <td>s/ <?php echo $d[8]; ?></td>
	           <td>s/ <?php echo $st=($d[5]-$d[8])*$d[7]; ?></td>
	           <td class="text-center">
	             <button class="btn btn-danger-melody btn-sm" onclick="deleteProductoTemp('<?php echo $i; ?>')"><i class="fas fa-times"></i></button>
	           </td>
	         </tr>
	         <?php
	           $total = $total + $st;
	           $i++;
	           $cliente = $d[1];
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
		  		<p>Cliente:</p>
		  	</div>
		  	<div class="col-sm-6 text-center text-lg-right">
		  		<p id="clienteVenta"></p>
		  	</div>
		  </div>
		  <div class="row">
		 	<div class="col-sm-6 text-center text-lg-left">
		 			<h2>Total:</h2>
		 	</div>
		 	<div class="col-sm-6 text-center text-lg-right">
		 			<h2>s/ <?php echo $total; ?></h2>
		 	</div>
		  </div>
	 	</div>
	 	<div class="col-sm-3">
	 		<button class="btn btn-success-melody w-100 h-100" onclick="createVenta()">
				<i class="fas fa-shopping-cart"></i>
				Vender
			</button>
	 	</div>
 	</div>
 </div>

<script>
  $(document).ready(function() {
    nombre = "<?php echo @$cliente ?>";
    $('#clienteVenta').text(nombre);
  });
</script>
