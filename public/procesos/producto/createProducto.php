<?php
	require '../../../config/conexion.php';
	$ProdCodigo = $_POST['ProdCodigo'];
	$ProdNombre = $_POST['ProdNomb'];
	$ProdPrecio = $_POST['ProdPrecio'];
	$ProdStock = $_POST['ProdCantidad'];
	$ProdMarca = $_POST['ProdMarca'];

	$vale = $con->query("SELECT cod_prod FROM producto WHERE cod_prod LIKE '". $ProdCodigo ."' ");
	$produ = $vale->fetch_row();
	if ($produ[0]==$ProdCodigo) {
		echo 0;
	}else{
		$res = $con->query("INSERT INTO producto (cod_prod,nom_prod,precio_prod,stock_prod,marca_prod) VALUES ('$ProdCodigo','$ProdNombre','$ProdPrecio','$ProdStock','$ProdMarca')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
?>
