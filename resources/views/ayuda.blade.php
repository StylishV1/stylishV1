<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda - Stylish</title>
    <link rel="stylesheet" href="{{ asset('css/ESTILOS.CSS') }}">
    <!-- Enlace a la biblioteca de iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>
<body> <!-- Cuerpo del documento -->
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
                <li><a href="{{ url('/buscar') }}" id="search-toggle"><i class="fas fa-search"></i> Buscar</a></li> <!-- Icono de búsqueda -->
                <li><a href="#" id="profile-link"><i class="fas fa-user"></i> Perfil</a></li> <!-- Icono de perfil -->
                <li><a href="{{ url('/favoritos') }}"><i class="fas fa-heart"></i> Favoritos</a></li> <!-- Icono de favoritos -->
                <li><a href="{{ url('/carrito') }}"><i class="fas fa-shopping-cart"></i> Carrito</a></li> <!-- Icono de carrito de compras -->
            </ul>
        </div>
    </header>

    <!-- Sección de la caja de búsqueda -->
    <div id="search-form" class="search-form">
        <div class="search-content"> <!-- Contenido del formulario de búsqueda -->
            <form action="buscar.php" method="POST"> <!-- Formulario de búsqueda con método POST -->
                <input type="text" name="termino" placeholder="Buscar..." id="search-input"> <!-- Campo de entrada de búsqueda -->
                <button type="submit" name="buscar" id="search-button">Buscar</button> <!-- Botón de envío de búsqueda -->
            </form>
        </div>
    </div> <br>

       <section class= "hero1"></section>
    <section class="faq1">
        <h2>Preguntas frecuentes</h2>
        <div class="faq1-grid">
            <div class="faq1-item">
                <p>¿Cómo solicito un cambio a través de WWW.stylish.COM.CO?</p>
            </div>
            <div class="faq1-item">
                <p>¿Cómo puedo hacer seguimiento o rastrear mi pedido?</p>
            </div>
            <div class="faq1-item">
                <p>¿Puedo hacer cambios de mis productos?</p>
            </div>
            <div class="faq1-item">
                <p>¿Cómo radico una solicitud de Garantía a través de WWW.stylish.COM.CO?</p>
            </div>
            <div class="faq1-item">
                <p>¿Cómo puedo ponerme en contacto con Servicio al Cliente?</p>
            </div>
        </div>
    </section>

    <!-- footer -->
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
        <a href="{{ url('/nosotros') }}">Nosotros</a>
        <a href="#">Ayuda</a>
        <a href="#">Términos y Condiciones</a>
        <a href="{{ url('/contactanos') }}"> Contáctanos</a>
    </div>
</footer>
<script src="{{ asset('js/ofertas.js') }}"></script>
</body>
</html>
