<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>favoritos</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/favoritos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <header>
        <div class="promo-bar">
            Solo por hoy 20% de descuento en camisas y blusas
        </div>

        <div class="container">
            <a href="{{ url('/') }}" class="logo" id="logo">
                <img src="{{ asset('img/Logo.jpg') }}" alt="Stylish" style="height: 40px;">
            </a>

            <nav class="centered-menu">
                <ul class="top-menu"> <!-- Lista de elementos del menú superior -->
                    <li><a href="{{ url('/hombre') }}">Hombre</a></li> <!-- Enlace a la sección de Hombre -->
                    <li><a href="{{ url('/mujer') }}">Mujer</a></li> <!-- Enlace a la sección de MUJER -->
                    <li><a href="{{ url('/ofertas') }}">Ofertas</a></li> <!-- Enlace a la sección de Ofertas -->
                    <li><a href="{{ url('/tendencias') }}">Tendencias</a></li> <!-- Enlace a la sección de Tendencias -->
                </ul>
            </nav>

            <ul class="left-icons">
                <li><a href="{{ url('/buscar') }}" id="search-toggle"><i class="fas fa-search"></i> Buscar</a></li>
                <li><a href="{{ url('/perfil') }}" id="profile-link"><i class="fas fa-user"></i> Perfil</a></li>
                <li><a href="{{ url('/favoritos') }}"><i class="fas fa-heart"></i> Favoritos</a></li>
                <li><a href="{{ url('/carrito') }}"><i class="fas fa-shopping-cart"></i> Carrito</a></li>
            </ul>
        </div>
    </header>

    <div id="search-form" class="search-form">
        <div class="search-content">
            <form action="buscar.php" method="POST">
                <input type="text" name="termino" placeholder="Buscar..." id="search-input">
                <button type="submit" name="buscar" id="search-button">Buscar</button>
            </form>
        </div>
    </div>

    <!-- Sección de Favoritos -->
    <div class="fav-section-stylish-unique">
        <h1>Mi Lista de Favoritos</h1>
        <p>Esta es la lista de productos que te interesan</p>

        <div class="fav-product-grid-stylish">
            <!-- Producto 1 -->
            <div class="fav-product-card-advanced">
                <img src="{{ asset('img/24.jpg') }}" alt="Producto 1">
                <h3>Vestido</h3>
                <div class="fav-price-tag-stylish">$40,000</div>
                <button>Añadir al carrito</button>
            </div>
            <!-- Producto 2 -->
            <div class="fav-product-card-advanced">
                <img src="{{ asset('img/23.jpg') }}" alt="Producto 2">
                <h3>Bolso</h3>
                <div class="fav-price-tag-stylish">$50,000</div>
                <button>Añadir al carrito</button>
            </div>
            <!-- Producto 3 -->
            <div class="fav-product-card-advanced">
                <img src="{{ asset('img/22.jpg') }}" alt="Producto 3">
                <h3>Camisa</h3>
                <div class="fav-price-tag-stylish">$30,000</div>
                <button>Añadir al carrito</button>
            </div>
            <!-- Producto 4 -->
            <div class="fav-product-card-advanced">
                <img src="{{ asset('img/27.avif') }}" alt="Producto 4">
                <h3>Shorts</h3>
                <div class="fav-price-tag-stylish">$25,000</div>
                <button>Añadir al carrito</button>
            </div>
            <!-- Producto 5 -->
            <div class="fav-product-card-advanced">
                <img src="{{ asset('img/25.jpg') }}" alt="Producto 5">
                <h3>Jeans</h3>
                <div class="fav-price-tag-stylish">$60,000</div>
                <button>Añadir al carrito</button>
            </div>
            <!-- Producto 6 -->
            <div class="fav-product-card-advanced">
                <img src="{{ asset('img/28.avif') }}" alt="Producto 6">
                <h3>Zapatillas</h3>
                <div class="fav-price-tag-stylish">$90,000</div>
                <button>Añadir al carrito</button>
            </div>
            <!-- Producto 7 -->
            <div class="fav-product-card-advanced">
                <img src="{{ asset('img/5.jpg') }}" alt="Producto 7">
                <h3>Bolso Negro</h3>
                <div class="fav-price-tag-stylish">$70,000</div>
                <button>Añadir al carrito</button>
            </div>
            <!-- Producto 8 -->
            <div class="fav-product-card-advanced">
                <img src="{{ asset('img/27.avif') }}" alt="Producto 8">
                <h3>Aretes</h3>
                <div class="fav-price-tag-stylish">$15,000</div>
                <button>Añadir al carrito</button>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer>
        <div class="footer-logo">
            <img src="{{ asset('img/Logo.jpg') }}" alt="Stylish" style="height: 40px;">
        </div>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="footer-links">
            <a href="{{ url('/nosotros') }}">Nosotros</a>
            <a href="#">Ayuda</a>
            <a href="#">Términos y Condiciones</a>
            <a href="{{ url('/contactanos') }}">Contáctanos</a>
        </div>
    </footer>
</body>
</html>
