<dialog id="editar">
  <div class="container">
    <div class="modal fade" id="edit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">EDITAR</h4>
            <button type="button" class="close" data-bs-dismiss="modal" onclick="window.editar.close();" aria-hidden="true">X</button>

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
                    <input type="text" class="form-control" name="input_id" id="input_id" autofocus readonly>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"> Title *</label> <br>
                    <input type="text" class="form-control" name="title" id="title" maxlength="128" autofocus required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"> Description: </label> <br>
                    <input type="text" class="form-control" name="description" id="description" autofocus>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"> Release year: </label><br>
                    <!-- <input type="number" min="1800" max="2099" class="form-control" name="release_year" autofocus> -->
                    <select class="form-control" name="release_year" id="year">
                      <option selected disabled hidden>Select Year</option>
                      <?php foreach (array_reverse($years) as $year) : ?>
                        <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                      <?php endforeach; ?>
                    </select>


                  </div>
                  <div class="mb-3">
                    <label class="form-label">Language:</label> <br>
                    <select name="language_id" id="language_id_modal" required>
                      <option value="" selected disabled hidden>Language</option>
                      
                      <?php

                      foreach ($result_language as $results) {
                      ?>
                        <option value="<?php echo ($results->language_id); ?>"><?php echo ($results->name); ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Original language:</label> <br>
                    <select name="original_language_id" id="original_language_id_modal" required>
                      <option value="" selected disabled hidden>Original language</option>
                      <?php

                      foreach ($result_language as $results) {
                      ?>
                        <option value="<?php echo ($results->language_id); ?>"><?php echo ($results->name); ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"> Rental duration: </label><br>
                    <input type="number" min="1" max="255" class="form-control"  name="rental_duration" id="rental_duration" autofocus required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"> Rental rate: </label><br>
                    <input type="number" min="1" max="99.99" step="0.01" class="form-control" id="rental_rate" name="rental_rate" autofocus required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"> Length: </label><br>
                    <input type="number" min="0" max="65535" class="form-control"  id="length" name="length" autofocus>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"> Repleacement cost: </label><br>
                    <input type="number" min="0" max="999.99" step="0.01"  class="form-control" id="replacement_cost" name="replacement_cost" required autofocus>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"> Rating: </label><br>
                    <!-- <input type="text" class="form-control" name="rating" autofocus> -->
                    <select name="rating" id="rating_modal" required>
                      <option value="" selected disabled hidden>Rating</option>

                      <option value="G" >G</option>
                      <option value="PG">PG</option>
                      <option value="PG-13">PG-13</option>
                      <option value="R">R</option>
                      <option value="NC-17">NC-17</option>

                    </select>

                  </div>
                  <div class="mb-3">
                    <label class="form-label"> Special features: </label> 
                    <!-- <input type="text" class="form-control" name="special_features" autofocus> -->
                    <!-- <input type="checkbox" id="Trailers"  class="form-check-input" name="Trailers" value="Trailers"  > Trailers -->
                    <!-- <input  type="checkbox" id="Commentaries" class="form-check-input" name="Commentaries" value="Commentaries"  > Commentaries -->
                    
                    <input  type="checkbox"  value="Trailers" name="Trailers"  id="1" > Trailers
                    <input type="checkbox"  value="Commentaries" name="Commentaries" id="2" > Commentaries
                    <input type="checkbox" id="3" name="Deleted_Scenes" value="Deleted Scenes"   > Deleted Scenes
                    <input  type="checkbox" id="4" name="Behind_the_Scenes" value="Behind the Scenes"    > Behind the Scenes
                    
                  </div>
                  <div class="d-grid">
                    <br>
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
</dialog>
