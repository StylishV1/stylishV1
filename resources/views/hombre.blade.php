<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camisas para Hombre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/hombre.css') }}">
    

</head>
<body>
    <header> <!-- Sección del encabezado de la página -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
                    
                    <li><a href="{{ url('/mujer') }}">Mujer</a></li> <!-- Enlace a la sección de Mujer -->
                    <li><a href="{{ url('/ofertas') }}">Ofertas</a></li> <!-- Enlace a la sección de Ofertas -->
                    <li><a href="{{ url('/tendencias') }}">Tendencias</a></li> <!-- Enlace a la sección de Tendencias -->
                </ul>
            </nav>

            <!-- Lista de iconos a la izquierda -->
            <ul class="left-icons">
                
                <li><a href="{{ url('/perfiles') }}" id="profile-link"><i class="fas fa-user"></i> Perfil</a></li> <!-- Icono de perfil -->
                <li><a href="{{ url('/favoritos') }}"><i class="fas fa-heart"></i> Favoritos</a></li> <!-- Icono de favoritos -->
                <li><a href="{{ url('/carrito') }}"><i class="fas fa-shopping-cart"></i> Carrito</a></li> <!-- Icono de carrito de compras -->
            </ul>
        </div>
    </header>


    <div class="container1 py-4">
        <!-- Search Bar   <div class="mb-2">
            <input type="text" class="form-control" placeholder="Buscar...">
        </div> -->
        
        <div class="search-bar">
            <form action="{{ url('/buscar') }}" method="GET"> <!-- Ajusta la acción según tu ruta -->
                <input type="text" name="query" placeholder="Buscar..." class="form-control" style="width: 95%; display: inline-block;">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-search lupa1"></i> <!-- Ícono de lupa -->
                </button>
            </form>
        </div> <br><br>
        
        <h2 class="text-center mb-5 titulol">HOMBRE</h2>
       

        <!-- Categories -->
        <div class="category mb-5">
            <h4>CAMISAS ELEGANTE</h4>
            <div class="row">
                <!-- Products Row 1 -->
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                            <img src="{{ asset('img/lino.jpg') }}" alt="Camisa Lino manga larga"style="width: 100%; height: auto; max-width: 200px;">
                        </a>
                        <p>Camisa Lino manga larga</p>
                        <p class="price">COL $250,000</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                            <img src="{{ asset('img/hhh.jpg') }}" alt="Camisa  manga larga">
                        </a>
                        <p>Camisa Negra manga larga</p>
                        <p class="price">COL $300,000</p>                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/luis v.jpg') }}" alt="Camisa Azul manga larga">
                        </a>
                        <p>Camisa Azul manga larga</p>
                        <p class="price">COL $202,000</p>                        
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/lino-mangalarga.jpg') }}" alt="Camisa Lino manga larga">
                        </a>
                        <p>Camisa Lino manga larga</p>
                        <p class="price">COL $250,000</p>                      
                    </div>
                </div>
            </div>
        </div>

        <div class="category mb-5">
            <h4>PANTALON FORMAL</h4>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/pantalon hombre.jpg') }}" alt="Camisa Lino manga corta">
                        </a>
                        <p>Camisa Lino manga corta</p>
                        <p class="price">COL $144,800</p>                       
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/pantalon cafe.jpg') }}" alt="Camisa Rosa manga corta">
                        </a>
                        <p>Camisa Rosa manga corta</p>
                        <p class="price">COL $190,000</p>                      
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/pantalon campana.jpg') }}" alt="Camisa Cuadros manga corta">
                        </a>
                        <p>Camisa Cuadros manga corta</p>
                        <p class="price">COL $160,000</p>                       
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/pantalon formal.jpg') }}" alt="Camisa Rosa manga corta">
                        </a>
                        <p>Camisa Rosa manga corta</p>
                        <p class="price">COL $190,000</p>                       
                    </div>
                </div>
            </div>
        </div>

        <div class="category mb-5">
            <h4>POLOS</h4>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/polo.jpg') }}" alt="Polo Premium Slim Fit">
                        </a>
                        <p>Polo Premium Slim Fit</p>
                        <p class="price">COL $90,000</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/polo fil.jpg') }}" alt="Polo Moda Slim Fit">
                        </a>
                        <p>Polo Moda Slim Fit</p>
                        <p class="price">COL $82,500</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/polo b.jpg') }}" alt="Polo Business Tejida">
                        </a>
                        <p>Polo Business Tejida</p>
                        <p class="price">COL $89,910</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/polo corta.jpg') }}" alt="Camisa Rosa manga corta">
                        </a>
                        <p>Camisa Rosas manga corta</p>
                        <p class="price">COL $190,000</p>                        
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <button class="btn custom-btn">Ver más</button>
            </div>
        </div>
    </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        $(".favorites").click(function() {
         var producto = $(this).closest('.product-card');
         var nombreProducto = producto.find('p').first().text();  // Nombre del producto
         var precioProducto = producto.find('.price').text().replace("COL $", "").replace(",", "").trim();  // Limpiar precio
         var imagenProducto = producto.find('img').attr('src');  // URL de la imagen
     
         var isFavorite = $(this).hasClass('active'); // Verifica si ya está marcado como favorito
     
         // Cambiar el color del corazón a rojo o gris
         $(this).toggleClass('active'); // Añadir o quitar la clase 'active' al hacer clic
     
         // Si no es favorito, agregarlo
         if (!isFavorite) {
             $.ajax({
                 url: "/agregar-favorito", // Ruta del controlador
                 method: "POST",
                 data: {
                     _token: "{{ csrf_token() }}", // Token CSRF para protección
                     nombre: nombreProducto,
                     precio: precioProducto,
                     imagen: imagenProducto,
                 },
                 success: function(response) {
                     alert(response.mensaje); // Mostrar mensaje de éxito
                 },
                 error: function() {
                     alert("Hubo un error al agregar el producto a favoritos.");
                 }
             });
         } else {
             // Si es favorito, eliminarlo
             $.ajax({
                 url: "/eliminar-favorito", // Ruta para eliminar de favoritos
                 method: "POST",
                 data: {
                     _token: "{{ csrf_token() }}", // Token CSRF para protección
                     nombre: nombreProducto,  // Aquí puedes enviar solo el nombre para identificarlo
                 },
                 success: function(response) {
                     alert(response.mensaje); // Mostrar mensaje de éxito
                 },
                 error: function() {
                     alert("Hubo un error al eliminar el producto de favoritos.");
                 }
             });
         }
     });
     
     
         </script>
     
     
     
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
