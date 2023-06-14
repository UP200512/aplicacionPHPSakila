<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LANGUAGES</title>
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
  // include '../template/header.php' 
  ?>

  <?php
  //se realiza el query principal para mostrar los registros de la base de datos
  $sql_language = $connection->query("select fa.actor_id, fa.film_id, concat(first_name, ' ', last_name) actor, title  film, fa.last_update FROM film_actor fa left join actor a on fa.actor_id = a.actor_id 
  left join film f on fa.film_id=f.film_id order by actor;");
  $result_language = $sql_language->fetchAll(PDO::FETCH_OBJ);
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
          <h2>FILM-ACTOR</h2>

          <br>
        </div>

        <div style="max-height:75%;" class="overflow-scroll">
          <table class="table table-striped table-bordered align-middle" id="registros">
            <thead class="sticky-top bg-white">
              <tr>
                <th scope="col"><input class="form-check-input" id="SelectAll" type="checkbox" onchange="SeleccionarTodo();"></th>
                <th scope="col" hidden>ID ACTOR</th>
                <th scope="col" hidden>ID FILM</th>
                <th scope="col">ACTOR</th>
                <th scope="col">FILM</th>
                <th scope="col">LAST UPDATE</th>
                <th scope="col" colspan="2">ACTIONS</th>
              </tr>
            </thead>
            <tbody>

              <?php

              foreach ($result_language as $results) {
              ?>
                <tr>
                  <th scope="row"><input class="form-check-input" value="<?php echo($results->actor_id . ',' . $results->film_id); ?>" type="checkbox" name="check_cell"></th>
                  <td id="id<?php echo($results->actor_id . ',' . $results->film_id); ?>" value="<?php echo $results->language_id; ?>"><?php echo $results->language_id;
                                                                                                                ?></td>
                  <td id="Actor<?php echo($results->actor_id . ',' . $results->film_id); ?>"><?php echo $results->name;
                                                                      ?></td>
                  <td id="last<?php echo($results->actor_id . ',' . $results->film_id); ?>"><?php echo $results->last_update;
                                                                    ?></td>

                  <td>
                    <button type="button" id="editbtn" class="btn btn-primary btn-sm bi bi-pencil-square" onclick="ChangeRegister('<?php echo $results->language_id; ?>')" value="<?php echo $results->language_id; ?>">
                      EDIT
                    </button>
                  </td>
                  <td>
                    <button type="button" id="deletebtn" class="btn btn-danger btn-sm bi bi-pencil-square" value="<?php echo $results->language_id; ?>">
                      DELETE
                    </button>
                  </td>

                </tr>
              <?php
              }
              ?>
              <?php
              // include('modal_edit_register.php');
              ?>

            </tbody>
          </table>
        </div>
        <div>
          <br>
          <button onclick="window.agregar.showModal();" class="btn btn-primary btn-md" data-bs-toggle="modal">REGISTER NEW</button>
          <button type="button" class="btn btn-danger btn-md" onclick="DeleteSelected()">EDELETE SELECTED</button>
        </div>

      </div>
    </div>
  </div>




</body>

</html>
<?php include "modal_add.php";
// include "modal_edit_reister.php"; 
?>
<?php
// include "modal_add.php";
include "modal_edit.php"; 
?>

<script src="../templates/jquery-3.6.1.min.js?v=<?php echo (rand()); ?>"></script>
<script src="index_film_actor.js?v=<?php echo (rand()); ?>"></script>

<?php
include "../footer.php";
?>