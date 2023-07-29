<?php
// Incluir el archivo de conexión a la base de datos
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos enviados desde el formulario de registro
    $username = $_POST["usuario"];
    $password = $_POST["password"];
    $edad = $_POST["edad"];
    $correo = $_POST["correo"];
    $nombre = $_POST["nombre"];

    // Verificar si el usuario ya existe
    $query = "SELECT * FROM usuarios WHERE username = '$username'";
    $result = mysqli_query($conexion, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Usuario ya existe, mostrar mensaje de error
        $mensajeError = "El usuario ya está registrado. Intenta con otro nombre de usuario.";
    } else {
        // El usuario no existe, proceder a registrar los datos

        // Hashear la contraseña antes de almacenarla en la tabla
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insertar en la tabla "usuarios"
        $queryInsertUser = "INSERT INTO usuarios (username, password, edad, correo, nombre) VALUES ('$username', '$hashedPassword', $edad, '$correo', '$nombre')";
        $resultInsertUser = mysqli_query($conexion, $queryInsertUser);

        if ($resultInsertUser) {
            // Registro exitoso
            $registroExitoso = "¡Registro exitoso! Ahora puedes iniciar sesión.";
        } else {
            // Error al insertar en la tabla "usuarios"
            $mensajeError = "Hubo un error al registrar los datos. Inténtalo de nuevo.";
        }
    }
}
?>

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
        <form class="form-horizontal" action="registro.php" method="POST">
            <!-- Formulario que enviará los datos a registro.php usando el método POST -->
            <div class="form-group">
                <h2 style="font-weight: bold;">Crea una nueva cuenta.</h2>
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
                <a href="login.php" class="btn btn-info">Volver</a>
                <!-- Botón de envío del formulario -->
            </div><br>
            <?php
            // Mostrar mensaje de registro exitoso o mensaje de error en caso de haberlo
            if (isset($registroExitoso)) {
                echo '<div class="alert alert-success">' . $registroExitoso . '<a href="login.php" class="btn btn-info">Login</a></div>';
                
            } elseif (isset($mensajeError)) {
                echo '<div class="alert alert-danger">' . $mensajeError . '</div>';
            }
            ?>
        </form>
    </div>
</body>
</html>
