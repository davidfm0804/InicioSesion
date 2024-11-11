<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "InicioSesion";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos ingresados en el formulario
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Consultar en la base de datos
$sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Inicio de sesión exitoso. Bienvenido, " . $correo;
    // Aquí puedes iniciar una sesión y redirigir al usuario a otra página
    // session_start();
    // $_SESSION['correo'] = $correo;
    // header("Location: pagina_protegida.php");
} else {
    echo "Correo o contraseña incorrectos.";
}

$conn->close();
?>
