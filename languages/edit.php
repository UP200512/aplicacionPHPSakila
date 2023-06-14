
<?php
print_r($_POST);
if (!isset($_POST["numID"])){
  header("Location: index.php?mensaje=error");
}
if (empty($_POST["txtNombre"])){
    header("Location: index.php?mensaje=falta"); 
}
include_once "../includes/data_base_connect.php";
$id = $_POST["numID"];
$nombre = $_POST["txtNombre"];


$sql = $connection->prepare("UPDATE language set name=? where language_id=?;");
$result = $sql->execute([$nombre, $id]);
if ($result == true){
  header("Location: index.php?mensaje=registrado"); 
}else{
  header("Location: index.php?mensaje=error"); 
  exit();
}
?>

