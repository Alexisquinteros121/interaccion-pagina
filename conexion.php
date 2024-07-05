<?php
// Datos de conexión
$servername = "localhost"; // Cambia esto si tu servidor de base de datos no está en localhost
$username = "root"; // Cambia esto al nombre de usuario de tu base de datos
$password = "guitarra327273"; // Cambia esto a la contraseña de tu base de datos
$database = "the_man"; // Cambia esto al nombre de tu base de datos

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
