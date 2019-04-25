<!-- Modal CLIENTE create-->
<div class="modal fade" id="modalClienteCreate" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><i class="far fa-file mr-3"></i>Nuevo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-4 mt-3">
        <form id="formCreateCliente">
          <div class="form-group row">
            <label for="CliTipoDoc" class="col-sm-2 col-form-label col-form-label-sm">Doc:</label>
            <div class="col-sm-3">
              <select class="form-control form-control-sm" id="CliTipoDoc" name="CliTipoDoc">
                <option value="DNI" selected>DNI</option>
                <option value="RUC">RUC</option>
                <option value="otro">Otros</option>
              </select>
            </div>
            <div class="col-sm-7">
              <input type="text" class="form-control form-control-sm" id="CliNumDoc" name="CliNumDoc" placeholder="XXXXXXXX">
            </div>
          </div>
          <div class="form-group row">
            <label for="CliNombre" class="col-sm-2 col-form-label col-form-label-sm">Nombre:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="CliNombre" name="CliNombre" placeholder="Nombres">
            </div>
          </div>
          <div class="form-group row">
            <label for="CliApellido" class="col-sm-2 col-form-label col-form-label-sm">Apellidos:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="CliApellido" name="CliApellido" placeholder="Apellidos">
            </div>
          </div>
          <div class="form-group row">
            <label for="CliDireccion" class="col-sm-2 col-form-label col-form-label-sm">Dirección:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="CliDireccion" name="CliDireccion">
            </div>
          </div>
          <div class="form-group row">
            <label for="CliTelefono" class="col-sm-2 col-form-label col-form-label-sm">Teléfono:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control form-control-sm" id="CliTelefono" name="CliTelefono">
            </div>
          </div>
          <div class="form-group row">
            <label for="CliEmail" class="col-sm-2 col-form-label col-form-label-sm">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control form-control-sm" id="CliEmail" name="CliEmail">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-melody" data-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
        <button type="button" class="btn btn-success-melody" id="btnClienteCreate"><i class="fas fa-save"></i> Guardar</button>
      </div>
    </div>
  </div>
</div>
