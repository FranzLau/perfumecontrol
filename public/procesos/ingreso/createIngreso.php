<?php
session_start();
require '../../../config/conexion.php';
require '../../../config/crud.php';
$obj = new crud();
date_default_timezone_set('America/Lima');

$IngresoProdId = $_POST['idProdIngreso'];
$IngresoProvId = $_POST['NewProveId'];
$IngresoProdCd = $_POST['updateNewStock'];
$IngresoFechas = date('Y-m-d');
$IngresoEmplId = $_SESSION['loginPat']['id_emp'];

$res = $con->query("INSERT INTO ingreso (id_prod,id_emp,id_prov,fecha_ingreso,cant_ingreso) VALUES ('$IngresoProdId','$IngresoEmplId','$IngresoProvId','$IngresoFechas','$IngresoProdCd')");
if ($res) {
  //update stock
  echo $obj->updateAddStock($IngresoProdId,$IngresoProdCd);
  echo json_encode(array('error' => false));
}else{
  echo json_encode(array('error' => true));
}
$con->close();
 ?>
