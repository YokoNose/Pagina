<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "login";
$conexion = new mysqli($server, $user, $password, $database);

if ($conexion->connect_errno) {
    die ("Conexion Fallida" . $conexion->connect_errno);
} else {
    echo "conectado";
}

?>