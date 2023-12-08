<?php
require 'Conexion.php';

$usuario = $_POST['user'];
$password = $_POST['pass'];

$query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE NombreUsuario = '$usuario' AND Password = '$password'");
$nr = mysqli_num_rows($query);

if ($nr == 1){
    echo "jotos";
}
else if ($nr == 0){
    echo "no jala";

}
?>