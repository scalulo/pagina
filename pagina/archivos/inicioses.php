<?php
// Datos de conexión
$servername = "127.0.0.1";
$database = "pagina_web";
$username = "alumnoipm";
$password = "alumnoipm";

// Crear conexión
$conexion = mysqli_connect($servername, $username, $password, $database);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener y sanitizar los datos del formulario
    $email = isset($_POST["email"]) ? mysqli_real_escape_string($conexion, $_POST["email"]) : null;
    $contraseña = isset($_POST["contraseña"]) ? mysqli_real_escape_string($conexion, $_POST["contraseña"]) : null;

    if ($email && $contraseña) {
        // Consulta para verificar si el usuario existe
        $query = "SELECT * FROM cliente WHERE email = '$email' AND contraseña = '$contraseña'";
        $resultado = mysqli_query($conexion, $query);

        if (mysqli_num_rows($resultado) > 0) {
            // Usuario autenticado
            session_start(); // Iniciar sesión
            $_SESSION['email'] = $email; // Guardar el email en la sesión
            header("Location: http://localhost/archivos/pagina_princi.php");
            exit;
        } else {
            // Credenciales incorrectas
            echo "<p style='color: red;'>Correo o contraseña incorrectos.</p>";
        }
    } else {
        echo "<p style='color: red;'>Por favor, completa todos los campos.</p>";
    }
}

// Cerrar la conexión
mysqli_close($conexion);
?>

