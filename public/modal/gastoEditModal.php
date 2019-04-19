<!-- Modal -->
<div class="modal fade" id="modalEditGasto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Editar Gasto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formEditGasto">
          <input type="text" hidden="" name="idGto" id="idGto">
          <div class="form-group row">
            <label for="tipoGastoEdit" class="col-sm-3 col-form-label">Tipo:</label>
            <div class="col-sm-9">
              <select class="form-control" id="tipoGastoEdit" name="tipoGastoEdit">
                <option value="0">Elije una..</option>
                <option value="Combustible">Combustible</option>
                <option value="Movilidad">Movilidad</option>
                <option value="Útiles de Aseo">Útiles de Aseo</option>
                <option value="Útiles de Oficina">Útiles de Oficina</option>
                <option value="Aumentos">Aumentos</option>
                <option value="Otros">Otros</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="precioGastoEdit" class="col-sm-3 col-form-label">Precio:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="precioGastoEdit" name="precioGastoEdit">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-melody" data-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
        <button type="button" class="btn btn-warning-melody" id="btnUpdateGasto"><i class="fas fa-edit"></i> Editar</button>
      </div>
    </div>
  </div>
</div>
