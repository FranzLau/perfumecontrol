<?php
	require '../../../config/conexion.php';
	$CliNombre = $_POST['CliNombre'];
	$CliApelli = $_POST['CliApellido'];
	$CliTipoDo = $_POST['CliTipoDoc'];
	$CliNumDoc = $_POST['CliNumDoc'];
	$CliDirecc = $_POST['CliDireccion'];
	$CliTelefo = $_POST['CliTelefono'];
	$CliEmail = $_POST['CliEmail'];

	$vale = $con->query("SELECT num_cli FROM cliente WHERE num_cli LIKE '". $CliNumDoc ."'");
	$clie = $vale->fetch_row();
	if ($clie[0]==$CliNumDoc) {
		echo json_encode(array('error' => true));
	}else{
		$res = $con->query("INSERT INTO cliente (nom_cli,ape_cli,doc_cli,num_cli,dir_cli,telf_cli,email_cli) VALUES ('$CliNombre','$CliApelli','$CliTipoDo','$CliNumDoc','$CliDirecc','$CliTelefo','$CliEmail')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
 ?>
