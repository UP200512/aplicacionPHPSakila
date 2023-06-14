
<?php
print_r($_POST);
if (!isset($_POST["numID"])){
  header("Location: tabla.php?mensaje=error");
}
if (empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["numNivel"]) ){
    header("Location: tabla.php?mensaje=falta"); 
}
include_once "../includes/databaseconnect.php";
$id = $_POST["numID"];
$nombre = $_POST["txtNombre"];
$nivel = $_POST["numNivel"];
if (empty($_POST["txtN2"])){
    $n2=NULL;
}else{
    $n2 = $_POST["txtN2"];
}

// //$sql = $conn->prepare("UPDATE tipo_usuario set (nombre, nivel, n2) VALUES (?, ?, ?);");
$sql = $conn->prepare("UPDATE tipo_usuario set nombre=?, nivel=?, n2=? where id=?;");
$result = $sql-> execute([$nombre,$nivel,$n2,$id]);


if ($result == true){
  header("Location: tabla.php?mensaje=registrado"); 
}else{
  header("Location: tabla.php?mensaje=error"); 
  exit();
}
?>

