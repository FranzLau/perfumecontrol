<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PDF Ventas</title>
    <style type="text/css">
      #table-pdf {
        width: 100%;
      }
    </style>
  </head>
  <body>
    <?php
      if (isset($_GET['idventa'])) {
        $id=$_GET['idventa'];
      }
      require '../../config/conexion.php';
      require '../../config/data.php';
      $obj = new data();
      $sqlv = $con->query("SELECT * FROM venta WHERE id_venta= '$id' ");
      $resultv = $sqlv->fetch_row();
    ?>
    <h1>Folio: <?php echo $id ?> </h1>
    <h2>Cliente: <?php
                    if ($resultv[2]== 0) {
                      echo "Publico General";
                    }else {
                      echo $obj->nombCliente($resultv[2]);
                    }
                  ?>
    </h2>
    <p>Detalles de la Venta</p>

    <table id="table-pdf">
  	  <thead>
  	    <tr style="background: #5659A6;color: #fff;">
  				<th>Cantidad</th>
  	      <th>Producto</th>
  	      <th>Precio</th>
  	      <th>Desc.</th>
  	    </tr>
  	  </thead>
  	  <tbody>
  	  	<?php
          $sqldv = $con->query("SELECT * FROM venta WHERE id_venta= '$id' ");
          $total=0;
  	  		while($verv=$sqldv->fetch_row()):
  	  	?>
  	    <tr>
  				<td><?php echo $verv[5]; ?></td>
  	      <td><?php echo $obj->nombreProducto($verv[1]) ?></td>
  	      <td><?php echo $precio=$obj->precioProducto($verv[1]) ?></td>
  	      <td><?php echo $verv[6]; ?></td>
  	    </tr>
  		  <?php
  			   $total=$total+(($precio-$verv[6])*$verv[5]);
  			   endwhile;
  		   ?>
  	  </tbody>
  	  <tfoot>
  	  	<tr style="background:#ECECEC">
  	  		<td>Total : <?php echo "S/. ".$total; ?></td>
  	  	</tr>
  	  </tfoot>
  	</table>
  </body>
</html>
