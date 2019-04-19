<?php
	require '../../../config/conexion.php';
	$idempform = $_POST['idemP'];
	$empnombre = $_POST['nomemP'];
	$empapelli = $_POST['apemP'];
	$empdocnum = $_POST['dniemP'];
	$empcargos = $_POST['cargoemP'];
	$empdirecc = $_POST['diremP'];
	$empemails = $_POST['emailemP'];
	$emptelefo = $_POST['telfemP'];

	$empfechan = $_POST['fnemP'];
	$emplesexo = $_POST['sexemP'];
	$empestado = $_POST['estadoEmp'];
	$empacceso = $_POST['accemP'];
	$emppasswo = $_POST['passemP'];

	$upd = $con->query("UPDATE empleado SET nom_emp='$empnombre',
                    											ape_emp='$empapelli',
                    											sexo_emp='$emplesexo',
                    											fechnac_emp='$empfechan',
                    											doc_emp='$empdocnum',
                    											dir_emp='$empdirecc',
                    											telf_emp='$emptelefo',
                    											email_emp='$empemails',
                    											cargo_emp='$empcargos',
                    											estado_emp='$empestado',
                    											acceso_emp='$empacceso',
                    											pass_emp='$emppasswo'
										                 WHERE id_emp= '$idempform' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
 ?>
