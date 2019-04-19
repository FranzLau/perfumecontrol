<?php
	require '../../../config/conexion.php';
	$nomempfrm = $_POST['nomemp'];
	$apeempfrm = $_POST['apeemp'];
	$dniempfrm = $_POST['dniemp'];
	$passempfrm = $_POST['passemp'];
	$fechnacfrm = $_POST['fechnac'];
	$sexempfrm = $_POST['sexemp'];
	$cargoempfrm = $_POST['cargoemp'];
	$dirempfrm = $_POST['diremp'];
	$emailempfrm = $_POST['emailemp'];
	$telfempfrm = $_POST['telfemp'];
	$accempfrm = $_POST['accemp'];
	$estadoemp = $_POST['estaemp'];

	$val = $con->query("SELECT doc_emp FROM empleado WHERE doc_emp LIKE '$dniempfrm' ");
	$emple = $val->fetch_row();
	if ($emple[0]==$dniempfrm) {
		echo json_encode(array('error' => true));
	}else{
		$reg = $con->query("INSERT INTO empleado (nom_emp,ape_emp,sexo_emp,fechnac_emp,doc_emp,dir_emp,telf_emp,email_emp,cargo_emp,estado_emp,acceso_emp,pass_emp) VALUES ('$nomempfrm','$apeempfrm','$sexempfrm','$fechnacfrm','$dniempfrm','$dirempfrm','$telfempfrm','$emailempfrm','$cargoempfrm','$estadoemp','$accempfrm','$passempfrm')");
		if ($reg) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
 ?>
