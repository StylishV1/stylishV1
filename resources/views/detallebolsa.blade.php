<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish</title>
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
                    <li><a href="{{ url('/hombre') }}">Hombre</a></li> <!-- Enlace a la sección de Hombre -->
                    <li><a href="{{ url('/mujer') }}">Mujer</a></li> <!-- Enlace a la sección de MUJER -->
                    <li><a href="{{ url('/ofertas') }}">Ofertas</a></li> <!-- Enlace a la sección de Ofertas -->
                    <li><a href="{{ url('/tendencias') }}">Tendencias</a></li> <!-- Enlace a la sección de Tendencias -->
                </ul>
            </nav>

            <!-- Lista de iconos a la izquierda -->
            <ul class="left-icons">
                <li><a href="{{ url('/buscar') }}" id="search-toggle"><i class="fas fa-search"></i> Buscar</a></li> <!-- Icono de búsqueda -->
                <li><a href="{{ url('/perfil') }}" id="profile-link"><i class="fas fa-user"></i> Perfil</a></li> <!-- Icono de perfil -->
                <li><a href="{{ url('/favoritos') }}"><i class="fas fa-heart"></i> Favoritos</a></li> <!-- Icono de favoritos -->
                <li><a href="{{ url('/carrito') }}"><i class="fas fa-shopping-cart"></i> Carrito</a></li> <!-- Icono de carrito de compras -->
            </ul>
            
        </div>
    </header>
 
</form>




<div class="container1">
    <h1 class="titulobolsa">Mi bolsa de comprass</h1>
    <p class="summary1">Tienes un total de 3 productos en tu bolsa</p>

    <div class="content1">
      <div class="productsbolsa">
        <h2>Productos</h2>
        
        <div class="productbolsa">
        <img src="{{ asset('img/24.jpg') }}" alt="Vestido fresco">
          <div class="details">
            <h3>Vestido fresco</h3>
            <p>Talla: M</p>
            <p>Color: blanco</p>
            <p>Cantidad: 1</p>
          </div>
          <div class="price">$80.000</div>
          <button class="remove">×</button>
        </div>

        <div class="productbolsa">
        <img src="{{ asset('img/24.jpg') }}" alt="Conjunto de verano">
          <div class="details">
            <h3>Conjunto de verano</h3>
            <p>Talla: M</p>
            <p>Color: rosado</p>
            <p>Cantidad: 1</p>
          </div>
          <div class="price">$130.000</div>
          <button class="remove">×</button>
        </div>

        <div class="productbolsa">
        <img src="{{ asset('img/24.jpg') }}" alt="Camisa casual">
          <div class="details">
            <h3>Camisa casual</h3>
            <p>Talla: M</p>
            <p>Color: marfil</p>
            <p>Cantidad: 1</p>
          </div>
          <div class="price">$90.000</div>
          <button class="remove">×</button>
        </div>
      </div>

      <div class="summary-section1">
        <p>Sub total <span>$300.000</span></p> <br>
        <p>Tipo de pago <span>Tarjeta de crédito</span></p>
        <p>Envío <span>$80.000</span></p>
        <hr>
        <p class="total">Total <span>$380.000</span></p>
        <button class="continue">Continuar</button>
      </div>
    </div>
  </div>
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
            <a href="#">Nosotros</a>
            <a href="#">Ayuda</a>
            <a href="#">Términos y Condiciones</a>
            <a href="#">Contáctanos</a>
        </div>
    </footer>
    </body>
</html>