<?php
	require '../../../config/conexion.php';
	$provIdEdit =$_POST['ProveIdEdit'];
	$provDocEdit = $_POST['ProveTipoDocEdit'];
	$provNumEdit = $_POST['ProvNumDocEdit'];
	$provRazonEdit = $_POST['ProveRazonEdit'];
	$provSectorEdit = $_POST['proveSectorEdit'];
	$provDireccEdit = $_POST['ProveDirEdit'];
	$provTelefEdit = $_POST['ProveTelfEdit'];
	$provEmailEdit = $_POST['ProveEmailEdit'];
	$provUrlEdit = $_POST['ProveUrlEdit'];

	$upd = $con->query("UPDATE proveedor SET razon_social='$provRazonEdit',
                      											sector_comercial='$provSectorEdit',
                      											doc_prov='$provDocEdit',
                      											num_prov='$provNumEdit',
                      											dir_prov='$provDireccEdit',
                      											telf_prov='$provTelefEdit',
                      											email_prov='$provEmailEdit',
                      											url_prov='$provUrlEdit'
										WHERE id_prov= '$provIdEdit' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
 ?>
