<!-- Modal -->
<div class="modal fade" id="ModalAddProd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fas fa-cart-plus"></i> Agregar Stock</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-4 mt-3">
        <div class="row">
          <div class="col-sm-12 text-center text-lg-left">
            <h2 id="NombProdIngreso"></h2>
            <p>Codigo: <span id="CodProdIngreso"></span> </p>
          </div>
        </div>
        <hr>
        <form class="" id="formCreateIngreso">
          <input type="text" name="idProdIngreso" id="idProdIngreso" hidden>
          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="NewProveId" class="col-form-label col-form-label-sm">Proveedor:</label>
              <select class="form-control form-control-sm" id="NewProveId" name="NewProveId">
                <option selected value="">Elije uno</option>
                  <?php $prov = $con->query("SELECT * FROM proveedor");
                    while ($row = $prov->fetch_assoc()) {
                      echo "<option value='".$row['id_prov']."' ";
                      echo ">";
                      echo $row['razon_social'];
                      echo "</option>";
                    }
                  ?>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="updateNewStock" class="col-form-label col-form-label-sm">Cantidad:</label>
              <input type="number" class="form-control form-control-sm" id="updateNewStock" name="updateNewStock" placeholder="0">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-melody" data-dismiss="modal"><i class="fas fa-times mr-2"></i>Cerrar</button>
        <button type="button" class="btn btn-success-melody" id="btnCreateIngreso"><i class="fas fa-plus mr-2"></i>Agregar</button>
      </div>
    </div>
  </div>
</div>
