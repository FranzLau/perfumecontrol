<?php
	require '../../../config/conexion.php';
	$ProdIdForm =$_POST['ProdIdUpdate'];
	$ProdCodForm = $_POST['ProdCodUpdate'];
	$ProdNomForm = $_POST['ProdNombUpdate'];
	$ProdPrecioForm = $_POST['ProdPrecioUpdate'];
	$ProdMarcaForm = $_POST['ProdMarcaUpdate'];

	$upd = $con->query("UPDATE producto SET cod_prod='$ProdCodForm',
																					nom_prod='$ProdNomForm',
																					precio_prod='$ProdPrecioForm',
																					marca_prod='$ProdMarcaForm'
										WHERE id_prod= '$ProdIdForm' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
?>
