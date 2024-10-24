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
    <link rel="stylesheet" href="pagina_princi.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="loader" class="loader">
        <img src="../pagina/imagenes/logoscarojas.png" alt="Logo de la página" class="loader-logo">
    </div>

    <script>
        window.addEventListener('load', function() {
            // Espera 3 segundos antes de ocultar la pantalla de carga
            setTimeout(function() {
                document.getElementById('loader').style.display = 'none';
                document.getElementById('content').style.display = 'block';
                document.body.style.overflow = 'auto'; // Permite el desplazamiento una vez que se carga el contenido
            }, 1000); // Cambia el tiempo de espera según lo necesites (3000 ms = 3 segundos)
        });
    </script>
    <header>
        <div class="header">
        <a href="http://localhost/registrarse.html">
            <img src="../pagina/imagenes/logoscarojas.png" alt="logo"  width="90px" height="68px">
        
        </a> 
            

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
    <div class="banners-container">
        <div class="banner-descuento">
            <h2 id="texto-descuento"></h2>
        </div>
        <div class="banner-nuevos-botines">
            <h2 id="texto-nuevos-botines"></h2>
        </div>
    </div>

    <div class="carruseles-container">
        <div class="carrusel-descuentos">
            <div class="carrusel">
                <input type="radio" name="carrusel-descuentos" id="slide-descuentos-1" checked>
                <input type="radio" name="carrusel-descuentos" id="slide-descuentos-2">

                <div class="carrusel-slides">
                    <div class="slide">
                        <img src="../pagina/imagenes/botines/botinesturquesa.jpg" alt="botin en descuento">
                    </div>
                    <div class="slide">
                        <img src="../pagina/imagenes/botines/doradosmessi.jpg" alt="botin en descuento">
                    </div>
                </div>

                <div class="carrusel-controls">
                    <label for="slide-descuentos-2" class="control-prev"></label>
                    <label for="slide-descuentos-1" class="control-next"></label>
                </div>
            </div>
        </div>
        <div class="carrusel-lo-nuevo">
            <div class="carrusel">
                <input type="radio" name="carrusel-nuevo" id="slide-nuevo-1" checked>
                <input type="radio" name="carrusel-nuevo" id="slide-nuevo-2">
                <input type="radio" name="carrusel-nuevo" id="slide-nuevo-3">

                <div class="carrusel-slides">
                    <div class="slide">
                        <img src="../pagina/imagenes/botines/messinuevos.webp" alt="botin nuevo">
                    </div>
                    <div class="slide">
                        <img src="../pagina/imagenes/botines/messinuevos2.webp" alt="botin nuevo">
                    </div>
                    <div class="slide">
                        <img src="../pagina/imagenes/botines/messinuevos4.webp" alt="botin nuevo">
                    </div>
                </div>

                <div class="carrusel-controls">
                    <label for="slide-nuevo-3" class="control-prev"></label>
                    <label for="slide-nuevo-2" class="control-next"></label>
                </div>
            </div>
        </div>
    </div>
    <div class="carrusel-productos-destacados">
        <h2>Destacado en botines</h2>
        <div class="carrusel-multi">
            <button class="carrusel-multi-control" id="prevBtn"></button>
            <div class="carrusel-multi-container">
                
            <!-- PRIMERA FOTO         -->

            <?php
                while($fila=mysqli_fetch_assoc($resultado)){
                        ?>
                    <div class="carrusel-multi-item">
                    <div class="card">
                    <div class="card2">
                    <a class="tamanio" href="producto.php?id_producto=<?php echo $fila['id_producto']?>" > <img src="<?php echo $fila ["img1"]?>" alt="Zapatilla 2"></a>
                    <div class="espaciocard">

                    <a class="tamanio" href="producto.php?id_producto=<?php echo $fila['id_producto']?>" >  <h3><?php echo $fila ["nombre"]?></h3></a>
                    <p><?php echo $fila ["categoria"]?></p>
                    <p class="precio">$<?php echo $fila ["precio"]?></p>
                </div>
                </div>
                </div>
                </div>

                
                    <?php
                }
            }
            

            ?>
            
            </div>
            <button class="carrusel-multi-control" id="nextBtn"></button>
        </div>

    <div class="carrusel-productos-destacados1">
        <h2>Destacado en Medicinales</h2>
        <div class="carrusel-multi">
            <div class="carrusel-multi-container">
                
            <!-- PRIMERA FOTO         -->

            <?php

            if (!$conexion) {
                die("Conexion fallida: " . mysqli_connect_error());
            }
            else{
                //insertamos el resultado del formulario
                $query = "select id_producto, nombre, precio, categoria,img1 from producto where categoria='medicinal'";
                $resultado=mysqli_query($conexion, $query);


                while($fila=mysqli_fetch_assoc($resultado)){
                        ?>
                    <div class="carrusel-multi-item">
                    <div class="card">
                    <div class="card2">
                    <a href="productos_medicinal.php?id_producto=<?php echo $fila['id_producto']?>" > <img src="<?php echo $fila ["img1"]?>" alt="Zapatilla 2"></a>
                    <div class="espaciocard">

                    <a href="productos_medicinal.php?id_producto=<?php echo $fila['id_producto']?>" > <h3><?php echo $fila ["nombre"]?></h3></a>
                    <p><?php echo $fila ["categoria"]?></p>
                    <p class="precio">$<?php echo $fila ["precio"]?></p>
                </div>
                </div>
                </div>
                </div>

                    <?php
                
            } }

            ?>
            
            
    </div>
    
    </div>
    </div>


    <div class="carrusel-productos-destacados1">
        <h2>Destacado en Bolsos</h2>
        <div class="carrusel-multi">
            <div class="carrusel-multi-container">
                
            <!-- PRIMERA FOTO         -->

            <?php

            if (!$conexion) {
                die("Conexion fallida: " . mysqli_connect_error());
            }
            else{
                //insertamos el resultado del formulario
                $query = "select id_producto, nombre, precio, categoria,img1 from producto where categoria='bolso'";
                $resultado=mysqli_query($conexion, $query);


                while($fila=mysqli_fetch_assoc($resultado)){
                        ?>
                    

                    <div class="carrusel-multi-item">
                    <div class="card">
                    <div class="card2">
                    <a href="producto_bolso.php?id_producto=<?php echo $fila['id_producto']?>" > <img src="<?php echo $fila ["img1"]?>" alt="Zapatilla 2"></a>
                    <div class="espaciocard">                    
                    <a href="producto_bolso.php?id_producto=<?php echo $fila['id_producto']?>" > <h3><?php echo $fila ["nombre"]?></h3></a>
                    <p><?php echo $fila ["categoria"]?></p>
                    <p class="precio">$<?php echo $fila ["precio"]?></p>
                </div>
                </div>
                </div>
                </div>

                    <?php
                
            } }

            ?>
            
            
    </div>
    
    </div>
    </div>
    
    
    </div>
    

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
<script>
    document.addEventListener('DOMContentLoaded', function() {
            const textoDescuento = document.getElementById('texto-descuento');
            const textoNuevosBotines = document.getElementById('texto-nuevos-botines');
            const mensajeDescuento = '30% de Descuento';
            const mensajeNuevosBotines = 'Nuevos botines Botines Fútbol adidas X Crazyfast Elite Messi FG';
            
            function animarTexto(elemento, mensaje) {
                let indice = 0;
                let escribiendo = true;

                function animar() {
                    if (escribiendo) {
                        if (indice <= mensaje.length) {
                            elemento.textContent = mensaje.slice(0, indice);
                            indice++;
                        } else {
                            escribiendo = false;
                            setTimeout(animar, 1000);
                            return;
                        }
                    } else {
                        if (indice > 0) {
                            elemento.textContent = mensaje.slice(0, indice);
                            indice--;
                        } else {
                            escribiendo = true;
                            setTimeout(animar, 500);
                            return;
                        }
                    }
                    
                    const velocidad = escribiendo ? 50 : 25;
                    setTimeout(animar, velocidad);
                }

                animar();
            }

            animarTexto(textoDescuento, mensajeDescuento);
            animarTexto(textoNuevosBotines, mensajeNuevosBotines);
        });
        const carousels = document.querySelectorAll('.carrusel');

        carousels.forEach(carousel => {
                const slides = carousel.querySelectorAll('input[type="radio"]');
                const prevBtn = carousel.querySelector('.control-prev');
                const nextBtn = carousel.querySelector('.control-next');
                
                let currentSlide = 0;
                
                function showSlide(index) {
                    slides[index].checked = true;
                    updateControls();
                }
                
                function nextSlide() {
                    currentSlide = (currentSlide + 1) % slides.length;
                    showSlide(currentSlide);
                }
                
                function prevSlide() {
                    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                    showSlide(currentSlide);
                }
                
                function updateControls() {
                    const nextIndex = (currentSlide + 1) % slides.length;
                    const prevIndex = (currentSlide - 1 + slides.length) % slides.length;
                    
                    nextBtn.setAttribute('for', slides[nextIndex].id);
                    prevBtn.setAttribute('for', slides[prevIndex].id);
                }
                
                nextBtn.addEventListener('click', nextSlide);
                prevBtn.addEventListener('click', prevSlide);
                
                updateControls();
            });
        
            document.addEventListener('DOMContentLoaded', function() {
    const carouselContainer = document.querySelector('.carrusel-multi-container');
    const items = document.querySelectorAll('.carrusel-multi-item');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    let currentIndex = 0;
    const totalItems = items.length;

    function updateCarousel() {
        const itemWidth = items[0].offsetWidth; // Obtiene el ancho de un ítem
        carouselContainer.style.transform = `translateX(-${currentIndex * itemWidth}px)`; // Desplaza el carrusel según el índice actual
    }

    function moveNext() {
        if (currentIndex < totalItems - 1) { // Solo avanza si no está en el último ítem
            currentIndex++;
            updateCarousel();
        }
    }

    function movePrev() {
        if (currentIndex > 0) { // Solo retrocede si no está en el primer ítem
            currentIndex--;
            updateCarousel();
        }
    }

    nextBtn.addEventListener('click', moveNext);
    prevBtn.addEventListener('click', movePrev);

    // Inicializa el carrusel al cargar
    updateCarousel();
});


    
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


    
</body>
</html>