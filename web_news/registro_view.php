<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My News - Registro</title>
    <link rel="shortcut icon" href="img/News_pet.jpg" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container init">
        <!-- Contenedor principal del formulario -->
        <form class="form-horizontal" action="controller_registro.php" method="POST">
            <!-- Formulario que enviará los datos a registro.php usando el método POST -->
            <div class="form-group">
                <h2 style="font-weight: bold;">Crea una nueva cuenta.</h2>
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
                <label class="control-label col-sm-5" for="edad">Edad:</label>
                <!-- Etiqueta para el campo "Edad" -->
                <div class="col-sm-3">
                    <input class="form-control" type="number" name="edad" id="edad"><br>
                    <!-- Campo de entrada de número para la edad -->
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="correo">Correo:</label>
                <!-- Etiqueta para el campo "Correo" -->
                <div class="col-sm-3">
                    <input class="form-control" type="email" name="correo" id="correo"><br>
                    <!-- Campo de entrada de correo electrónico -->
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="nombre">Nombre Completo:</label>
                <!-- Etiqueta para el campo "Nombre" -->
                <div class="col-sm-3">
                    <input class="form-control" type="text" name="nombre" id="nombre"><br>
                    <!-- Campo de entrada de texto para el nombre -->
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn" value="Registrarse">
                <a href="login_view.php" class="btn btn-info">Volver</a>
                <!-- Botón de envío del formulario -->
            </div><br>
            <?php             
                if (isset($_GET['error']) && $_GET['error'] == 1) {
                    echo '<div class="alert alert-danger">El usuario ya existe. Por favor, elija otro nombre de usuario.</div>';
                }
            ?>
        </form>
    </div>
</body>
</html>