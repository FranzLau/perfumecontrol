<?php include('../modal/about.php'); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-navbar-primary" style="box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);">
  <div class="container">
    <a class="navbar-brand" href="index.php">Patricia Vilca</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown mr-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarVentas" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-shopping-cart"></i> Ventas
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarVentas">
            <a class="dropdown-item" href="ventas.php"><i class="fab fa-fly"></i> Nueva Venta</a>
            <a class="dropdown-item" href="#"><i class="fab fa-fly"></i> Nueva Cuota</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="clientes.php"><i class="fab fa-fly"></i> Clientes</a>
          </div>
        </li>
        <li class="nav-item dropdown mr-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarProducto" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-cubes"></i> Inventario
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarProducto">
            <a class="dropdown-item" href="productos.php"><i class="fab fa-fly"></i> Productos</a>
            <!-- <a class="dropdown-item" href="#"><i class="fab fa-fly"></i> Ingresos</a> -->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="proveedor.php"><i class="fab fa-fly"></i> Proveedores</a>
          </div>
        </li>
        <li class="nav-item dropdown mr-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarTienda" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-store"></i> Mantenimiento
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarTienda">
            <a class="dropdown-item" href="empleado.php"><i class="fab fa-fly"></i> Empleados</a>
            <a class="dropdown-item" href="#"><i class="fab fa-fly"></i> Caja</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="retiro.php"><i class="fab fa-fly"></i> Gastos</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php if ($_SESSION['loginPat']['sexo_emp'] == "M") { ?>
              <img src="../../assets/css/img/registermen.png" alt="" width="30px">
            <?php  }else{ ?>
              <img src="../../assets/css/img/registergirl.png" alt="" width="30px">
            <?php  } ?>
            <?php echo $_SESSION['loginPat']['nom_emp'] ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <!-- <a class="dropdown-item" href="profile.php"><i class="fas fa-cog fa-spin"></i> Perfil</a> -->
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ModalAbout"><i class="fas fa-code"></i> Acerca de</a>
            <a class="dropdown-item" href="#" onclick="salir()"><i class="fas fa-sign-out-alt"></i> Salir</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
