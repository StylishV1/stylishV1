<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish</title>
    
    <!-- Fuentes de Google para Lora y Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <!-- Hoja de estilos principal -->
    <link rel="stylesheet" href="{{ asset('css/ESTILOS.CSS') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- Estilos para el menú desplegable -->
    <style>
      /* Estilos del menú desplegable */
      .dropdown {
        position: relative;
        display: inline-block;
      }
      .dropbtn {
        background-color: transparent;
        color: black;
        font-size: 18px;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 5px;
        font-family: 'Font Awesome 5 Free', sans-serif;
      }
      .dropdown-content {
        position: absolute;
        right: 0;
        background-color: #fff;
        min-width: 160px;
        box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
        z-index: 10000;
        opacity: 0;
        transform: translateY(-10px);
        visibility: hidden;
        transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s ease;
      }
      .dropdown:hover .dropdown-content {
        opacity: 1;
        transform: translateY(0);
        visibility: visible;
        transition-delay: 0s;
      }
      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }
      .dropdown-content a:hover {
        background-color: #f1f1f1;
      }
    </style>
</head>
<body>
    <header>
        <!-- Barra de promoción -->
        <div class="promo-bar">
            Solo por hoy 32% de descuento en camisas y blusas
        </div>

        <div class="container">
            <a href="{{ url('/') }}" class="logo" id="logo">
                <img src="{{ asset('img/Logo.jpg') }}" alt="Stylish" style="height: 40px;">
            </a>

            <!-- Menú de navegación centrado -->
            <nav class="centered-menu">
                <ul class="top-menu">
                    <li><a href="{{ url('/hombre') }}">Hombre</a></li>
                    <li><a href="{{ url('/mujer') }}">Mujer</a></li>
                    <li><a href="{{ url('/ofertas') }}">Ofertas</a></li>
                    <li><a href="{{ url('/tendencias') }}">Tendencias</a></li>
                </ul>
            </nav>

            <!-- Menú desplegable que reemplaza los iconos anteriores -->
            <div class="dropdown">
                <button class="dropbtn"><i class="fas fa-ellipsis-v"></i> Menú</button>
                <div class="dropdown-content">
                    <a href="{{ url('/buscar') }}"><i class="fas fa-search"></i> Buscar</a>
                    @if(Auth::check())
                        <a href="{{ url('/perfil') }}"><i class="fas fa-user"></i> Perfil</a>
                    @else
                        <a href="#" id="profile-link"><i class="fas fa-user"></i> Perfil</a>
                    @endif
                    <a href="{{ url('/mis-favoritos') }}"><i class="fas fa-heart"></i> Favoritos</a>
                    <a href="{{ url('/bolsas') }}"><i class="fas fa-shopping-cart"></i> Carrito</a>
                    @if(Auth::check())
                        <a href="#" onclick="document.getElementById('logout-form').submit()">
                            <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                        </a>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display:none;">
                            @csrf
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </header>

    <!-- Resto del contenido (formularios, secciones, etc.) permanece sin cambios -->
    <!-- Formulario de Inicio de Sesión -->
    <div id="login-form" class="login-form">
        <div class="login-content">
            <h2>Iniciar sesión</h2>
            @if($errors->has('email') || $errors->has('password'))
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ url('/login') }}">
                @csrf
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Iniciar sesión</button>
            </form>
            <div class="login-footer">
                <p>¿Nuevo cliente? <a href="#" id="register-link">Crea tu cuenta</a></p>
                <button id="cancel-button">Cancelar</button>
            </div>
        </div>
    </div>

    <!-- Formulario de Registro -->
    <div id="register-form" class="login-form">
        <div class="login-content">
            <h2>Registrarme</h2>
            @if($errors->has('name') || $errors->has('email') || $errors->has('password'))
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ url('/register') }}">
                @csrf
                <label for="first-name">Nombre:</label>
                <input type="text" id="first-name" name="name" required>
                <label for="last-name">Apellido:</label>
                <input type="text" id="last-name" name="last_name" required>
                <label for="register-email">Correo electrónico:</label>
                <input type="email" id="register-email" name="email" required>
                <label for="register-password">Contraseña:</label>
                <input type="password" id="register-password" name="password" required>
                <label for="password_confirmation">Confirmar Contraseña:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
                <button type="submit">Registrarme</button>
            </form>
            <div class="login-footer">
                <p>¿Ya tienes una cuenta? <a href="#" id="login-link">Inicia sesión</a></p>
                <button id="register-cancel-button">Cancelar</button>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Sección de búsqueda -->
    <div id="search-form" class="search-form">
        <div class="search-content">
            <form action="buscar.php" method="POST">
                <input type="text" name="termino" placeholder="Buscar..." id="search-input">
                <button type="submit" name="buscar" id="search-button">Buscar</button>
            </form>
        </div>
    </div>

    <div id="search-results" style="display: none;">
        <h2>Resultados de Búsqueda</h2>
        <div class="product-gallery">
            <div class="product-item">
                <img src="{{ asset('img/22.jpg') }}" alt="Producto 1">
                <p>Camisa Elegante</p>
            </div>
            <div class="product-item">
                <img src="{{ asset('img/23.jpg') }}" alt="Producto 2">
                <p>Vestido de Verano</p>
            </div>
            <div class="product-item">
                <img src="{{ asset('img/24.jpg') }}" alt="Producto 3">
                <p>Pantalón Casual</p>
            </div>
            <div class="product-item">
                <img src="{{ asset('img/27.avif') }}" alt="Producto 4">
                <p>Blusa Moderna</p>
            </div>
        </div>
    </div>

    <!-- Contenido principal -->
    <main>
        <section id="featured-image">
            <img src="{{ asset('img/28.avif') }}" alt="Estilo 1" class="featured-img">
        </section>
    </main>
    <br>
    <center><h2>DEMUESTRA TU PROPIO</h2><h2>ESTILO</h2></center>
    <!-- Galería de imágenes -->
    <section class="image-gallery">
        <div class="gallery-item">
            <a href="#"><img src="{{ asset('img/22.jpg') }}" alt="Imagen 1"></a>
        </div>
        <div class="gallery-item">
            <a href="#"><img src="{{ asset('img/23.jpg') }}" alt="Imagen 2"></a>
        </div>
        <div class="gallery-item">
            <a href="#"><img src="{{ asset('img/24.jpg') }}" alt="Imagen 3"></a>
        </div>
        <div class="gallery-item">
            <a href="#"><img src="{{ asset('img/27.avif') }}" alt="Imagen 4"></a>
        </div>
    </section>
    <center><h2>COLECCIÓN 2025</h2></center>
    <!-- Sección de Colección -->
    <section class="collection-2024">
        <div class="collection-item">
            <img src="{{ asset('img/23.jpg') }}" alt="Imagen Colección 1">
        </div>
        <div class="collection-item">
            <img src="{{ asset('img/peña5.jpeg') }}" alt="Imagen Colección 2">
        </div>
        <div class="collection-item">
            <img src="{{ asset('img/5.jpg') }}" alt="Imagen Colección 3">
        </div>
    </section>
    <div class="button-container">
        <button class="discover-button">DESCUBRE MAS ESTILOS</button>
        <button class="back-button">Volver arriba</button>
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
            <a href="{{ url('/contactanos') }}"> Contáctanos</a>
        </div>
    </footer>
    <!-- Enlace al archivo JS -->
    <script src="{{ asset('js/stylish.js') }}"></script>
</body>
</html>
