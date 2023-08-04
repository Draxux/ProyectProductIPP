<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Model
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function validarUsuario($username, $password)
    {
        $username = mysqli_real_escape_string($this->conexion, $username);
        $password = mysqli_real_escape_string($this->conexion, $password);

        // Consulta para verificar si el usuario y contraseña son válidos
        $query = "SELECT COUNT(*) as count FROM usuarios WHERE username='$username' AND password='$password'";
        $result = mysqli_query($this->conexion, $query);
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];
        if($count == 1){
            return true;
        }
        // echo "$count";
        // return $count === 1;
    }

    public function crearUsuario($username, $password, $edad, $correo, $nombre)
    {
        $username = mysqli_real_escape_string($this->conexion, $username);
        $password = mysqli_real_escape_string($this->conexion, $password);
        $edad = (int)$edad;
        $correo = mysqli_real_escape_string($this->conexion, $correo);
        $nombre = mysqli_real_escape_string($this->conexion, $nombre);

        // Verificar si el usuario ya existe en la base de datos
        $query = "SELECT COUNT(*) as count FROM usuarios WHERE username='$username'";
        $result = mysqli_query($this->conexion, $query);
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];

        if ($count > 0) {
            // El usuario ya existe, no se puede crear nuevamente
            return false;
        } else {
            // Crear el nuevo usuario en la base de datos
            $query = "INSERT INTO usuarios (username, password, edad, correo, nombre) 
                      VALUES ('$username', '$password', $edad, '$correo', '$nombre')";
            $result = mysqli_query($this->conexion, $query);
            
            return $result;
        }
    }
}
?>

