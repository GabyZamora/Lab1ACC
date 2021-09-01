<?php
$servidor = "localhost";
$bd = "lab1_libros";
$usuario = "root";
$password = "root";
// Create connection
$conexion = new mysqli($servidor, $usuario, $password, $bd);
// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
// mysqli_close($conexion);
?>