<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Noticia</title>
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
                    <a class="nav-link active" href="noticias.php">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="publicar_noticia.php">Publicar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">Salir</a>
                </li>
            </ul>
            
        </div>
    </nav>

    <div class="container">
        <h2 style="font-weight: bold;">Las Nuevas Noticias</h2>
        <?php
        // Incluir el archivo de conexión a la base de datos
        require_once "conexion.php";

        // Consulta SQL para obtener las noticias ordenadas por fecha de publicación (la más reciente primero)
        $query = "SELECT n.id_news, n.titular, n.cont_news, n.fecha, n.imagen, u.nombre
                  FROM noticias AS n
                  INNER JOIN usuarios AS u ON n.id_usuario = u.ID
                  ORDER BY n.fecha DESC";
        $result = mysqli_query($conexion, $query);

        // Verificar si hay noticias para mostrar
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id_noticia = $row['id_news'];
                $titular = $row['titular'];
                $contenido = $row['cont_news'];
                $fecha = $row['fecha'];
                $imagen = $row['imagen'];
                $nombre_usuario = $row['nombre'];

                // Mostrar la noticia junto con la imagen, el titular, el nombre del usuario y la fecha de publicación
                echo '<div class="card mb-3">';
                echo '  <img src="' . $imagen . '" class="card-img-top" alt="Imagen">';
                echo '  <div class="card-body">';
                echo '      <h5 class="card-title">' . $titular . '</h5>';
                echo '      <p class="card-text">' . $contenido . '</p>';
                echo '      <p class="card-text"><small class="text-muted">Publicado por ' . $nombre_usuario . ' el ' . $fecha . '</small></p>';
                echo '  </div>';
                echo '</div>';
            }
        } else {
            // No hay noticias para mostrar
            echo '<div class="alert alert-info">No hay noticias publicadas.</div>';
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);
        ?>
    </div>

</body>