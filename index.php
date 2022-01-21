<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="" class="enlace_nav">CRUD PHP</a>
        </nav>
    </header>

    <main class="main">
        <section class="seccion_tareas">
             <article class="article_formulario">
                <form class="form_general">
                    <label class="label" for="">Ingrese la tarea: </label>
                    <input type="text" name="titulo" class="input" id="input_titulo" placeholder="Ingrese su tarea" onfocus required>
                    <label class="label" for="">Ingrese su descripción: </label>
                    <textarea name="descripcion" id="textarea_descripcion" class="textarea" placeholder="Ingrese la descripción" required></textarea>
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
                    <tr class="tbody_tr">
                        <td class="tr_td">Aprender React</td>
                        <td class="tr_td">Con Udemy</td>
                        <td class="tr_td">20/01/2022</td>
                        <td class="tr_td opciones">
                            <a href="#" class="enlace editar">
                                <i class="fas fa-pen-square"></i>
                            </a>
                            <a href="#" class="enlace eliminar">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                      <tr class="tbody_tr">
                        <td class="tr_td">Aprender React</td>
                        <td class="tr_td">Con Udemy</td>
                        <td class="tr_td">20/01/2022</td>
                        <td class="tr_td opciones">
                            <a href="#" class="enlace editar">
                                <i class="fas fa-pen-square"></i>
                            </a>
                            <a href="#" class="enlace eliminar">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                      <tr class="tbody_tr">
                        <td class="tr_td">Aprender React</td>
                        <td class="tr_td">Con Udemy</td>
                        <td class="tr_td">20/01/2022</td>
                        <td class="tr_td opciones">
                            <a href="#" class="enlace editar">
                                <i class="fas fa-pen-square"></i>
                            </a>
                            <a href="#" class="enlace eliminar">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                      <tr class="tbody_tr">
                        <td class="tr_td">Aprender React</td>
                        <td class="tr_td">Con Udemy</td>
                        <td class="tr_td">20/01/2022</td>
                        <td class="tr_td opciones">
                            <a href="#" class="enlace editar">
                                <i class="fas fa-pen-square"></i>
                            </a>
                            <a href="#" class="enlace eliminar">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                      </tr>
                      <tr class="tbody_tr">
                        <td class="tr_td">Aprender React</td>
                        <td class="tr_td">Con Udemy</td>
                        <td class="tr_td">20/01/2022</td>
                        <td class="tr_td opciones">
                            <a href="#" class="enlace editar">
                                <i class="fas fa-pen-square"></i>
                            </a>
                            <a href="#" class="enlace eliminar">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                      </tr>
                      <tr class="tbody_tr">
                        <td class="tr_td">Aprender React</td>
                        <td class="tr_td">Con Udemy</td>
                        <td class="tr_td">20/01/2022</td>
                        <td class="tr_td opciones">
                            <a href="#" class="enlace editar">
                                <i class="fas fa-pen-square"></i>
                            </a>
                            <a href="#" class="enlace eliminar">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                      </tr>
                      <tr class="tbody_tr">
                        <td class="tr_td">Aprender React</td>
                        <td class="tr_td">Con Udemy</td>
                        <td class="tr_td">20/01/2022</td>
                        <td class="tr_td opciones">
                            <a href="#" class="enlace editar">
                                <i class="fas fa-pen-square"></i>
                            </a>
                            <a href="#" class="enlace eliminar">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
 
                </tbody>
            </table>
        </article>

        </section>
       
    </main>

    <script src="https://kit.fontawesome.com/60107a401e.js" crossorigin="anonymous"></script>
</body>
</html>