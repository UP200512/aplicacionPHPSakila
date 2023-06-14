<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AUTORS</title>
  <link rel="stylesheet" href="../style/style.css?v=<?php echo (rand()); ?>">
</head>
<body>
  


<?php


include_once '../includes/data_base_connect.php';



?>

<?php
// include '../template/header.php' 
?>

<?php
//se realiza el query principal para mostrar los registros de la base de datos
$sql_autors = $connection->query("select * from actor;");
$result_language = $sql_autors->fetchAll(PDO::FETCH_OBJ);
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
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="location.href='tabla.php'"></button>
      </div>
    <?php
    }
    ?>

    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
    ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Registrado!</strong> Se agregaron los datos.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="location.href='tabla.php'"></button>
      </div>
    <?php
    }
    ?>

    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
    ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Eliminado!</strong> Accion correcta.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="location.href='tabla.php'"></button>
      </div>
    <?php
    }
    ?>

    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
    ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Vuelve a intentar.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="location.href='tabla.php'"></button>
      </div>
    <?php
    }
    ?>
    <!-- fin alerta -->
    <div class="card">
      <div class="card-header">
        <h2>LANGUAGES</h2>

        <br>
      </div>

      <div style="max-height:75%;" class="overflow-scroll">
        <table class="table table-striped table-bordered align-middle" id="registros">
          <thead class="sticky-top bg-white">
            <tr>
              <th scope="col"><input class="form-check-input" id="SelectAll" type="checkbox" onchange="SeleccionarTodo();"></th>
              <th scope="col">ID</th>
              <th scope="col">NAME</th>
              <th scope="col">LAST UPDATE</th>
              <th scope="col" colspan="2">Acciones</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $cont = 1;
            foreach ($result_language as $results) {
            ?>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox" id="CheckGroup<?= $cont; ?>"></th>
                <td id="id<?php echo $results->language_id; ?>" value="<?php echo $results->language_id; ?>"><?php echo $results->language_id;
                                                                  ?></td>
                <td id="nombre<?php echo $results->language_id; ?>"><?php echo $results->name;
                                                            ?></td>
                <td id="last<?php echo $results->language_id; ?>"><?php echo $results->last_update;
                                                          ?></td>
                
                <td>
                  <button type="button" id="editbtn" class="btn btn-primary btn-sm bi bi-pencil-square" value="<?php echo $results->language_id; ?>">
                    EDITAR
                  </button>
                </td>
                <td>
                  <button type="button" id="deletebtn" class="btn btn-danger btn-sm bi bi-pencil-square" value="<?php echo $results->language_id; ?>">
                    ELIMINAR
                  </button>
                </td>

              </tr>
              <!--Ventana Modal para Actualizar--->

            <?php
              $cont = $cont + 1;
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
        <a onclick="window.Agregar.show();" class="btn btn-primary btn-md" data-bs-toggle="modal">Registrar nuevo</a>
        <button type="button" class="btn btn-danger btn-md" onclick="DeleteUsers()">Eliminar seleccionados</button>
      </div>

    </div>
  </div>
</div>



<!-- comienza pop-up para agregar -->
<dialog id="Agregar">
<div class="container" hidden>
  <div class="modal fade" id="ventana1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">¡REGISTRAR!</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">X</button>

        </div>
        <div class="modal-body">
          <div class="p-4">
            <div class="card">
              <div class="card-header">
                Ingresar nuevo tipo de usuario
              </div>
              <form class="p-4" method="POST" action="register.php">
                <div class="mb-3">
                  <label class="form-label"> Nombre: </label>
                  <input type="text" class="form-control" name="txtNombre" autofocus required>
                </div>
                <div class="mb-3">
                  <label class="form-label"> Nivel: </label>
                  <input type="number" min="0" class="form-control" name="numNivel" autofocus required>
                </div>
                <div class="mb-3">
                  <label class="form-label"> N2: </label>
                  <input type="text" class="form-control" name="txtN2" autofocus>
                </div>
                <div class="d-grid">
                  <input type="hidden" name="oculto" value="1">
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
</body>
</html>

<script src="index_languages.js?v=<?php echo (rand()); ?>"></script>

