<?php
$usuario = "root";
$contraseña = "";
$servidor = "localhost";
$nombreBD = "tareas_crud";

$conexion = mysqli_connect($servidor,$usuario,$contraseña,$nombreBD);

if(!isset($conexion)){
    die("Error");
}

session_start();
?>