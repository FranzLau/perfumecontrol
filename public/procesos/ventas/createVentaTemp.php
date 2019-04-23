<?php
	session_start();
	require '../../../config/conexion.php';

	$ventaClienteForm=$_POST['ventasCliente'];//cliente
	$ventaProductForm=$_POST['ventasProducto'];//producto
	$ventaCantidaForm=$_POST['ventasCantidad'];//cantidad
	$ventaDescuenForm=$_POST['ventasDescuento'];//descuento

	if ($ventaClienteForm=="0") {
		$nombcliente="Público General";
	}else {
		$sql=$con->query("SELECT nom_cli,ape_cli FROM cliente WHERE id_cli = '$ventaClienteForm' ");
		$c = $sql->fetch_row();
		$nombcliente = $c[0]." ".$c[1];
	}

	$sql=$con->query("SELECT nom_prod,stock_prod,precio_prod,marca_prod FROM producto WHERE id_prod = '$ventaProductForm' ");
	$p = $sql->fetch_row();
	$nombprod = $p[0];
	$stokprod = $p[1];
	$precprod = $p[2];
	$marcprod = $p[3];


	$articulo = $ventaClienteForm."||".
							$nombcliente."||".
							$ventaProductForm."||".
							$nombprod."||".
							$stokprod."||".
							$precprod."||".
							$marcprod."||".
							$ventaCantidaForm."||".
							$ventaDescuenForm;

	if ($stokprod == 0) {
		echo 2;
	}else{
		if ($ventaCantidaForm <= $stokprod) {
			$_SESSION['ProductoVentaTemp'][]=$articulo;
		}else{
			echo 1;
		}
	}

 ?>
