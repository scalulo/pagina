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
            

        <div class="container-input">
  <input type="text" placeholder="Search" name="text" class="input">
  <svg fill="#000000" width="20px" height="20px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
    <path d="M790.588 1468.235c-373.722 0-677.647-303.924-677.647-677.647 0-373.722 303.925-677.647 677.647-677.647 373.723 0 677.647 303.925 677.647 677.647 0 373.723-303.924 677.647-677.647 677.647Zm596.781-160.715c120.396-138.692 193.807-319.285 193.807-516.932C1581.176 354.748 1226.428 0 790.588 0S0 354.748 0 790.588s354.748 790.588 790.588 790.588c197.647 0 378.24-73.411 516.932-193.807l516.028 516.142 79.963-79.963-516.142-516.028Z" fill-rule="evenodd"></path>
</svg>
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
            <label class="checkbox-container">
                <input class="custom-checkbox" type="checkbox" checked>
                <span class="checkmark"></span>
                <span class="txt_checkbox">Adulto</span>
            </label>
        </div>
        <div class="edad-checkbox">
            <label class="checkbox-container">
                <input class="custom-checkbox" type="checkbox" checked>
                <span class="checkmark"></span>
                <span class="txt_checkbox">Niño</span>
            </label>
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
            <div class="azul">
            <a href="producto.php?id_producto=<?php echo $fila['id_producto']?>">       
            <h3><?php echo $fila ["nombre"]?></h3></a>
        <p><?php echo $fila ["categoria"]?></p>
        <p class="precio">$<?php echo $fila ["precio"]?></p>
    </div>
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
        <script>
        document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('.custom-checkbox');
    const adultoCheckbox = checkboxes[0];  // El primer checkbox (Adulto)
    const ninoCheckbox = checkboxes[1];    // El segundo checkbox (Niño)
    
    adultoCheckbox.addEventListener('change', function() {
        if (this.checked) {
            ninoCheckbox.checked = false;
        }
    });
    
    ninoCheckbox.addEventListener('change', function() {
        if (this.checked) {
            adultoCheckbox.checked = false;
        }
    });

    // Aseguramos que empiecen desmarcados
    adultoCheckbox.checked = false;
    ninoCheckbox.checked = false;
});
</script>

    </footer>
</body>
</html>