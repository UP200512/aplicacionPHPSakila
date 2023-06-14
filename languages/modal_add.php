<!-- comienza pop-up para agregar -->
<dialog id="agregar">
  <div class="container">
    <div class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">REGISTER!</h4>
            <button type="button" onclick="window.agregar.close();" class="close" data-bs-dismiss="modal" aria-hidden="true">X</button>

          </div>
          <div class="modal-body">
            <div class="p-4">
              <div class="card">
                <div class="card-header">
                  Add language
                </div>
                <form class="p-4" method="POST" action="register.php">
                  <div class="mb-3">
                    <label class="form-label"> Name: </label>
                    <input type="text" class="form-control" name="name_language" autofocus required>
                  </div>
                  <div class="d-grid">

                    <button type="submit" class="btn btn-primary">Registrar</button>
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