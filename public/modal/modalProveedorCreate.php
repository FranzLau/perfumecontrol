<!-- Modal Nuevo Proveedor-->
<div class="modal fade" id="modalProveedorCreate" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><i class="far fa-file mr-3"></i>Nuevo Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-4 mt-3">
        <form id="formCreateProve">
          <div class="form-group row">
            <label for="ProveTipoDoc" class="col-sm-3 col-form-label col-form-label-sm">Doc:</label>
            <div class="col-sm-3">
              <select class="form-control form-control-sm" id="ProveTipoDoc" name="ProveTipoDoc">
                <option value="DNI" selected>DNI</option>
                <option value="RUC">RUC</option>
                <option value="otro">Otros</option>
              </select>
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="ProvNumDoc" name="ProvNumDoc" placeholder="XXX-XXXXXXX-XXX">
            </div>
          </div>
          <div class="form-group row">
            <label for="ProveRazon" class="col-sm-3 col-form-label col-form-label-sm">Razón Social</label>
            <div class="col-sm-9">
              <input type="text" class="form-control form-control-sm" id="ProveRazon" name="ProveRazon" placeholder="Nombre de la Empresa">
            </div>
          </div>
          <div class="form-group row">
            <label for="proveSector" class="col-sm-3 col-form-label col-form-label-sm">Sector:</label>
            <div class="col-sm-9">
              <select class="form-control form-control-sm" id="proveSector" name="proveSector">
                <option value="Gas" selected>Gas</option>
                <option value="Grifo">Grifo</option>
                <option value="Alimentos">Alimentos</option>
                <option value="Salud">Salud</option>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Servicio">Servicio</option>
                <option value="otro">Otros ...</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="ProveDir" class="col-sm-3 col-form-label col-form-label-sm">Dirección:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control form-control-sm" id="ProveDir" name="ProveDir" placeholder="Ingrese su Dirección">
            </div>
          </div>
          <div class="form-group row">
            <label for="ProveTelf" class="col-sm-3 col-form-label col-form-label-sm">Teléfono:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control form-control-sm" id="ProveTelf" name="ProveTelf" placeholder="Ingrese su Teléfono">
            </div>
          </div>
          <div class="form-group row">
            <label for="ProveEmail" class="col-sm-3 col-form-label col-form-label-sm">Email</label>
            <div class="col-sm-9">
              <input type="emial" class="form-control form-control-sm" id="ProveEmail" name="ProveEmail" placeholder="empresa@empresa.com">
            </div>
          </div>
          <div class="form-group row">
            <label for="ProveUrl" class="col-sm-3 col-form-label col-form-label-sm">Url:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control form-control-sm" id="ProveUrl" name="ProveUrl" placeholder="www.empresa.com">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-melody" data-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
        <button type="button" class="btn btn-success-melody" id="btnCreateProve"><i class="fas fa-save"></i> Guardar</button>
      </div>
    </div>
  </div>
</div>
