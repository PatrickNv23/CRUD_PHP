<?php include_once("../includes/header.php") ?>
<?php include_once("../datos/conexion.php") ?>
    <main class="main">
        <section class="seccion_tareas">
             <article class="article_formulario">

                <form class="form_general" action="../datos/insertar.php" method="POST">
                    <label class="label" for="">Ingrese la tarea: </label>
                    <input type="text" name="titulo" class="input" id="input_titulo" placeholder="Ingrese su tarea" onfocus required>
                    <label class="label" for="">Ingrese su descripción: </label>
                    <textarea name="descripcion" id="textarea_descripcion" class="textarea" placeholder="Ingrese la descripción" ></textarea>
                    <input type="submit" value="Agregar" name="btn_agregar" class="btn_agregar">
                </form>

            </article>

        <article class="article_tareas">
            <table class="tabla" border="1">
                <thead class="tabla_head">
                    <tr class="thead_tr">
                        <td class="tr_td">Titulo</td>
                        <td class="tr_td">Descripcion</td>
                        <td class="tr_td">Fecha Creación</td>
                        <td class="tr_td">Opciones</td>
                    </th>
                </thead>
                <tbody class="tabla_body">
                    <?php 
                        $query = "SELECT * from tareas";
                        $resultado = mysqli_query($conexion,$query);
                        while($fila = mysqli_fetch_array($resultado)){  ?>
                        <tr class="tbody_tr">
                            <td class="tr_td"><?php echo $fila['titulo'] ?></td>
                            <td class="tr_td"><?php echo $fila['descripcion'] ?></td>
                            <td class="tr_td"><?php echo $fila['fecha_creacion'] ?></td>
                            <td class="tr_td opciones">
                                <a href="../datos/actualizar.php?id=<?=$fila['id']?>" class="enlace editar">
                                    <i class="fas fa-pen-square"></i>
                                </a>
                                <a href="../datos/eliminar.php?id=<?=$fila['id']?>" class="enlace eliminar">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                    <?php
                        }
                   ?>
                   
                </tbody>
            </table>
        </article>

        </section>
       
    </main>

<?php include_once("../includes/footer.php") ?>