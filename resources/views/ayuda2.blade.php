<!DOCTYPE html> <!-- Declaración del tipo de documento HTML -->
<html lang="es"> <!-- Inicio del documento HTML con idioma español -->
<head> <!-- Encabezado del documento -->
    <meta charset="UTF-8"> <!-- Configuración de codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configuración para la visualización responsive -->
    <title>Ayuda-2</title> <!-- Título de la página -->
    
    <!-- Enlace a fuentes de Google para las tipografías Lora y Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <!-- Enlace a la hoja de estilos CSS principal -->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

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
                    <li><a href="#">Hombre</a></li> <!-- Enlace a la sección de Hombre -->
                    <li><a href="#">Mujer</a></li> <!-- Enlace a la sección de Mujer -->
                    <li><a href="{{ url('/ofertas') }}">Ofertas</a></li> <!-- Enlace a la sección de Ofertas -->
                    <li><a href="{{ url('/tendencias') }}">Tendencias</a></li> <!-- Enlace a la sección de Tendencias -->
                </ul>
            </nav>

            <!-- Lista de iconos a la izquierda -->
            <ul class="left-icons">
                <li><a href="{{ url('/buscar') }}" id="search-toggle"><i class="fas fa-search"></i> Buscar</a></li> <!-- Icono de búsqueda -->
                <li><a href="{{ url('/perfiles') }}" id="profile-link"><i class="fas fa-user"></i> Perfil</a></li> <!-- Icono de perfil -->
                <li><a href="#"><i class="fas fa-heart"></i> Favoritos</a></li> <!-- Icono de favoritos -->
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
    </div>
    <!-- Contenido principal -->
    <main class="main-content">
        <div class="breadcrumb">
            <span class="breadcrumb-logo">Stylish</span> > <span>Preguntas frecuentes</span>
        </div>
        <h1 class="main-title">Preguntas frecuentes</h1>
        <ul class="faq-list">
            <li class="faq-item">
                <span class="faq-icon">★</span> ¿Cómo solicito un cambio a través de WWW.stylish.COM.CO?
            </li>
            <li class="faq-item">
                <span class="faq-icon">★</span> ¿Cómo radico una solicitud de Garantía a través de WWW.stylish.COM.CO?
            </li>
            <li class="faq-item">
                <span class="faq-icon">★</span> ¿Cómo puedo hacer seguimiento o rastrear mi pedido?
            </li>
            <li class="faq-item">
                <span class="faq-icon">★</span> ¿Cómo puedo ponerme en contacto con Servicio al Cliente?
            </li>
        </ul>
        
    </main>
    
<!-- Enlace al archivo JS -->
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

