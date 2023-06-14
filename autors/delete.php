<?php 
    if(!isset($_GET['id_to_deletear'])){
        header('Location: tabla.php?mensaje=error');
        exit();
    }

    include_once '../includes/databaseconnect.php';
    
    $id = $_GET["id_to_deletear"];
    echo $id;
    $sentencia = $conn->prepare("DELETE FROM tipo_usuario where id = ?;");
    $resultado = $sentencia->execute([$id]);

    if($resultado === TRUE){
        header('Location: tabla.php?mensaje=eliminado');
    }else {
        header('Location: tabla.php?amensje=error');
    }

?>


