<?php
// Detalles de conexión a la base de datos
$servidor = "localhost"; // Cambia esto si tu servidor de base de datos tiene un nombre diferente
$nombreUsuario = "root"; // Cambia esto con tu nombre de usuario de MySQL
$contrasena = ""; // Cambia esto con tu contraseña de MySQL
$nombreBaseDeDatos = "trabajoipp"; // Cambia esto con el nombre de tu base de datos

// Crear la conexión a la base de datos
$conexion = mysqli_connect($servidor, $nombreUsuario, $contrasena, $nombreBaseDeDatos);

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}
?>
