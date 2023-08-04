<?php
require_once 'db_connection.php';
require_once 'model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $model = new Model($conexion);
    if ($model->validarUsuario($username, $password)) {
        // Usuario válido, redirigir a la página principal o dashboard
        session_start(); // Iniciar sesión
        $_SESSION['username'] = $username; // Guardar el nombre de usuario en la sesión
        header('Location: controller_dash.php');
        exit;
    } else {
        // Credenciales inválidas, redirigir al login con mensaje de error
        header('Location: login_view.php?error=1');
        exit;
    }
}
?>
