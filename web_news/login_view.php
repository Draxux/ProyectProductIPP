<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My News - Login</title>
    <link rel="shortcut icon" href="img/News_pet.jpg" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css"> <!-- Estilos -->
</head>
<body>
    <div class="container init">
        <!-- Contenedor principal del formulario -->
        <form class="form-horizontal" action="controller_login.php" method="POST">
            <!-- Formulario que enviará los datos a login.php usando el método POST -->
            <div class="form-group">
                <h2 style="font-weight: bold;">Página de inicio de sesión</h2>
                <!-- Encabezado principal de la página -->
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="username">Usuario:</label>
                <!-- Etiqueta para el campo "Usuario" -->
                <div class="col-sm-3">
                    <input class="form-control" type="text" name="username" id="username" required><br>
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
                <a href="registro_view.php" class="btn btn-info">Registrarse</a>
                <!-- Enlace a la página de registro -->
            </div>
            <?php
                if (isset($_GET['registro']) && $_GET['registro'] == 1) {
                    echo '<div class="alert alert-success">¡Registro exitoso! Ahora puedes iniciar sesión.</div>';
                }
                if (isset($_GET['error']) && $_GET['error'] == 1) {
                    echo '<div class="alert alert-danger">Credenciales inválidas. Intente nuevamente.</div>';
                }
            ?>
        </form>
    </div>
</body>
</html>