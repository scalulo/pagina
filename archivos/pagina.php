
<style type="text/css">
table{
    border:2px black solid;
}
tr, td{ padding: 5px;}

</style>
<?php
	$nombre= $_POST["nombre"];
	$apellido = $_POST["apellido"];
    $email=$_POST["email"];
    $telefono=$_POST["telefono"];
    $fecha_nacimiento=$_POST["fecha_nacimiento"];
    $contraseña=$_POST["contraseña"];
    $servername = "127.0.0.1";
    $database = "pagina_web";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion


    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        //insertamos el resultado del formulario
        $query = "insert into cliente values(null,'$email','$nombre', '$apellido', '$telefono','$fecha_nacimiento');";
        $resultado=mysqli_query($conexion, $query);
        
        echo ""
       //mostrarDatosTabla($conexion);

        }

    function mostrarDatosTabla($conexion){  ?>
        <table>
            <!-- encabezados -->
            <th>Nombre</th>
            <th>Apellido</th>
    <?php
        $resultados = mysqli_query($conexion,"select * from usuario;");

        while($fila=mysqli_fetch_assoc($resultados)){ // recorremos cada fila obtenida y mostramos nombre y apellido
            ?>
        <tr>
            <td> <?php echo $fila['nombre']?></td>
            <td> <?php echo $fila['apellido']?></td>
        </tr>

        <?php
        } 
        ?>
        </table>
    <?php
    }
    mysqli_close($conexion);
?>
