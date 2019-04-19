<?php
	require '../../../config/conexion.php';
	$idclifrm = $_POST['CliIdEdit'];
	$nomclifrm = $_POST['CliNombreEdit'];
	$apeclifrm = $_POST['CliApellidoEdit'];
	$tdoclifrm = $_POST['CliTipoDocEdit'];
	$ndoclifrm = $_POST['CliNumDocEdit'];
	$dirclifrm = $_POST['CliDireccionEdit'];
	$fnoclifrm = $_POST['CliTelefonoEdit'];
	$mailclifrm = $_POST['CliEmailEdit'];

	$upd = $con->query("UPDATE cliente SET nom_cli='$nomclifrm',
                    											ape_cli='$apeclifrm',
                    											doc_cli='$tdoclifrm',
                    											num_cli='$ndoclifrm',
                    											dir_cli='$dirclifrm',
                    											telf_cli='$fnoclifrm',
                    											email_cli='$mailclifrm'
										WHERE id_cli = '$idclifrm' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

  $con->close();
?>
