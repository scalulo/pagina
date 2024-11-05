<?php
// Iniciar sesión al comienzo del archivo
session_start();

// Datos de conexión
$mail = $_POST["email"];
$password1 = $_POST["contraseña"];
$servername = "127.0.0.1";
$database = "pagina_web";
$username = "alumnoipm";
$password = "alumnoipm";

// Crear conexión
$conexion = mysqli_connect($servername, $username, $password, $database);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
} else {
    // Consulta para obtener la contraseña
    $query = "SELECT contraseña FROM cliente WHERE email = '$mail';"; 
    $resultado = mysqli_query($conexion, $query);

    // Verificar si el usuario existe
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);

        // Consulta para obtener el id del cliente
        $query2 = "SELECT idcliente FROM cliente WHERE email = '$mail';";
        $resultado2 = mysqli_query($conexion, $query2);
        $fila2 = mysqli_fetch_assoc($resultado2);

        // Comparar la contraseña ingresada
        if ($password1 == $fila['contraseña']) {
            $_SESSION['nombre'] = $fila2['idcliente'];
            // Redirigir a la página principal
            header("Location: http://localhost/archivos/pagina_princi.php");
            exit(); // Asegura que no se ejecute más código después de la redirección
        } else {
            echo "<p style='color:red;'>Algo salió mal. Inténtalo de nuevo.</p>";
        }
    } else {
        echo "<p style='color:red;'>Correo electrónico no encontrado.</p>";
    }
}

// Cerrar conexión
mysqli_close($conexion);
?>
