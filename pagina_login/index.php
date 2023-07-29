<?php
// Incluir el archivo de conexión a la base de datos
require_once "conexion.php";

// Resto del código para el inicio de sesión o registro...
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My News - Login</title>
    <link rel="shortcut icon" href="img/News_pet.jpg" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container init">
        <!-- Contenedor principal del formulario -->
        <form class="form-horizontal" action="login.php" method="POST">
            <!-- Formulario que enviará los datos a login.php usando el método POST -->
            <div class="form-group">
                <h2 style="font-weight: bold;">Iniciar de sesión</h2>
                <!-- Encabezado principal de la página -->
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="usuario">Usuario:</label>
                <!-- Etiqueta para el campo "Usuario" -->
                <div class="col-sm-3">
                    <input class="form-control" type="text" name="usuario" id="usuario" required><br>
                    <!-- Campo de entrada de texto para el usuario, es obligatorio -->
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-sm-5" for="password">Contraseña:</label>
                <!-- Etiqueta para el campo "Contraseña" -->
                <div class="col-sm-3">
                    <input class="form-control" type="password" name="password" id="password" required><br>
                    <!-- Campo de entrada de contraseña, es obligatorio -->
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn" value="Iniciar sesión">
                <!-- Botón de envío del formulario -->
                <a href="registro.php" class="btn btn-info" role="button">Registrarse</a>
                <!-- Enlace a la página de registro -->
            </div>
        </form>
    </div>
</body>
</html>

