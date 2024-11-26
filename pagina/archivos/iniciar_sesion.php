<?php
session_start(); // Inicia sesión

// Datos de conexión
$servername = "127.0.0.1";
$database = "pagina_web";
$username = "alumno";
$password = "alumnoipm";

// Conexión a la base de datos
$conexion = mysqli_connect($servername, $username, $password, $database);

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Verificar que se enviaron los datos
if (isset($_POST["email"]) && isset($_POST["contraseña"])) {
    $email = $_POST["email"];
    $password1 = $_POST["contraseña"];

    // Consulta para obtener los datos del usuario
    $query = "SELECT contraseña, nombre FROM cliente WHERE email = '$email'";
    $resultado = mysqli_query($conexion, $query);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);

        // Verificar contraseña
        if ($password1 === $fila["contraseña"]) {
            $_SESSION["nombre"] = $fila["nombre"];
            header("Location: http://localhost/archivos/cuenta.php");
            exit();
        } else {
            echo "<p style='color:red;'>Contraseña incorrecta. Inténtalo de nuevo.</p>";
        }
    } else {
        echo "<p style='color:red;'>El email no está registrado.</p>";
    }
} 

// Cerrar la conexión
mysqli_close($conexion);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="iniciar_sesion.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
</header>
<main>
    <div class="cuadrito">
        <div class="header1">
        <a href="http://localhost/archivos/pagina_princi.php" target="_blank">  <img src="/imagenes/pagina/logo.png" alt="logo" width="120" height="95"> </a>
        </div>
        <form action="inicioses.php" method="post">
            <div class="divform">
                <p class="textgrand"> BIENVIENIDO DE VUELTA </p>
                <p class="texto_regis"> Todavia no eres parte del movimiento? Registrate <a class="aqui" href="http://localhost/archivos/registrarse.html"> aqui </a>  </p>
                <p class="texto_regis1">Recuerda que al tener una cuenta iniciada en Planeta Futbol tienes 5% de descuento en toda la tienda.</p>
                <input class="inicioses" type="email" name="email" placeholder="Ingrese su Email" required>
                <input class="inicioses" type="password" name="contraseña" placeholder="Ingrese su contraseña" required>
                <button >Ingresar</button>
            </div>
    </div>
    </main> 

</body>
</html>
