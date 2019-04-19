<!-- Modal -->
<div class="modal fade" id="ModalNewProd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formCreateProd">
          <div class="form-group row">
            <label for="ProdCodigo" class="col-sm-3 col-form-label">Código:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="ProdCodigo" name="ProdCodigo" placeholder="xxxxxxxxxx-x">
            </div>
          </div>
          <div class="form-group row">
            <label for="ProdMarca" class="col-sm-3 col-form-label">Marca:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="ProdMarca" name="ProdMarca" placeholder="Marca">
            </div>
          </div>
          <div class="form-group row">
            <label for="ProdNomb" class="col-sm-3 col-form-label">Nombre:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="ProdNomb" name="ProdNomb" placeholder="Nombre">
            </div>
          </div>
          <div class="form-group row">
            <label for="ProdPrecio" class="col-sm-3 col-form-label">Precio:</label>
            <div class="col-sm-4">
              <input type="number" step="any" class="form-control" id="ProdPrecio" name="ProdPrecio" placeholder="S/.">
            </div>
          </div>
          <div class="form-group row">
            <label for="ProdCantidad" class="col-sm-3 col-form-label">Cantidad</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" id="ProdCantidad" name="ProdCantidad" placeholder="Stock">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-melody" data-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
        <button type="button" class="btn btn-success-melody" id="btnCreateProd"><i class="fas fa-save"></i> Guardar</button>
      </div>
    </div>
  </div>
</div>
