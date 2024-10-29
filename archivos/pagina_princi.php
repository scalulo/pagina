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
        <img src="../imagenes/pagina/logo.scarojas 3.png" alt="Logo de la página" class="loader-logo">
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
        <a href="http://localhost/archivos/registrarse.html">
            <img src="/imagenes/pagina/logo.scarojas 3.png" alt="logo"  width="90px" height="68px">
        
        </a> 
            

        <div class="container-input">
  <input type="text" placeholder="Search" name="text" class="input">
  <svg fill="#000000" width="20px" height="20px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
    <path d="M790.588 1468.235c-373.722 0-677.647-303.924-677.647-677.647 0-373.722 303.925-677.647 677.647-677.647 373.723 0 677.647 303.925 677.647 677.647 0 373.723-303.924 677.647-677.647 677.647Zm596.781-160.715c120.396-138.692 193.807-319.285 193.807-516.932C1581.176 354.748 1226.428 0 790.588 0S0 354.748 0 790.588s354.748 790.588 790.588 790.588c197.647 0 378.24-73.411 516.932-193.807l516.028 516.142 79.963-79.963-516.142-516.028Z" fill-rule="evenodd"></path>
</svg>
</div>


            <img class="carrito" src="/imagenes/pagina/carrito-de-compras.png" alt="carrito"  height="40px"  width="40px" >
        

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
                        <img src="/imagenes/botines/adidasoro.jpg" alt="botin en descuento">
                    </div>
                    <div class="slide">
                        <img src="/imagenes/botines/adidasoro.2.jpg" alt="botin en descuento">
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
                        <img src="/imagenes/botines/doradosmessi.jpg" alt="botin nuevo">
                    </div>
                    <div class="slide">
                        <img src="/imagenes/botines/doradosmessi.2.jpg" alt="botin nuevo">
                    </div>
                    <div class="slide">
                        <img src="/imagenes/botines/messidorados.4.jfif" alt="botin nuevo">
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
            <ul class="example-2">
  <li class="icon-content">
    <a
      data-social="linkedin"
      aria-label="LinkedIn"
      href="https://linkedin.com/"
    >
      <div class="filled"></div>
      <svg
        xml:space="preserve"
        viewBox="0 0 16 16"
        class="bi bi-linkedin"
        fill="currentColor"
        height="16"
        width="16"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill="currentColor"
          d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"
        ></path>
      </svg>
    </a>
    <div class="tooltip">LinkedIn</div>
  </li>
  <li class="icon-content">
    <a data-social="github" aria-label="GitHub" href="https://www.github.com/">
      <div class="filled"></div>
      <svg
        xml:space="preserve"
        viewBox="0 0 16 16"
        class="bi bi-github"
        fill="currentColor"
        height="16"
        width="16"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill="currentColor"
          d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"
        ></path>
      </svg>
    </a>
    <div class="tooltip">GitHub</div>
  </li>
  <li class="icon-content">
    <a
      data-social="instagram"
      aria-label="Instagram"
      href="https://www.instagram.com/"
    >
      <div class="filled"></div>
      <svg
        xml:space="preserve"
        viewBox="0 0 16 16"
        class="bi bi-instagram"
        fill="currentColor"
        height="16"
        width="16"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill="currentColor"
          d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
        ></path>
      </svg>
    </a>
    <div class="tooltip">Instagram</div>
  </li>
  <li class="icon-content">
    <a data-social="youtube" aria-label="Youtube" href="https://youtube.com/">
      <div class="filled"></div>
      <svg
        xml:space="preserve"
        viewBox="0 0 16 16"
        class="bi bi-youtube"
        fill="currentColor"
        height="16"
        width="16"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill="currentColor"
          d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"
        ></path>
      </svg>
    </a>
    <div class="tooltip">Youtube</div>
  </li>
</ul>





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
