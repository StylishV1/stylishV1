<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
     <!--<link rel="stylesheet" href="Styles.css"> -->

    <link rel="stylesheet" href="{{ asset('css/bb.css') }}">
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
                <li><a href="{{ url('/favoritos') }}"><i class="fas fa-heart"></i> Favoritos</a></li> <!-- Icono de favoritos -->
                <li><a href="{{ url('/carrito') }}"><i class="fas fa-shopping-cart"></i> Carrito</a></li> <!-- Icono de carrito de compras -->
            </ul>
        </div>
    </header>
    <main>
       
        
        <section class="contact-section1">

             <div  class="contact1-title">
                <h1>CONTACTANOS</h1> <!-- Titulo del Formulario-->
             </div>


              <!-- contactanos formulario-->
            <div class="contact-container">
                <div class="contact-form1">
                    <h2 class="escribenos">ESCRÍBENOS</h2> <br><br>
                    
                    <form action="{{ route('contactanos.store') }}" method="POST">
                        @csrf
                        <label for="name" class="textos-e">Nombre</label><!-- Nombre-->
                        <input type="text" id="name" name="nombre" placeholder="" class="inpuns" required> <br><br>
                    
                        <label for="email" class="textos-e">Correo</label> <!-- correo-->
                        <input type="email" id="email" name="correo" required> <br><br>
                    
                        <label for="phone" class="textos-e">Número de Teléfono</label><!-- Numero-->
                        <input type="tel" id="phone" name="telefono" placeholder="" required> <br><br>
                    
                        <label for="message" class="textos-e">Tu Mensaje</label><!-- Mensaje del cliente-->
                        <textarea id="message" name="mensaje" placeholder="" required></textarea> <br><br>
                    
                        <button type="submit">ENVIAR</button>
                    </form><br><br>

                    @if(session('success')) <!-- Cuando se envie el mensaje saldra una aleerta-->
    <div class="alert alert-success" style="color: rgb(0, 0, 0); background-color: #d4edda; padding: 10px; margin-bottom: 20px; border: 1px solid #c3e6cb; border-radius: 5px;">
        {{ session('success') }}
    </div>
@endif

                </div>
            <!-- Toda la informacion sobre contactanos-->
                <div class="contact1-info">
                    <h2 class="contactanos">INFORMACIÓN DE CONTACTO</h2>
                    <p class="texts1">
                        En Stylish, valoramos su opinión. Queremos saber qué piensan sobre nuestra ropa, servicio, sitio web o cualquier otro aspecto. Sus comentarios y sugerencias nos ayudan a mejorar. ¡Gracias por su tiempo y por ayudarnos a mejorar!
                    </p><br>
                     <!-- Redes web que nos pueden contactar-->
                    <ul class="redes1">
                              
                            <li><img src="img/whatsapp.png" width="22" height="22" style="margin-right: 10px;"><a href="https://web.whatsapp.com/">+57 3156773006 / 305 3684733</a></li> <br><!-- Red whasap-->
                            <li><img src="img/tel.png" width="22" height="22" style="margin-right: 10px;"><a href="#">STYLISHCOLOMBIA@GMAIL.COM</a></li><br>
                            <li><img src="img/co.png" width="22" height="22" style="margin-right: 10px;"><a href="#">3156773006 / 305 3684733</a></li><br>
                            <li><img src="img/i.png" width="22" height="22" style="margin-right: 10px;"><a href="https://www.instagram.com/">@STYLISHCOLOMBIA</a></li><br>
                            <li><img src="img/x.png" width="22" height="22" style="margin-right: 10px;"><a href="https://x.com/">@STYLISHCOLOMBIA</a></li>  <br>                  
                            <li><img src="img/f.png" width="24" height="23" style="margin-right: 10px;"><a href="https://es-la.facebook.com/">@STYLISHCOLOMBIA</a></li>
                    </ul>
                    </div>
    </main>
    

    

<!-- Footer -->
    <footer>
        <div class="footer-logo">
        <img src="{{ asset('img/Logo.jpg') }}" alt="Stylish" style="height: 40px;"> <!-- Imagen del logo -->
        </div>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a> <!-- Ícono facebook -->
            <a href="#"><i class="fab fa-instagram"></i></a><!-- Ícono de instagram -->
            <a href="#"><i class="fab fa-twitter"></i></a><!-- Ícono de tiwter -->
            <a href="#"><i class="fab fa-whatsapp"></i></a> <!-- Ícono de WhatsApp -->
        </div>
        <div class="footer-links">

        <a href="{{ url('/nosotros') }}">Nosotros</a>
            <a href="#">Ayuda</a>
            <a href="#">Términos y Condiciones</a>
            <a href="#">Contáctanos</a>
            
        </div>
    </footer>
   
    
    <script src="scripts.js"></script>
</body>
</html>
