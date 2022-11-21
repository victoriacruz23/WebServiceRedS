<?php
$conexion =  mysqli_connect("localhost", "root", "", "webservicered");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
// $consulta = $conexion->query("SELECT * FROM usuario");
// echo $consulta->num_rows;
?>