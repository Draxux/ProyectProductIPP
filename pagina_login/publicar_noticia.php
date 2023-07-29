<?php
require_once "conexion.php";
// Iniciar la sesión
session_start();

// Verificar si el usuario ha iniciado sesión antes de acceder a esta página
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirigir al usuario a la página de inicio de sesión si no ha iniciado sesión
    exit;
}

// Procesar el formulario cuando se envíe
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos enviados desde el formulario
    $titular = $_POST["titular"];
    $cont_news = $_POST["cont_news"];
    $imagen = $_POST["imagen"]; 

    // Obtener el ID del usuario que ha iniciado sesión 
    $id_usuario = $_SESSION['user_id'];

    // Obtener la fecha actual
    $fecha_actual = date("Y-m-d");

    // Insertar la noticia en la tabla "noticias"
    $queryInsertNoticia = "INSERT INTO noticias (titular, cont_news, fecha, id_usuario, imagen) VALUES ('$titular', '$cont_news', '$fecha_actual', $id_usuario, '$imagen')";
    $resultInsertNoticia = mysqli_query($conexion, $queryInsertNoticia);

    if ($resultInsertNoticia) {
        // Noticia publicada exitosamente
        $mensajeExitoso = "¡Noticia publicada exitosamente!";
    } else {
        // Error al insertar la noticia
        $mensajeError = "Hubo un error al publicar la noticia. Inténtalo de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Publicar Noticia</title>
    <link rel="shortcut icon" href="img/News_pet.jpg" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <!-- Navegacion -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="img/News_pet.jpg" width="30" height="30" alt="Logo">
            </a>

            <!-- Links -->
            <ul class="nav navbar-nav navbar-right nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="noticias.php">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="publicar_noticia.php">Publicar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">Salir</a>
                </li>
            </ul>
            
        </div>
    </nav>

    <div class="container publ">
        <!-- Contenedor principal del formulario -->
        <form class="form-horizontal" action="publicar_noticia.php" method="POST">
            <!-- Formulario que enviará los datos a publicar_noticia.php usando el método POST -->
            <div class="form-group">
                <h2 style="font-weight: bold;">Publicar Noticia</h2>
                <!-- Encabezado principal de la página -->
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="titular">Titular:</label>
                <!-- Etiqueta para el campo "Titular" -->
                <div class="col-sm-7">
                    <input class="form-control" type="text" name="titular" id="titular" required><br>
                    <!-- Campo de entrada de texto para el titular, es obligatorio -->
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-sm-5" for="cont_news">Contenido de la Noticia:</label>
                <!-- Etiqueta para el campo "Contenido de la Noticia" -->
                <div class="col-sm-7">
                    <textarea class="form-control" name="cont_news" id="cont_news" rows="5" required></textarea><br>
                    <!-- Campo de entrada de texto para el contenido de la noticia, es obligatorio -->
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="imagen">URL de la Imagen (opcional):</label>
                <!-- Etiqueta para el campo "URL de la Imagen" -->
                <div class="col-sm-7">
                    <input class="form-control" type="text" name="imagen" id="imagen">
                    <!-- Campo de entrada de texto para la URL de la imagen (opcional) -->
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Publicar Noticia">
                <!-- Botón de envío del formulario -->
            </div>
            <?php
            // Mostrar mensaje de éxito o mensaje de error en caso de haberlo
            if (isset($mensajeExitoso)) {
                echo '<div class="alert alert-success">' . $mensajeExitoso . '</div>';
            } elseif (isset($mensajeError)) {
                echo '<div class="alert alert-danger">' . $mensajeError . '</div>';
            }
            ?>
        </form>
    </div>
</body>
</html>