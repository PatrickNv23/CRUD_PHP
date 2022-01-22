<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="../css/estilosVistaEditar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="../main/index.php" class="enlace_nav">CRUD PHP</a>
        </nav>
    </header>
    <article class="article_formularioEditar">
        <form class="form_generalEditar" action="actualizar.php?id=<?=$_GET['id']?>" method="POST">
            <label class="labelEditar" for="">Ingrese la tarea: </label>
            <input type="text" value = "<?=$fila['titulo']?>" name="titulo" class="inputEditar" id="input_titulo" placeholder="Ingrese su tarea" onfocus required>
            <label class="labelEditar" for="">Ingrese su descripción: </label>
            <textarea name="descripcion" id="textarea_descripcion" class="textareaEditar" placeholder="Ingrese la descripción" ><?=$fila['descripcion']?></textarea>
            <input type="submit" value="Editar" name="btn_editar" class="btn_editar">
        </form>
    </article>
    <script src="https://kit.fontawesome.com/60107a401e.js" crossorigin="anonymous"></script>
    <script src="../js/animacion_logo.js"></script>
</body>
</html>