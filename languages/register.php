<?php
print_r($_POST);
if (empty($_POST["name_language"])){
    header("Location: index.php?mensaje=falta"); 
}
include_once "../includes/data_base_connect.php";
$name = $_POST["name_language"];



$sql_register_language = $connection->prepare("INSERT INTO language (name) VALUES (?);");
$result_register_language = $sql_register_language->execute([$name]);

if ($result_register_language == true){
    header("Location: index.php?mensaje=registrado"); 
}else{
    header("Location: index.php?mensaje=error"); 
    exit();
}
?>