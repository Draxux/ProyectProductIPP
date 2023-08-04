<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
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

    <body>
    <div class="container mt-5">
        <h2>Dashboard</h2>
        <div id="parrafos">
            
            <!-- Los párrafos e imágenes se cargarán aquí -->
            <?php foreach ($parrafos as $parrafo) { ?>
                <p><?php echo htmlspecialchars($parrafo['parrafo']); ?></p>
                <img src="<?php echo htmlspecialchars($parrafo['url_img']); ?>" alt="Imagen">
            <?php } ?>
        </div>
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</body>

</html>