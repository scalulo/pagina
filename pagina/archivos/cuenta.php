<?php
session_start(); // Inicia la sesión

// Verificar si el usuario está logueado
if (!isset($_SESSION["email"])) {
    // Si no hay sesión activa, redirigir a la página de inicio de sesión
    header("Location: iniciar_sesion.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="cuenta.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido de Nuevo</title>
</head>
<body>
    <main>
        <div class="cuadrito">
            <div class="header1">
                <a href="http://localhost/archivos/pagina_princi.php" target="_blank">
                    <img src="/imagenes/pagina/logo.png" alt="logo" width="120" height="95">
                </a>
            </div>
            <form action="cerrarsesion.php" method="post"> <!-- Cambiar aquí a cerrar_sesion.php -->
                <div class="divform">
                    <p class="textgrand">¡Bienvenido de Nuevo!</p>
                    <p class="texto_regis">Sesión iniciada con el correo: <?php echo $_SESSION["email"]; ?></p>
                    <p class="texto_regis1">¡Aprovecha tu 5% de descuento en toda la tienda por ser parte de Planeta Fútbol!</p>
                    <button type="submit">Cerrar sesión</button> <!-- Se asegura que el botón sea de tipo submit -->
                </div>
            </form>
        </div>
    </main>
</body>
</html>
