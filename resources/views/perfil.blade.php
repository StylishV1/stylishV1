<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish - bb</title>
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
            <li><a href="{{ url('/buscar') }}" id="search-toggle"><i class="fas fa-search"></i> Buscar</a></li>
            <li><a href="{{ url('/perfil') }}" id="profile-link"><i class="fas fa-user"></i> Perfil</a></li>
            <li><a href="{{ url('/favoritos') }}"><i class="fas fa-heart"></i> Favoritos</a></li>
            <li><a href="{{ url('/carrito') }}"><i class="fas fa-shopping-cart"></i> Carrito</a></li>
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
</form>


<main>
<main>
    <!-- Perfil -->
    <section class="profile">
        <h2>Perfil</h2>
        <div class="profile-info">
            <div class="avatar">
                <i class="bi bi-person"></i>
                <p>Nombre</p> 
            </div>
            <div class="user-details">
                <input type="text" placeholder="Correaao">
                <input type="text" placeholder="Número Documento">
                <input type="text" placeholder="Teléfono">
                <input type="text" placeholder="Fecha de Nacimiento">
                <input type="text" placeholder="Edad">
            </div>
        </div>
        <button class="edit-btn">Editar</button>
    </section>

  <!-- Mis Favoritos -->
<section class="favorites">
    <h3>Mis Favoritos ❤ <i class="bi bi-heart-fill"></i></h3>
    <div class="product-grid">
        <!-- Tarjetas de productos -->
        <div class="product-card">
            <img src="{{ asset('img/22.jpg') }}" alt="Moda 1">
            <p>Top</p>
            <p>$300.000</p>
        </div>
        <div class="product-card">
            <img src="{{ asset('img/23.jpg') }}" alt="Moda 2">
            <p>Camisa de satín</p>
            <p>$400.000</p>
        </div>
        <div class="product-card">
            <img src="{{ asset('img/Daniel6.jpeg') }}" alt="Conjunto">
            <p>Conjunto</p>
            <p>$40.000</p>
        </div>
        <div class="product-card">
            <img src="{{ asset('img/Daniel.jpeg') }}" alt="Blazer">
            <p>Blazer marrón</p>
            <p>$50.000</p>
        </div>
        <div class="product-card">
            <img src="{{ asset('img/Daniel7.jpeg') }}" alt="Falda">
            <p>Falda</p>
            <p>$80.000</p>
    </div> <!-- Cierra el div .product-grid -->
    
    <!-- Botón "Ver más" fuera de la grilla de productos -->
    <div class="favorites-footer">
        <button class="view-more">Ver más</button>
    </div>
</section>


    <!-- Mi Carrito -->
<section class="carri">
    <h3>Mi Carrito <i class="bi bi-cart-fill"></i></h3>
    <div class="product-grid">
        <!-- Tarjetas de productos -->
        <div class="product-card">
            <img src="{{ asset('img/Daniel4.jpeg') }}" alt="Moda 3">
            <p>Saco tejido</p>
            <p>$560.000</p>
        </div>
        <div class="product-card">
            <img src="{{ asset('img/Mariana1.jpeg') }}" alt="Falda">
            <p>Vestido Elegante</p>
            <p>$200.000</p>
        </div>
        <div class="product-card">
            <img src="{{ asset('img/Danil4.jpeg') }}" alt="Pantalon">
            <p>Pantalón</p>
            <p>$200.000</p>
        </div>
        <div class="product-card">
            <img src="{{ asset('img/Daniel3.jpeg') }}" alt="Camisa">
            <p>Camisa</p>
            <p>$200.000</p>
        </div>
        <div class="product-card">
            <img src="{{ asset('img/Daniel2.jpeg') }}" alt="Saco">
            <p>Saco</p>
            <p>$200.000</p>
        </div>
    </div> <!-- Cierra el div .product-grid -->
    
    <!-- Botón "Ver más" fuera de la grilla de productos -->
    <div class="carri-footer">
        <button class="view-more">Ver más</button>
    </div>
</section>

</main>



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