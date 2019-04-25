<?php
session_start();
require '../../config/conexion.php';
?>
<div class="row">
  <div class="col-sm-3 d-flex">
    <div class="m-auto">
      <?php if ($_SESSION['loginPat']['sexo_emp'] == "M") { ?>
        <img src="../../assets/css/img/registermen.png" class="m-auto" alt="" width="250px">
      <?php }else{ ?>
        <img src="../../assets/css/img/registermen.png" class="m-auto" alt="" width="250px">
      <?php } ?>
    </div>
  </div>
  <div class="col-sm-9">
    <?php
      $idmy = $_SESSION['loginPat']['id_emp'];
  		$sql = $con->query("SELECT * FROM empleado WHERE id_emp='$idmy' ");
  		$date = $sql->fetch_row();
     ?>
    <div class="row">
      <div class="col-sm-6 text-center text-lg-left">
				<h3 class="font-weight-bold"><?php echo $_SESSION['loginPat']['nom_emp'] ?></h3>
        <p><strong><?php echo $date[11] ?></strong></p>
			</div>
      <div class="col-sm-6 text-center text-lg-right">
        <button type="button" name="button" class="btn btn-sm btn-warning-melody"><i class="fas fa-pencil-alt mr-2"></i>Editar</button>
        <button type="button" name="button" class="btn btn-sm btn-success-melody"><i class="fas fa-save mr-2"></i>Guardar</button>
      </div>
    </div>
    <hr>
    <div class="row">

    </div>
  </div>
</div>
