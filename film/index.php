<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/styles.css?v=<?php echo (rand()); ?>">
  <title>film</title>
  <link rel="stylesheet" href="../styles/styles.css?v=<?php echo (rand()); ?>">
  <link rel="stylesheet" href="../styles/stylesIndex.css?v=<?php echo (rand()); ?>">
  <link rel="stylesheet" href="../styles/headerStyles.css?v=<?php echo (rand()); ?>">
  <link rel="stylesheet" href="../styles/globalStyles.css?v=<?php echo (rand()); ?>">
  <link rel="stylesheet" href="../styles/normalize.css?v=<?php echo (rand()); ?>">

</head>

<body>



  <?php
  include_once '../includes/data_base_connect.php';

  include '../index/header.php';


  ?>
  <?php
  //include '../template/header.php' 
  ?>

  <?php
  //se realiza el queryprincipal para mostrar los registros de la base de datos
  $sql_film = $connection->query("SELECT f.film_id, f.title, f.description, f.release_year, 
l1.name AS language_id, f.language_id id_language, f.original_language_id original_id_language,
l2.name AS original_language_id,
f.rental_duration, f.rental_rate, f.length, f.replacement_cost,
f.rating, f.special_features, f.last_update
FROM film f
JOIN language l1 ON f.language_id = l1.language_id
LEFT JOIN language l2 ON f.original_language_id = l2.language_id;");
  $result_film = $sql_film->fetchAll(PDO::FETCH_OBJ);
  ?>
  <br>


  <div class="container-fluid">
    <div class="row justify-content-center">
      <!-- <div class="container-sm"> -->
      <!-- inicio alerta -->
      <?php
      if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
      ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Advertencia!</strong> Por favor rellena los campos requeridos.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="location.href='index.php'">X</button>
        </div>
      <?php
      }
      ?>

      <?php
      if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
      ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Registrado!</strong> Se agregaron los datos.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="location.href='index.php'">X</button>
        </div>
      <?php
      }
      ?>

      <?php
      if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
      ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Eliminado!</strong> Accion correcta.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="location.href='index.php'">X</button>
        </div>
      <?php
      }
      ?>

      <?php
      if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
      ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> Vuelve a intentar.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="location.href='index.php'">X</button>
        </div>
      <?php
      }
      ?>
      <!-- fin alerta -->
      <div class="card">
        <div class="card-header">
          <h2>Film</h2>
          <br>
        </div>

        <div style="max-height:75%;" class="overflow-scroll">
          <table class="table table-striped table-bordered align-middle" id="registros">
            <thead class="sticky-top bg-white">
              <tr>
                <th scope="col"><input class="form-check-input" id="SelectAll" type="checkbox" onchange="SeleccionarTodo();"></th>
                <th scope="col">ID</th>
                <th scope="col">TITLE</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">RELEASE YEAR</th>
                <th scope="col">Language</th>
                <th scope="col" hidden>language_id</th>
                <th scope="col" hidden>original_id_language</th>
                <th scope="col">Original language</th>
                <th scope="col">RENTAL DURATION</th>
                <th scope="col">RENTAL RATE</th>
                <th scope="col">LENGTH</th>
                <th scope="col">REPLACEMENT COST</th>
                <th scope="col">RATING</th>
                <th scope="col">SPECIAL FEATURES</th>
                <th scope="col">LAST UPDATE</th>
                <th scope="col" colspan="2">ACTIONS</th>
              </tr>
            </thead>
            <tbody>

              <?php

              foreach ($result_film as $results) {
              ?>
                <tr>
                  <th scope="row"><input class="form-check-input" value="<?php echo $results->film_id; ?>" type="checkbox" id="CheckGroup<?= $cont; ?>" name="check_cell"></th>
                  <td id="id<?php echo $results->film_id; ?>" value="<?php echo $results->film_id; ?>"><?php echo $results->film_id;
                                                                                                        ?></td>
                  <td id="title<?php echo $results->film_id; ?>"><?php echo $results->title;
                                                                  ?></td>
                  <td id="description<?php echo $results->film_id; ?>"><?php echo $results->description;
                                                                        ?></td>
                  <td id="year<?php echo $results->film_id; ?>"><?php echo $results->release_year;
                                                                ?></td>
                  <td id="language<?php echo $results->film_id; ?>"><?php echo $results->language_id;
                                                                    ?></td>
                  <td hidden id="id_language<?php echo $results->film_id; ?>"><?php echo $results->id_language;
                                                                              ?></td>
                  <td hidden id="original_id_language<?php echo $results->film_id; ?>"><?php echo $results->original_id_language;
                                                                                        ?></td>
                  <td id="original_language<?php echo $results->film_id; ?>"><?php echo $results->original_language_id;
                                                                              ?></td>
                  <td id="duration<?php echo $results->film_id; ?>"><?php echo $results->rental_duration;
                                                                    ?></td>
                  <td id="rental-rate<?php echo $results->film_id; ?>"><?php echo $results->rental_rate;
                                                                        ?></td>
                  <td id="length<?php echo $results->film_id; ?>"><?php echo $results->length;
                                                                  ?></td>
                  <td id="replacement-cost<?php echo $results->film_id; ?>"><?php echo $results->replacement_cost;
                                                                            ?></td>
                  <td id="rating<?php echo $results->film_id; ?>"><?php echo $results->rating;
                                                                  ?></td>
                  <td id="features<?php echo $results->film_id; ?>"><?php echo $results->special_features;
                                                                    ?></td>
                  <td id="last_update<?php echo $results->film_id; ?>"><?php echo $results->last_update;
                                                                        ?></td>

                  <td>
                    <button type="button" id="editbtn" class="btn btn-primary btn-sm bi bi-pencil-square" onclick="ChangeRegister('<?php echo $results->film_id; ?>')" value="<?php echo $results->film_id; ?>">
                      EDIT
                    </button>
                  </td>
                  <td>
                    <button type="button" id="deletebtn" class="btn btn-danger btn-sm bi bi-pencil-square" value="<?php echo $results->film_id; ?>">
                      DELETE
                    </button>
                    <!--<a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="delete.php?codigo=<?php echo $results->id;
                                                                                                                              ?>"><i class="bi bi-trash"></i></a>-->
                  </td>

                </tr>
                <!--Ventana Modal para Actualizar--->

              <?php

              }
              ?>
              <?php
              //include('modal_edit_register.php'); 
              ?>

            </tbody>
          </table>
        </div>


      </div>
    </div>
  </div>




  <!-- comienza pop-up para agregar -->


</body>
<br><br><br>
</html>

<?php
include "modal_add.php";
include "modal_edit.php";

?>

<script src="../templates/jquery-3.6.1.min.js?v=<?php echo (rand()); ?>"></script>
<script src="index_film.js?v=<?php echo (rand()); ?>"></script>
<div>
  <br>
  <button onclick="window.agregar.showModal();" class="btn btn-primary btn-md" data-bs-toggle="modal">REGISTER NEW</button>
  <button type="button" class="btn btn-danger btn-md" onclick="DeleteSelected()">DELETE SELECTED</button>
</div>

<?php
include "../footer.php";
?>