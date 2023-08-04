<?php
class Model
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function obtenerParrafosMayoresDeEdad()
    {
        $query = "SELECT parrafo, url_img FROM info_web WHERE apto_adulto = 1";
        $result = mysqli_query($this->conexion, $query);
        $parrafos = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $parrafos[] = $row;
        }
        return $parrafos;
    }

    public function obtenerParrafosMenoresDeEdad()
    {
        $query = "SELECT parrafo, url_img FROM info_web WHERE apto_adulto = 0";
        $result = mysqli_query($this->conexion, $query);
        $parrafos = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $parrafos[] = $row;
        }
        return $parrafos;
    }
}
?>
