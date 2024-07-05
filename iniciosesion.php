<?php
include('conexion.php'); // Incluir archivo de conexión a la base de datos

session_start(); // Iniciar sesión

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ // Verificar si el método de solicitud es POST
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']); // Obtener y sanitizar el nombre de usuario del formulario
    $contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']); // Obtener y sanitizar la contraseña del formulario

    // Consulta para verificar las credenciales del usuario
    $sql = "SELECT usuario FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";

    $result = mysqli_query($conexion, $sql); // Ejecutar la consulta

    if (!$result) {
        // Verificar si hubo un error en la consulta
        die("Error en la consulta: " . mysqli_error($conexion));
    }

    if (mysqli_num_rows($result) > 0) { // Verificar si se encontró un usuario;
        
        // Mostrar alerta de bienvenida y redirigir
        echo "<script>alert('Bienvenido al sistema'); window.location.href = 'tienda.php'; </script>";
        exit(); // Terminar la ejecución del script
    } 
    else {
        echo "<script>alert('Acceso denegado: nombre de usuario o contraseña incorrectos'); window.history.back();</script>";
    }
} 
else 
{
    echo "<script>alert('Solicitud no válida'); window.history.back();</script>"; // Mensaje de error en el método de solicitud
}
?>
