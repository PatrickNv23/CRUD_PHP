<?php
    include_once("conexion.php");

    if(!isset($_GET['id'])){
        die("Error");
    }
    $id = $_GET['id'];
    $query = "DELETE FROM tareas WHERE id = $id";
    $resultado = mysqli_query($conexion,$query);

    if(!isset($resultado)){
        return;
    }

    header("location:../main/index.php");
?>