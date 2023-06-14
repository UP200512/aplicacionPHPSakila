<?php 
    if(!isset($_GET['id_to_delete'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once '../includes/data_base_connect.php';
    
    $id = $_GET["id_to_delete"];
    echo $id;
    $sentencia = $connection->prepare("DELETE FROM language where language_id = ?;");
    $resultado = $sentencia->execute([$id]);

    if($resultado === TRUE){
        header('Location: index.php?mensaje=eliminado');
    }else {
        header('Location: index.php?mensaje=error');
    }

?>


