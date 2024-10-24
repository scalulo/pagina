<?php

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
        $query = "select id_producto, nombre, precio, categoria,img1 from producto where categoria='botines'";
        $resultado=mysqli_query($conexion, $query);
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="general.css    ">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <header>
        <div class="header">
        <a href="http://localhost/pagina_princi.php"><img src="../pagina/imagenes/logoscarojas.png" alt="logo"  width="90px" height="68px"></a> 
            

            <div class="divbuscador">
                <img class="lupa" src="../pagina/imagenes/lupaigpng" alt="lupa" width="20" height="20">
                <input class="buscar" type="text" placeholder="Buscar"  ></input>
                </div>

            <img class="carrito" src="../pagina/imagenes/carrito-de-compras.png" alt="carrito"  height="40px"  width="40px" >
        

        </div>
    </header>
    <main>
        <div class="padre">
        
<div class="derecha">
    <div class="lonuevo">
        <h1>Filtrar por:</h1>
        <div class="izquierda">

        <form action="">

        
        <div class="filtro-seccion">
                            <div class="filtro-titulo">Precio</div>
                            <div class="precio-inputs">
                                <input type="number" class="preciomin-input" placeholder="Min" min="0">
                                <input type="number" class="preciomax-input" placeholder="Max" min="0">
                            </div>
                        </div>
                        <div class="filtro-seccion">
                            <div class="filtro-titulo">Edad</div>
                        <div class="edad-checkboxes">
                            <div class="edad-checkbox">
                                <p class="txt_checkbox">Adulto</p>
                                <input type="checkbox" id="adulto" name="adulto">
                                </label>
                                </div>
                                    <div class="edad-checkbox">
                                        <p class="txt_checkbox">Niño</p>
                                            <input type="checkbox" id="nino" name="nino">
                                    </div>
                                </div>

                            </div>
                        <div class="filtro-seccion">
                            <div class="filtro-titulo">Categoría</div>
                            <select class="desplegable">
                                <option value="">Elige una opción</option>
                                <option value="botines">Botines</option>
                                <option value="medias">Medias</option>
                                <option value="guantes">Guantes</option>
                                <option value="canilleras">Canilleras</option>
                                <option value="medicinales">Medicinales</option>
                                <option value="bolsos">Bolsos</option>
                                <option value="accesorios">Accesorios</option>
                            </select>
                        </div>
                        <div class="divaplicar">
                        <button class="aplicar">Aplicar filtros</button>
                    </div>
                    </div>
                </div>
                </form>

                <div class="producto-grid">
                    
                    <?php




    while($fila=mysqli_fetch_assoc($resultado)){
            ?>
        <div class="producto-item">
            <a href="producto.php?id_producto=<?php echo $fila['id_producto']?>" > <img src="<?php echo $fila ["img1"]?>" alt="Zapatilla 2"></a>
            <a href="producto.php?id_producto=<?php echo $fila['id_producto']?>">       
            <h3><?php echo $fila ["nombre"]?></h3></a>
        <p><?php echo $fila ["categoria"]?></p>
        <p class="precio">$<?php echo $fila ["precio"]?></p>
    </div>
        <?php
    
} }
?>
    <!-- Agregar más productos aquí -->
    </div>
    </main>
    <footer >
        <div class="titulosfooter">
            <h1>
                AYUDA
            </h1>
            <h3>Envios y entregas </h3>
            <h3>Devoluciones </h3>
            <h3>Cambios </h3>
            <h3>Opciones de pago </h3>

        </div>

        <div class="titulosfooter">
            <h1> ACERCA DE NOSOTROS</h1>
            <h3>Proposito </h3>
            <h3> Contacto </h3>
            <h3> Trabaja con nosotros </h3>
            <h3> Politicas de privacidad </h3>

        </div>
        <div class="titulosfooter">
            <h1> SOCIAL MEDIA</h1>
            <h3><img class="redesimg" src="../pagina/imagenes/redes/gorjeo.png" alt=""> Twitter </h3>
            <h3><img class="redesimg" src="../pagina/imagenes/redes/instagram.png" alt=""> Instagram </h3>
            <h3><img class="redesimg" src="../pagina/imagenes/redes/tik-tok.png" alt=""> Tik-Tok </h3>





        </div>

    </footer>
</body>
</html>