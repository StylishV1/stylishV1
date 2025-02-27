<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oferta </title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/ofertas.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .gallery-item img {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .gallery-item img:hover {
            transform: scale(1.1);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <header>
        <div class="promo-bar">
            Solo por hoy 200% de descuento en camisas y blusas
        </div>
        <div class="container">
            <a href="{{ url('/') }}" class="logo" id="logo">
                <img src="{{ asset('img/Logo.jpg') }}" alt="Stylish" style="height: 40px;">
            </a>
            <nav class="centered-menu">
                <ul class="top-menu">
                    <li><a href="#">Hombre</a></li>
                    <li><a href="#">Mujer</a></li>
                    <li><a href="{{ url('/ofertas') }}">Ofertas</a></li>
                    <li><a href="{{ url('/tendencias') }}">Tendencias</a></li>
                </ul>
            </nav>
            <ul class="left-icons">
                <li><a href="{{ url('/buscar') }}" id="search-toggle"><i class="fas fa-search"></i> Buscar</a></li>
                <li><a href="{{ url('/perfiles') }}" id="profile-link"><i class="fas fa-user"></i> Perfil</a></li>
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
    <div class="outlet">OUTLET</div>
    <main>
        <section class="gallery">
            <div class="gallery-item">
                <a href="{{ url('/hombre') }}">
                <a href="{{ url('/hombre2') }}">
                    <img src="{{ asset('img/23.jpg') }}" alt="Hombre">
                </a>
                <h3>Hombre</h3>
            </div>
            <div class="gallery-item">
                <a href="{{ url('/mujer') }}">
                <a href="{{ url('/mujer2') }}">
                    <img src="{{ asset('img/22.jpg') }}" alt="Mujer">
                </a>
                <h3>Mujer</h3>
            </div>
            <div class="gallery-item">
                <a href="{{ url('/accesorios') }}">
                    <img src="{{ asset('img/24.jpg') }}" alt="Accesorios">
                </a>
                <h3>Accesorios</h3>
            </div>
        </section>
    </main>

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
            <a href="{{ url('/contactanos') }}"> Contáctanos</a>
        </div>
    </footer>

    <script src="{{ asset('js/ofertas.js') }}"></script>
</body>
</html>
