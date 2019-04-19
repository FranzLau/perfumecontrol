<?php
	require '../../../config/conexion.php';
	$idgtosfrm = $_POST['idGto'];
	$prgtosfrm = $_POST['precioGastoEdit'];
	$tigtosfrm = $_POST['tipoGastoEdit'];

	$upd = $con->query("UPDATE gasto SET precio_gasto='$prgtosfrm',
																			tipo_gasto='$tigtosfrm'
										WHERE id_gasto= '$idgtosfrm' ");
	if ($upd) {
		echo json_encode(array('error' => false));
	}else{
		echo json_encode(array('error' => true));
	}
	$con->close();
 ?>
