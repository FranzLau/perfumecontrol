<!-- Modal Editar Proveedor-->
<div class="modal fade" id="modalReadProvee" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fas fa-edit mr-3"></i>Editar Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-4 mt-3">
        <form id="formUpdateProve">
          <input type="text" id="ProveIdEdit" name="ProveIdEdit" hidden>
          <div class="form-group row">
            <label for="ProveTipoDocEdit" class="col-sm-3 col-form-label col-form-label-sm">Doc:</label>
            <div class="col-sm-3">
              <select class="form-control form-control-sm" id="ProveTipoDocEdit" name="ProveTipoDocEdit">
                <option value="DNI" selected>DNI</option>
                <option value="RUC">RUC</option>
                <option value="otro">Otros</option>
              </select>
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="ProvNumDocEdit" name="ProvNumDocEdit" placeholder="XXX-XXXXXXX-XXX">
            </div>
          </div>
          <div class="form-group row">
            <label for="ProveRazonEdit" class="col-sm-3 col-form-label col-form-label-sm">Razón Social</label>
            <div class="col-sm-9">
              <input type="text" class="form-control form-control-sm" id="ProveRazonEdit" name="ProveRazonEdit" placeholder="Nombre de la Empresa">
            </div>
          </div>
          <div class="form-group row">
            <label for="proveSectorEdit" class="col-sm-3 col-form-label col-form-label-sm">Sector:</label>
            <div class="col-sm-9">
              <select class="form-control form-control-sm" id="proveSectorEdit" name="proveSectorEdit">
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
            <label for="ProveDirEdit" class="col-sm-3 col-form-label col-form-label-sm">Dirección:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control form-control-sm" id="ProveDirEdit" name="ProveDirEdit" placeholder="Ingrese su Dirección">
            </div>
          </div>
          <div class="form-group row">
            <label for="ProveTelfEdit" class="col-sm-3 col-form-label col-form-label-sm">Teléfono:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control form-control-sm" id="ProveTelfEdit" name="ProveTelfEdit" placeholder="Ingrese su Teléfono">
            </div>
          </div>
          <div class="form-group row">
            <label for="ProveEmailEdit" class="col-sm-3 col-form-label col-form-label-sm">Email</label>
            <div class="col-sm-9">
              <input type="emial" class="form-control form-control-sm" id="ProveEmailEdit" name="ProveEmailEdit" placeholder="empresa@empresa.com">
            </div>
          </div>
          <div class="form-group row">
            <label for="ProveUrlEdit" class="col-sm-3 col-form-label col-form-label-sm">Url:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control form-control-sm" id="ProveUrlEdit" name="ProveUrlEdit" placeholder="www.empresa.com">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-melody" data-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
        <button type="button" class="btn btn-warning-melody" id="btnUpdateProve"><i class="fas fa-edit"></i> Editar</button>
      </div>
    </div>
  </div>
</div>
