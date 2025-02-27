<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish - Página de Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
     <!--<link rel="stylesheet" href="Styles.css"> -->

    <link rel="stylesheet" href="{{ asset('css/ESTILOS.CSS') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <!-- Barra superior con descuento -->
    <header> <!-- Sección del encabezado de la página -->
        <!-- Barra de promoción -->
        <div class="promo-bar">
            Solo por hoy 20% de descuento en camisas y blusas <!-- Texto de promoción -->
        </div>

        <div class="container"> <!-- Contenedor principal del encabezado -->
        <a href="{{ url('/') }}" class="logo" id="logo"> <!-- Enlace al logo de la página -->
            <img src="{{ asset('img/Logo.jpg') }}" alt="Stylish" style="height: 40px;"> <!-- Imagen del logo -->
            </a>

            

            <!-- Menú de navegación centrado -->
            <nav class="centered-menu">
                <ul class="top-menu"> <!-- Lista de elementos del menú superior -->
                    <li><a href="{{ url('/hombre') }}">Hombre</a></li> <!-- Enlace a la sección de Hombre -->
                    <li><a href="{{ url('/mujer') }}">Mujer</a></li> <!-- Enlace a la sección de MUJER -->
                    <li><a href="{{ url('/ofertas') }}">Ofertas</a></li> <!-- Enlace a la sección de Ofertas -->
                    <li><a href="{{ url('/tendencias') }}">Tendencias</a></li> <!-- Enlace a la sección de Tendencias -->
                </ul>
            </nav>

            <!-- Lista de iconos a la izquierda -->
            <ul class="left-icons">
                <li><a href="#" id="search-toggle"><i class="fas fa-search"></i> Buscar</a></li> <!-- Icono de búsqueda -->
                <li><a href="#" id="profile-link"><i class="fas fa-user"></i> Perfil</a></li> <!-- Icono de perfil -->
                <li><a href="#"><i class="fas fa-heart"></i> Favoritos</a></li> <!-- Icono de favoritos -->
                <li><a href="#"><i class="fas fa-shopping-cart"></i> Carrito</a></li> <!-- Icono de carrito de compras -->
            </ul>
        </div>
    </header>
   
    
    <!-- Caja de búsqueda -->
    <div id="search-form" class="search-form">
        <div class="search-content">
            <form action="buscar.php" method="POST">
                <input type="text" name="termino" placeholder="Buscar..." id="search-input">
                <button type="submit" name="buscar" id="search-button">Buscar</button>
            </form>
        </div>
    </div>
    
    <main>
       
        <div id="search-form" class="search-form">
            <div class="search-content">
                <form action="buscar.php" method="POST">
                    <input type="text" name="termino" placeholder="Buscar..." id="search-input">
                    <button type="submit" name="buscar" id="search-button">Buscar</button>
                </form>
            </div>
        </div>
        
    
    <!-- Carrito de compras -->
    <div id="cart" class="cart">
        <div class="cart-content">
            <h2>Carrito de compras</h2>
            <ul id="cart-items">
                <!-- Los artículos se añadirán aquí -->
            </ul>
           
        </div>
    </div>
</form>
          
 <!-- Sección de Introducción -->
 <section class="seccion-intro">
        <div class="contenido-intro">
            <img src="{{ asset('img/Saco.jpg') }}" alt="" class="imagen-logo2">
            
            <div class="texto-intro">
                <h2>Bienvenidos a Stylish</h2>
                <p>Nos dedicamos a la moda elegante y de calidad, con un enfoque en estilos únicos y modernos.</p>
            </div>
        </div>
    </section>

    <!-- Sección ¿Quiénes Somos? -->
    <section class="quienes-somos">
        <h2>¿Quiénes Somos?</h2>
        <p>Somos un equipo apasionado por la moda que busca redefinir el estilo con ropa de calidad y diseños exclusivos.</p>
    </section>

    <!-- Sección Galería -->
    <section class="galeria">
        <img src="{{ asset('img/22.jpg') }}" alt="Moda 1">
        <img src="{{ asset('img/23.jpg') }}" alt="Moda 2">
        <img src="{{ asset('img/27.avif') }}" alt="Moda 3">
    </section>

    <!-- Sección Nuestro Objetivo -->
    <section class="nuestro-objetivo">
        <h2>Nuestro Objetivo</h2>
        <p>Queremos brindar una experiencia de compra única, ofreciendo productos de calidad que resalten tu estilo personal.</p>
        <div class="logo-objetivo">Stylish</div>
    </section>

    <!-- Sección Declaración Final -->
    <section class="declaracion-final">
        <p>Gracias por confiar en Stylish. Estamos aquí para ayudarte a brillar con tu propio estilo.</p>
    </section>


<!-- Footer -->
    <footer>
        <div class="footer-logo">
        <img src="{{ asset('img/Logo.jpg') }}" alt="Stylish" style="height: 40px;"> <!-- Imagen del logo -->
        </div>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a> <!-- Ícono de WhatsApp -->
        </div>
        <div class="footer-links">
            <a href="#">Nosotros</a>
            <a href="#">Ayuda</a>
            <a href="#">Términos y Condiciones</a>
            <a href="#">Contáctanos</a>
        </div>
    </footer>
   
    
    <script src="scripts.js"></script>
</body>
</html>
