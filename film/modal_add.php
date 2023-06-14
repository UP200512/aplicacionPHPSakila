<?php
include_once '../includes/data_base_connect.php';
$sql_language = $connection->query("select * from language");
$result_language = $sql_language->fetchAll(PDO::FETCH_OBJ);
?>
<?php $years = range(1900, strftime("%Y", time())); ?>

<dialog id="agregar">
  <div class="container">
    <div class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">¡REGISTRAR!</h4>
            <button type="button" onclick="window.agregar.close();" class="close" data-bs-dismiss="modal" aria-hidden="true">X</button>

          </div>
          <div class="modal-body">
            <div class="p-4">
              <div class="card">
                <div class="card-header">
                  Ingresar nueva pelicula
                </div>
                <form class="p-4" method="POST" action="register.php">
                  <div class="mb-3">
                    <label class="form-label"> Title *</label> <br>
                    <input type="text" class="form-control" name="title" maxlength="128" autofocus required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"> Description: </label> <br>
                    <input type="text" class="form-control" name="description" autofocus>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"> Release year: </label><br>
                    <!-- <input type="number" min="1800" max="2099" class="form-control" name="release_year" autofocus> -->
                    <select class="form-control" name="release_year">
                      <option selected disabled hidden>Select Year</option>
                      <?php foreach (array_reverse($years) as $year) : ?>
                        <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                      <?php endforeach; ?>
                    </select>


                  </div>
                  <div class="mb-3">
                    <label class="form-label">Language:</label> <br>
                    <select name="language_id" id="language_id" required>
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
                    <select name="original_language_id" id="original_language_id" required>
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
                    <input type="number" min="1" max="255" class="form-control" value="3" name="rental_duration" autofocus required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"> Rental rate: </label><br>
                    <input type="number" min="1" max="99.99" step="0.01" value="4.99" class="form-control" name="rental_rate" autofocus required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"> Length: </label><br>
                    <input type="number" min="0" max="65535" class="form-control" name="length" autofocus>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"> Repleacement cost: </label><br>
                    <input type="number" min="0" max="999.99" step="0.01" value="19.99" class="form-control" name="replacement_cost"  required autofocus>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"> Rating: </label><br>
                    <!-- <input type="text" class="form-control" name="rating" autofocus> -->
                    <select name="rating" id="rating" required>
                      <option value="" selected disabled hidden>Rating</option>

                      <option value="G" selected>G</option>
                      <option value="PG">PG</option>
                      <option value="PG-13">PG-13</option>
                      <option value="R">R</option>
                      <option value="NC-17">NC-17</option>

                    </select>

                  </div>
                  <div class="mb-3">
                    <label class="form-label"> Special features: </label> <br>
                    <!-- <input type="text" class="form-control" name="special_features" autofocus> -->
                    <input class="form-check-input" name="Trailers" value="Trailers" id="Trailers" type="checkbox"> Trailers</input>
                    <input class="form-check-input" name="Commentaries" value="Commentaries" id="Commentaries" type="checkbox"> Commentaries</input>
                    <br>
                    <input class="form-check-input" name="Deleted_Scenes" value="Deleted Scenes" id="Deleted Scenes" type="checkbox"> Deleted Scenes</input>
                    <input class="form-check-input" name="Behind_the_Scenes" value="Behind the Scenes" id="Behind the Scenes" type="checkbox"> Behind the Scenes</input>
                  </div>
                  <div class="d-grid">
                    <br>

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