<?php
	session_start();
	require '../../../config/conexion.php';

	$gastoPrecio = $_POST['montogasto'];
	$gastoFecha =  $_POST['fechagasto'];
	$gastoEmple = $_SESSION['loginPat']['id_emp'];
	$gastoTipos = $_POST['tipogasto'];

	$gasto = $con->query("INSERT INTO gasto (precio_gasto,fecha_gasto,tipo_gasto,id_emp) VALUES ('$gastoPrecio','$gastoFecha','$gastoTipos','$gastoEmple')");

	if ($gasto) {
		echo json_encode(array('error' => false));
	}else{
		echo json_encode(array('error' => true));
	}

	$con->close();
 ?>
