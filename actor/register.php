<?php
print_r($_POST);
// if (empty($_POST["name_actor"])){
//     header("Location: index.php?mensaje=falta"); 
// }
include_once "../includes/data_base_connect.php";
$name = $_POST["first_name"];
$last_name = $_POST["last_name"];


$sql_register_actor = $connection->prepare("INSERT INTO actor (first_name, last_name) VALUES (?,?);");
$result_register_actor = $sql_register_actor->execute([$name, $last_name]);

if ($result_register_actor == true){
    header("Location: index.php?mensaje=registrado"); 
}else{
    header("Location: index.php?mensaje=error"); 
    exit();
}
?>