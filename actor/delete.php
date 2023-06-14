<?php 
    if(!isset($_GET['id_to_delete'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once '../includes/data_base_connect.php';
    
    $id = $_GET["id_to_delete"];
    echo $id;
    // delete from film_actor where actor_id=200;
// delete from actor where actor_id=200;
    $sentencia = $connection->prepare("delete from film_actor where actor_id= ?;");
    $resultado = $sentencia->execute([$id]);
    if($resultado === TRUE){
        
    }else {
        header('Location: index.php?mensaje=error');
    }
    $sentencia2 = $connection->prepare("delete from actor where actor_id= ?;");
    $resultado2 = $sentencia2->execute([$id]);

    if($resultado2 === TRUE){
        header('Location: index.php?mensaje=eliminado');
    }else {
        header('Location: index.php?mensaje=error');
    }

?>