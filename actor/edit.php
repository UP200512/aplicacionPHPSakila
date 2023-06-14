<?php
print_r($_POST);
if (!isset($_POST["txtNombre"])){
  header("Location: index.php?mensaje=error");
}
if (empty($_POST["txtApellido"])){
    header("Location: index.php?mensaje=falta"); 
}
include_once "../includes/data_base_connect.php";
$id = $_POST["numID"];
$nombre = $_POST["txtNombre"];
$apellido = $_POST["txtApellido"];


$sql = $connection->prepare("UPDATE actor set first_name=?, last_name=? where actor_id=?;");
$result = $sql->execute([$nombre, $apellido, $id]);
if ($result == true){
  header("Location: index.php?mensaje=registrado"); 
}else{
  header("Location: index.php?mensaje=error"); 
  exit();
}
?>

