<?php
require_once 'db_connection.php';
require_once 'model_dash.php';
session_start();
$model = new Model($conexion);

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Consultar la edad del usuario desde la tabla de usuarios
    $query = "SELECT edad FROM usuarios WHERE username = '$username'";
    $result = mysqli_query($conexion, $query);
    $row = mysqli_fetch_assoc($result);
    $edadUsuario = $row['edad'];
    // echo "$edadUsuario";
    if ($edadUsuario >= 18) {
        $parrafos = $model->obtenerParrafosMayoresDeEdad();
        //header('Content-Type: application/json');
        //echo json_encode($parrafos);
    } else {
        $parrafos = $model->obtenerParrafosMenoresDeEdad();
        //header('Content-Type: application/json');
        //echo json_encode($parrafos);
    }
} else {
    // Si el usuario no ha iniciado sesión, redirigir al login
    header('Location: login.php');
    exit;
}

// Cargar la vista
require_once 'dashboard.php';
?>
