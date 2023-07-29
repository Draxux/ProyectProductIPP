<?php
// Incluir el archivo de conexión a la base de datos
require_once "conexion.php";

// Iniciar la sesión
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos enviados desde el formulario de inicio de sesión
    $username = $_POST["usuario"];
    $password = $_POST["password"];

    // Consulta SQL para obtener el usuario con el nombre de usuario proporcionado
    $query = "SELECT * FROM usuarios WHERE username = '$username'";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        if (mysqli_num_rows($result) === 1) {
            // Si el usuario existe, verificamos la contraseña
            $row = mysqli_fetch_assoc($result);
            $hashedPassword = $row["password"];

            if (password_verify($password, $hashedPassword)) {
                // Contraseña correcta, se puede iniciar sesión
                // Obtener el ID del usuario
                $id_del_usuario = $row["ID"];

                // Guardar el ID del usuario en la sesión
                $_SESSION['user_id'] = $id_del_usuario;
                
                // Aquí redirigirías al usuario a la página de inicio de sesión exitosa
                header("Location: noticias.php");
                exit();
            } else {
                // Contraseña incorrecta, mostrar mensaje de error
                $mensajeError = "Contraseña incorrecta. Inténtalo de nuevo.";
            }
        } else {
            // Usuario no encontrado, mostrar mensaje de error
            $mensajeError = "El usuario no existe. Verifica tus credenciales o crea una cuenta nueva.";
        }
    } else {
        // Error en la consulta SQL
        $mensajeError = "Hubo un error en la base de datos. Inténtalo más tarde.";
    }
}

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
                <h2 style="font-weight: bold;">Página de inicio de sesión</h2>
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
                <a href="registro.php" class="btn btn-info">Registrarse</a>
                <!-- Enlace a la página de registro -->
            </div>
            <?php
            // Mostrar mensaje de error en caso de haberlo
            if (isset($mensajeError)) {
                echo '<div class="alert alert-danger">' . $mensajeError . '</div>';
            }
            ?>
        </form>
    </div>
</body>
</html>
