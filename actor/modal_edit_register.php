<div class="container">
  <div class="modal fade" id="edit_tipo_usuario">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">EDITAR</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">X</button>

        </div>
        <div class="modal-body">
          <div class="p-4">
            <div class="card">
              <div class="card-header">
                Editar tipo de usuario
              </div>
              <form class="p-4" method="POST" action="edit.php">
                <div class="mb-3">
                  <label class="form-label"> ID: </label>
                  <input type="text" class="form-control" name="numID" id="mid" autofocus readonly>
                </div>
                <div class="mb-3">
                  <label class="form-label"> Nombre: </label>
                  <input type="text" class="form-control" name="txtNombre" id="mnombre" autofocus required>
                </div>
                <div class="mb-3">
                  <label class="form-label"> Nivel: </label>
                  <input type="number" class="form-control" name="numNivel" id="mnivel" autofocus required>
                </div>
                <div class="mb-3">
                  <label class="form-label"> N2: </label>
                  <input type="text" class="form-control" name="txtN2" id="mn2" autofocus>
                </div>
                <div class="d-grid">
                  <input type="hidden" name="oculto" value="1">
                  <button type="submit" class="btn btn-primary">Guardar cambios</button>
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