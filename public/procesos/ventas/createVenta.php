<?php
	session_start();
	require '../../../config/conexion.php';
	require '../../../config/crud.php';
	$obj = new crud();

	if (count($_SESSION['ProductoVentaTemp']) == 0) {
		echo 0;
	}else{
		$result = $obj->createNewVenta();
		unset($_SESSION['ProductoVentaTemp']);
		echo $result;
	}
 ?>
