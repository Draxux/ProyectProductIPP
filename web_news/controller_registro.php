<?php
require_once 'db_connection.php';
require_once 'model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];

    $model = new Model($conexion);
    if ($model->crearUsuario($username, $password, $edad, $correo, $nombre)) {
        // Usuario creado con éxito, redirigir al login
        header('Location: login_view.php?registro=1');
        exit;
    } else {
        // Error al crear el usuario, redirigir al registro con mensaje de error
        header('Location: registro_view.php?error=1');
        exit;
    }
}
?>
