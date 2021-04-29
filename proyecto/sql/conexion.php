<?php
$host = "localhost";
$usuario = "root";
$contraseña = "Alien123";

try {
    $conexion = new PDO("mysql:host=$host;dbname=empleados", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return$conexion;
       
}
catch(PDOException $error)
{
    echo "Nose puede conectar a la base de datos: " . $error->getMessage();
}

// Iniciar Sesion
session_start();

?>