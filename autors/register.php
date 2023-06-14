<?php
print_r($_POST);
if (empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["numNivel"]) ){
    header("Location: tabla.php?mensaje=falta"); 
}
include_once "../includes/databaseconnect.php";
$nombre = $_POST["txtNombre"];
$nivel = $_POST["numNivel"];
if (empty($_POST["txtN2"])){
    $n2=NULL;
}else{
    $n2 = $_POST["txtN2"];
}


$sql = $conn->prepare("INSERT INTO tipo_usuario (nombre, nivel, n2) VALUES (?, ?, ?);");
$result = $sql-> execute([$nombre,$nivel,$n2]);

if ($result == true){
    header("Location: tabla.php?mensaje=registrado"); 
}else{
    header("Location: tabla.php?mensaje=error"); 
    exit();
}
?>