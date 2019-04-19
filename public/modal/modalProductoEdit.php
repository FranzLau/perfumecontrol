<!-- Modal -->
<div class="modal fade" id="ModalUpdateProd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Editar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUpdateProd">
          <input type="text" name="ProdIdUpdate" id="ProdIdUpdate" hidden>
          <div class="form-group row">
            <label for="ProdCodUpdate" class="col-sm-3 col-form-label">Código:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="ProdCodUpdate" name="ProdCodUpdate">
            </div>
          </div>
          <div class="form-group row">
            <label for="ProdMarcaUpdate" class="col-sm-3 col-form-label">Marca:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="ProdMarcaUpdate" name="ProdMarcaUpdate">
            </div>
          </div>
          <div class="form-group row">
            <label for="ProdNombUpdate" class="col-sm-3 col-form-label">Nombre:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="ProdNombUpdate" name="ProdNombUpdate">
            </div>
          </div>
          <div class="form-group row">
            <label for="ProdPrecioUpdate" class="col-sm-3 col-form-label">Precio:</label>
            <div class="col-sm-4">
              <input type="number" step="any" class="form-control" id="ProdPrecioUpdate" name="ProdPrecioUpdate">
            </div>
          </div>
          <!-- <div class="form-group row">
            <label for="ProdCantidad" class="col-sm-3 col-form-label">Cantidad</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" id="ProdCantidad" name="ProdCantidad" placeholder="Stock">
            </div>
          </div> -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-melody" data-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
        <button type="button" class="btn btn-warning-melody" id="btnUpdateProd"><i class="fas fa-edit"></i> Editar</button>
      </div>
    </div>
  </div>
</div>
