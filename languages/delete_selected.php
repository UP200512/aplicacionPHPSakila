<?php
include("../includes/data_base_connect.php");
$id_to_delete = "";
if (isset($_GET["id_to_delete"])) :
  // asignar w1 y w2 a dos variables
  $id_to_delete = $_GET["id_to_delete"]; ?>

  <script>
    alert("Se borraran los elementos seleccionados");
  </script>
  <?php
  $sql = "delete from language where language_id in ($id_to_delete);";
  $query = $connection->prepare($sql);
  $query->execute();
  if ($query) {

  ?>
    <script>
      location.href = 'index.php'
    </script>

<?php
  }

endif;
?>