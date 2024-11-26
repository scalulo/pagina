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

    // Asignar y sanitizar valores de $_POST después de establecer la conexión
    $nombre = isset($_POST["nombre"]) ? mysqli_real_escape_string($conexion, $_POST["nombre"]) : null;
    $apellido = isset($_POST["apellido"]) ? mysqli_real_escape_string($conexion, $_POST["apellido"]) : null;
    $email = isset($_POST["email"]) ? mysqli_real_escape_string($conexion, $_POST["email"]) : null;
    $telefono = isset($_POST["telefono"]) ? mysqli_real_escape_string($conexion, $_POST["telefono"]) : null;
    $fecha_nacimiento = isset($_POST["fecha"]) && !empty($_POST["fecha"]) 
                        ? mysqli_real_escape_string($conexion, $_POST["fecha"]) 
                        : null;
    $contraseña = isset($_POST["contraseña"]) ? mysqli_real_escape_string($conexion, $_POST["contraseña"]) : null;

    // Insertar datos en la tabla cliente
    $query = "INSERT INTO cliente (email, nombre, apellido, telefono, contraseña, fecha) 
              VALUES ('$email', '$nombre', '$apellido', '$telefono', '$contraseña', " . 
              ($fecha_nacimiento ? "'$fecha_nacimiento'" : "NULL") . ");";

    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        // Redirigir si la inserción fue exitosa
        header("Location: http://localhost/archivos/pagina_princi.php");
        exit;  // Es importante usar `exit` para evitar que el script siga ejecutándose después del redireccionamiento
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }

    // Función para mostrar datos en una tabla HTML
    function mostrarDatosTabla($conexion) { ?>
        <table>
            <!-- Encabezados de la tabla -->
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Contraseña</th>
                <th>Fecha</th>
            </tr>
    <?php
        $resultados = mysqli_query($conexion, "SELECT * FROM cliente;");

        // Recorrer y mostrar cada fila de datos
        while ($fila = mysqli_fetch_assoc($resultados)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($fila['nombre']); ?></td>
                <td><?php echo htmlspecialchars($fila['apellido']); ?></td>
                <td><?php echo htmlspecialchars($fila['email']); ?></td>
                <td><?php echo htmlspecialchars($fila['telefono']); ?></td>
                <td><?php echo htmlspecialchars($fila['contraseña']); ?></td>
                <td><?php echo htmlspecialchars($fila['fecha']); ?></td>
            </tr>
        <?php } ?>
        </table>
    <?php
    }

    // Cerrar la conexión
    mysqli_close($conexion);
?>

<style type="text/css">
table {
    border: 2px black solid;
}
tr, td {
    padding: 5px;
}
</style>
