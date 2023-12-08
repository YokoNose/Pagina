<?php

require 'Conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$username = $_POST['Username'];
$email = $_POST['email'];
$password = $_POST['password'];

$insertar = "INSERT INTO usuarios (Nombre, Apellido, NombreUsuario, Email, Password) VALUES ('$nombre', '$apellido','$username', '$email', '$password')";

if($conexion->query($insertar) === TRUE){
    echo "Registro Exitoso";
} else {
    echo "Error". $conexion->error;

}

$conexion->close();                                                                                                

?>