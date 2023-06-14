<?php
    include("../includes/databaseconnect.php");
  $id_to_delete = "";
  if (isset($_GET["id_to_delete"])) :
    // asignar w1 y w2 a dos variables
    $id_to_delete = $_GET["id_to_delete"]; ?>

    <script>
      alert("Se borraran los elementos seleccionados");
    </script>
    <?php
    $sql = "delete from tipo_usuario where id in ($id_to_delete);";
    $query = $conn->prepare($sql);
    $query->execute();

    ?>
    <script>
      location.href = 'tabla.php'
    </script>

  <?php

  endif;
  ?>