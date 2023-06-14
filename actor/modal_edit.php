<dialog id="editar">
  <div class="container">
    <div class="modal fade" id="edit_actor">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">EDIT</h4>
            <button type="button" class="close" onclick="window.editar.close();" data-bs-dismiss="modal" aria-hidden="true">X</button>

          </div>
          <div class="modal-body">
            <div class="p-4">
              <div class="card">
                <div class="card-header">
                  EDITAR ACTOR
                </div>
                <form class="p-4" method="POST" action="edit.php">
                  <div class="mb-3">
                    <label class="form-label"> ID: </label>
                    <input type="text" class="form-control" name="numID" id="input_id" autofocus readonly>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"> Name: </label>
                    <input type="text" class="form-control" name="txtNombre" id="input_name" autofocus required>
                    <label class="form-label"> Last Name: </label>
                    <input type="text" class="form-control" name="txtApellido" id="input_apellido" autofocus required>
                  </div>
                  <div class="d-grid">
                    <input type="hidden" name="oculto" value="1">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <!-- <input type="submit" class="btn-primary" value="Registrar"> -->
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</dialog>