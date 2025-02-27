<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio al Cliente - Stylish</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlace al archivo CSS externo -->
</head>
<body>
      <!-- Enlace a fuentes de Google para las tipografías Lora y Montserrat -->
      <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

<!-- Enlace a la hoja de estilos CSS principal -->
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

<!-- Enlace a la biblioteca de iconos de Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body> <!-- Cuerpo del documento -->
<header> <!-- Sección del encabezado de la página -->
   

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
            <li><a href="{{ url('/buscar') }}" id="search-toggle"><i class="fas fa-search"></i> Buscar</a></li>
            <li><a href="{{ url('/perfil') }}" id="profile-link"><i class="fas fa-user"></i> Perfil</a></li>
            <li><a href="{{ url('/favoritos') }}"><i class="fas fa-heart"></i> Favoritos</a></li>
            <li><a href="{{ url('/carrito') }}"><i class="fas fa-shopping-cart"></i> Carrito</a></li>
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
    <div class="container">
        <h1 class="title">SERVICIO AL CLIENTE</h1>
        <div class="content">
            <p>Tu satisfacción es nuestra prioridad...</p>
            <p>Si necesitas realizar una PQR...</p>

            <div class="contact-info">
                <p><strong>Whatsapp:</strong> 123456789</p>
                <p><strong>Línea de atención telefónica:</strong> 456789</p>
                <p><strong>Sedes:</strong></p>
                <p>Bogotá: 456789</p>
                <p>Medellín: 789012</p>
                <p>Pereira: 234567</p>
                <p>Horario de atención: Lunes a sábado, 9 AM a 6 PM</p>
            </div>
        </div>

        <div class="chat-box">
            <h3>¿Tienes alguna duda? Contáctanos aquí</h3>
            <textarea placeholder="Escribe tu duda..."></textarea>
            <div class="actions">
                <label><input type="checkbox"> Acepto términos y condiciones</label>
                <button>Enviar</button>
            </div>
        </div>
    </div>
    <footer>
    <div class="footer-logo-unique">
        <img src="{{ asset('img/Logo.jpg') }}" alt="Stylish" style="height: 40px;"> <!-- Imagen del logo -->
    </div>
    <div class="social-icons-unique">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-whatsapp"></i></a> <!-- Ícono de WhatsApp -->
    </div>
    <div class="footer-links-unique">
        <a href="{{ url('/nosotros') }}">Nosotros</a>
        <a href="#">Ayuda</a>
        <a href="#">Términos y Condiciones</a>
        <a href="{{ url('/contactanos') }}"> Contáctanos</a>
    </div>
</footer>
</body>
</html>
