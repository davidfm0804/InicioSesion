<?php
// Configuración de la base de datos
$servidor = "localhost";
$usuario = "root";
$contrasenia = "";
$basededatos = "InicioSesion";

// Crear conexión
$sqli = new mysqli($servidor, $usuario, $contrasenia, $basededatos);

// Obtener los datos ingresados en el formulario
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Consultar en la base de datos
$sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'";
$resultado = $sqli->query($sql);

if ($resultado->num_rows > 0) {
    echo "Inicio de sesión exitoso. Bienvenido, " . $correo;
} else {
    echo "Correo o contraseña incorrectos.";
}

$sqli->close();
?>
