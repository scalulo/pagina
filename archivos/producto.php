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
        $idproducto=$_GET['id_producto'];
        $query = "select nombre, precio, tipo, descripcion,marca, img1,img2,img3,img4,img5 from producto join botines on id_producto=idbotin where id_producto = $idproducto";
        $resultado=mysqli_query($conexion, $query);
        $fila = mysqli_fetch_assoc($resultado);
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="producto.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header">
            <a href="http://localhost/pagina_princi.php" target="_blank" class="tooltip">
                <img src="../pagina/imagenes/logoscarojas.png" alt="logo" width="90px" height="68px">
                <span class="tooltiptext">Haz click para volver a la página principal</span>
            </a>                

            <div class="divbuscador">
                <img class="lupa" src="../pagina/imagenes/lupaigpng" alt="lupa" width="20" height="20">
                <input class="buscar" type="text" placeholder="Buscar"  ></input>
                </div>

            <img class="carrito" src="../pagina/imagenes/carrito-de-compras.png" alt="carrito"  height="40px"  width="40px" >
        

        </div>

    </header>
    <main>
        
        <div class="carousel-container">
            <div class="carousel">
                <div class="carousel-slide">
                    <div>Hasta 50% off en Seleccionados</div>
                    <a href="#" class="ver-productos">Ver productos</a>
                </div>
                <div class="carousel-slide">
                    <div>Nuevos estilos de primavera</div>
                    <a href="#" class="ver-productos">Explorar ahora</a>
                </div>
                <div class="carousel-slide">
                    <div>Envío gratis en pedidos superiores a $100</div>
                    <a href="#" class="ver-productos">Comprar</a>
                </div>
            </div>
            <div class="carousel-navigation">
                <button class="prev">‹</button>
                <button class="next">›</button>
            </div>
        </div>

        

    <div class="productos">
        <section class="fotos">
            <div class="secundarias">
                <ul id="miniaturas">
                    <li><img class="secu" src="<?php echo $fila ["img1"]?>" alt=""></li>
                    <li><img class="secu" src="<?php echo $fila ["img2"]?>" alt=""></li>
                    <li><img class="secu" src="<?php echo $fila ["img3"]?>" alt=""></li>
                    <li><img class="secu" src="<?php echo $fila ["img4"]?>" alt=""></li>
                    <li><img class="secu" src="<?php echo $fila ["img5"]?>" alt=""></li>
                </ul>
            </div>
        
            <div class="principal">
                <button class="carousel-btn prev">‹</button>
                <div class="carousel-container">
                    <div class="carousel" id="carousel">
                        <img class="princi" src="<?php echo $fila ["img1"]?>" alt="">
                        <img class="princi" src="<?php echo $fila ["img2"]?>"alt="">
                        <img class="princi" src="<?php echo $fila ["img3"]?>" alt="">
                        <img class="princi" src="<?php echo $fila ["img4"]?>" alt="">
                        <img class="princi" src="<?php echo $fila ["img5"]?> " alt="">
                    </div>
                </div>
                <button class="carousel-btn next">›</button>
            </div>
        </section>

        <div class="descripcion">
            <p class="exclusivo"> <?php echo $fila ["tipo"]?></p>
            <h2><?php echo $fila ["nombre"]?></h2>
            <h1><?php echo $fila ["marca"]?></h1>
            <p>Precio: $<?php echo $fila ["precio"]?></p>
            <p class="enviogratis">Envío gratis para miembros</p>
            <select name="" id="desplegable">
            
                <option data-count="2" value="Alfa Romeo">Escoja su talle</option>
                    <option data-count="23" value="Audi">37</option>
                    <option data-count="433" value="BMW">38</option>
                    <option data-count="45" value="Chrysler">39</option>
                    <option data-count="476" value="Citroen">40</option>
                    <option data-count="78" value="Dodge">40.5</option>
                    <option data-count="123" value="Fiat">41.5</option>
                    <option data-count="32" value="Ford">43</option>
                    <option data-count="3" value="Honda">43.5</option>
                    <option data-count="342" value="Hyundai">44</option>

            </select>
            <p><?php echo $fila ["descripcion"]?></p>
            <button class="añadircarrito">Añadir al carrito</button>
        </div>

    </div>
    

    </main>

    <footer >
        <div class="todosfooter">
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
    </div>
        <div class="maps">
            <h1>UBICACIÓN</h1>
            <hr>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.127533424383!2d-58.509773725146715!3d-34.600936457349874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb633202d73db%3A0x4808e170755b2eee!2sJoaqu%C3%ADn%20V.%20Gonz%C3%A1lez%203687%2C%20C1419AXE%20Villa%20Devoto%2C%20Cdad.%20Aut%C3%B3noma%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1726249792828!5m2!1ses!2sar" width="500" height="230" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>           </div>

    </footer>
    <script>
        const carousel = document.querySelector('.carousel');
        const slides = document.querySelectorAll('.carousel-slide');
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');
        let currentIndex = 0;

        function showSlide(index) {
            currentIndex = index;
            carousel.style.transform = `translateX(-${index * 100}%)`;
        }

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            showSlide(currentIndex);
        });

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        });

        // Auto-scroll cada 5 segundos
        setInterval(() => {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }, 5000);

        // Iniciar el carrusel
        showSlide(0);
        document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('carousel');
    const images = carousel.getElementsByTagName('img');
    const prevBtn = document.querySelector('.carousel-btn.prev');
    const nextBtn = document.querySelector('.carousel-btn.next');
    const miniaturas = document.getElementById('miniaturas').getElementsByTagName('img');
    let currentIndex = 0;

    function showImage(index) {
        // Asegúrate de que el índice esté dentro del rango
        index = (index + images.length) % images.length;
        
        // Calcula la posición de desplazamiento
        const offset = -index * 100;
        
        // Aplica la transformación
        carousel.style.transform = `translateX(${offset}%)`;
        
        // Actualiza el índice actual
        currentIndex = index;

        // Actualizar miniatura activa
        Array.from(miniaturas).forEach((miniatura, i) => {
            miniatura.style.opacity = i === index ? 1 : 0.5;
        });
    }

    prevBtn.addEventListener('click', () => {
        showImage(currentIndex - 1);
    });

    nextBtn.addEventListener('click', () => {
        showImage(currentIndex + 1);
    });

    // Event listeners para miniaturas
    Array.from(miniaturas).forEach((miniatura, index) => {
        miniatura.addEventListener('click', () => {
            showImage(index);
        });
    });

    // Inicializar
    showImage(currentIndex);
});
    </script>
</body>
</html>