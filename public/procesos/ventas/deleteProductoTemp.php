<?php
	session_start();
	$index = $_POST['ind'];
	unset($_SESSION['ProductoVentaTemp'][$index]);
	$datos = array_values($_SESSION['ProductoVentaTemp']);
	unset($_SESSION['ProductoVentaTemp']);
	$_SESSION['ProductoVentaTemp'] = $datos;
 ?>
