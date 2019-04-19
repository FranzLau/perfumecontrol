<?php
	require '../../../config/conexion.php';

	$ProveTipDoc = $_POST['ProveTipoDoc'];
	$ProveNumDoc = $_POST['ProvNumDoc'];
	$ProveRazon = $_POST['ProveRazon'];
	$ProveSector = $_POST['proveSector'];
	$ProveDirecc = $_POST['ProveDir'];
	$ProveTelefo = $_POST['ProveTelf'];
	$ProveEmail = $_POST['ProveEmail'];
	$ProveUrl = $_POST['ProveUrl'];

	$vale = $con->query("SELECT num_prov FROM proveedor WHERE num_prov LIKE '". $ProveNumDoc ."'");
	$prove = $vale->fetch_row();
	if ($prove[0]==$ProveNumDoc) {
		echo json_encode(array('error' => true));
	}else{
		$res = $con->query("INSERT INTO proveedor (razon_social,sector_comercial,doc_prov,num_prov,dir_prov,telf_prov,email_prov,url_prov) VALUES ('$ProveRazon','$ProveSector','$ProveTipDoc','$ProveNumDoc','$ProveDirecc','$ProveTelefo','$ProveEmail','$ProveUrl')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
?>
