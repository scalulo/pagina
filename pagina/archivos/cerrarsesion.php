<?php
session_start(); // Inicia la sesión

// Destruir todas las variables de la sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al usuario a la página de inicio o login
header("Location: pagina_princi.php"); // Redirige a la página principal
exit();
?>
