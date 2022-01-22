<?php
include_once("conexion.php");
if(isset($_POST['btn_editar'])){
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$id = $_GET['id'];
$query = "UPDATE tareas SET titulo = '$titulo', descripcion = '$descripcion' where id = $id";

$resultado = mysqli_query($conexion,$query);

if(!isset($resultado)){
    return;
}

header("location:../main/index.php");
}
?>


<?php
if(!isset($_GET['id'])){
    return;
}
$idEditar = $_GET['id'];
$query = "SELECT * FROM tareas where id = $idEditar";
$resultado = mysqli_query($conexion,$query);
if(!isset($resultado)){
    die("Error");
}

if(mysqli_num_rows($resultado) == 1){
    $fila = mysqli_fetch_array($resultado);
}
?>


<?php
include_once("../includes/vistaEditar.php");
?>