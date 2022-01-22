<?php 
include_once("../datos/conexion.php");

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];

$query = "INSERT INTO tareas(titulo,descripcion) values ('$titulo','$descripcion')";

$resultado = mysqli_query($conexion,$query);

if(!$resultado){
    return;
}
$_SESSION['mensaje'] = "Tarea guardada satisfactoriamente";
$_SESSION['color_mensaje'] = "blue";
session_destroy();
header("location:../main/index.php");

?>