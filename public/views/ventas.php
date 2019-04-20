<?php
  session_start();
  require '../../config/conexion.php';
  if (isset($_SESSION['loginPat'])) {
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include('head.php'); ?>
  </head>
  <body style="background: #F2F4F4">
    <?php include('navbar.php'); ?>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <div class="container">
      <div class="row mt-5">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body p-0">
              <div class="row">
                <div class="col-sm-12">
                  <nav class="navbar navbar-light bg-light">
                    <span class="navbar-brand mb-0 h1"><i class="fas fa-shopping-cart"></i> Ventas</span>
                    <ul class="nav justify-content-end">
                      <li class="nav-item">
                        <button type="button" id="" class="nav-link mr-2 btn btn-danger-melody"><i class="fas fa-trash"></i></button>
                      </li>
                      <li class="nav-item">
                        <button type="button" id="" class="nav-link btn btn-info-melody"><i class="fas fa-plus"></i></button>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <form class="p-3">

                    <div class="form-group row">
                      <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Cliente</label>
                      <div class="col-sm-9">
                        <!-- <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm"> -->
                        <select class="form-control form-control-sm">
                          <option selected>Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Producto</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Cantidad</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Cantidad</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Cantidad</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">

            </div>
          </div>
        </div>
      </div>
    </div>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('scripts.php'); ?>
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>
