<?php
// db_connection.php
// Detalles de conexión a la base de datos
$servidor = "localhost"; 
$nombreUsuario = "root"; 
$contrasena = ""; 
$nombreBaseDeDatos = "trabajoipp"; 

// Crear la conexión a la base de datos
$conexion = mysqli_connect($servidor, $nombreUsuario, $contrasena, $nombreBaseDeDatos);

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}
?>
