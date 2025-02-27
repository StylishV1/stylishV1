<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesorios en oferta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/accesorios.css') }}">
    

</head>
<body>
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
                
                @if(Auth::check())
    <li><a href="{{ url('/perfil') }}"><i class="fas fa-user"></i> Perfil</a></li>
@else
    <li><a href="#" id="profile-link"><i class="fas fa-user"></i> Perfil</a></li>
@endif
                


                <li><a href="{{ url('/favoritos') }}"><i class="fas fa-heart"></i> Favoritos</a></li> <!-- Icono de favoritos -->
                <li><a href="{{ url('/bolsas') }}"><i class="fas fa-shopping-cart"></i> Carrito</a></li> <!-- Icono de carrito de compras -->
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
        
        <h2 class="text-center mb-5 titulol">ACCESORIOS</h2>
       

<!-- Categorías -->
<div class="category mb-5">
    <h4 class="descuento">Relojería<br> ¡14% de Descuento!</h4>
    <div class="row">
        <!-- Producto 1 -->
        <div class="col-md-3">
            <div class="product-card position-relative">
                <span class="favorites">&#9829;</span>
                <a href="{{ url('/carrito') }}">
                    <img src="{{ asset('img/rr.jpg') }}" alt="Reloj de Diamante">
                </a>
                <p>Reloj de Diamante</p>
                <p class="price"><s>COL $250,000</s></p>
                <p class="precio-descuento">COL $215,000</p> <!-- Precio con descuento aplicado -->
            </div>
        </div>
        <!-- Producto 2 -->
        <div class="col-md-3">
            <div class="product-card position-relative">
                <span class="favorites">&#9829;</span>
                <a href="{{ url('/carrito') }}">
                    <img src="{{ asset('img/rr.jpg') }}" alt="Reloj de Cuarzo">
                </a>
                <p>Reloj de Cuarzo</p>
                <p class="price"><s>COL $300,000</s></p>
                <p class="precio-descuento">COL $258,000</p>
            </div>
        </div>
        <!-- Producto 3 -->
        <div class="col-md-3">
            <div class="product-card position-relative">
                <span class="favorites">&#9829;</span>
                <a href="{{ url('/carrito') }}">
                    <img src="{{ asset('img/rr.jpg') }}" alt="Reloj Rolex">
                </a>
                <p>Reloj Rolex</p>
                <p class="price"><s>COL $202,000</s></p>
                <p class="precio-descuento">COL $173,720</p>
            </div>
        </div>
        <!-- Producto 4 -->
        <div class="col-md-3">
            <div class="product-card position-relative">
                <span class="favorites">&#9829;</span>
                <a href="{{ url('/carrito') }}">
                    <img src="{{ asset('img/rr.jpg') }}" alt="Reloj de Oro 24k">
                </a>
                <p>Reloj de Oro 24k</p>
                <p class="price"><s>COL $250,000</s></p>
                <p class="precio-descuento">COL $215,000</p>
            </div>
        </div>
    </div>
</div>

<!-- Categoría: Cadenas -->
<div class="category mb-5">
    <h4 class="descuento">Cadenas<br>¡10% de Descuento!</h4>
    <div class="row">
        <!-- Producto 1 -->
        <div class="col-md-3">
            <div class="product-card position-relative">
                <span class="favorites">&#9829;</span>
                <a href="{{ url('/carrito') }}">
                    <img src="{{ asset('img/cade1.jpg') }}" alt="Cadena de Diamantes">
                </a>
                <p>Cadena de Diamantes</p>
                <p class="price"><s>COL $144,800</s></p>
                <p class="precio-descuento">COL $130,320</p> <!-- Precio con descuento aplicado -->
            </div>
        </div>
        <!-- Producto 2 -->
        <div class="col-md-3">
            <div class="product-card position-relative">
                <span class="favorites">&#9829;</span>
                <a href="{{ url('/carrito') }}">
                    <img src="{{ asset('img/cade1.jpg') }}" alt="Cadena de Oro">
                </a>
                <p>Cadena de Oro</p>
                <p class="price"><s>COL $190,000</s></p>
                <p class="precio-descuento">COL $171,000</p>
            </div>
        </div>
        <!-- Producto 3 -->
        <div class="col-md-3">
            <div class="product-card position-relative">
                <span class="favorites">&#9829;</span>
                <a href="{{ url('/carrito') }}">
                    <img src="{{ asset('img/cade1.jpg') }}" alt="Cadena de Plata">
                </a>
                <p>Cadena de Plata</p>
                <p class="price"><s>COL $160,000</s></p>
                <p class="precio-descuento">COL $144,000</p>
            </div>
        </div>
        <!-- Producto 4 -->
        <div class="col-md-3">
            <div class="product-card position-relative">
                <span class="favorites">&#9829;</span>
                <a href="{{ url('/carrito') }}">
                    <img src="{{ asset('img/cade1.jpg') }}" alt="Cadena de Cobre">
                </a>
                <p>Cadena de Cobre</p>
                <p class="price"><s>COL $190,000</s></p>
                <p class="precio-descuento">COL $171,000</p>
            </div>
        </div>
    </div>
</div>

<!-- Categoría: Gafas -->
<div class="category mb-5">
    <h4 class="descuento">Gafas<br>¡20% de Descuento!</h4>
    <div class="row">
        <!-- Producto 1 -->
        <div class="col-md-3">
            <div class="product-card position-relative">
                <span class="favorites">&#9829;</span>
                <a href="{{ url('/carrito') }}">
                    <img src="{{ asset('img/gafa.jpg') }}" alt="Gafas de Sol">
                </a>
                <p>Gafas de Sol</p>
                <p class="price"><s>COL $90,000</s></p>
                <p class="precio-descuento">COL $72,000</p>
            </div>
        </div>
        <!-- Producto 2 -->
        <div class="col-md-3">
            <div class="product-card position-relative">
                <span class="favorites">&#9829;</span>
                <a href="{{ url('/carrito') }}">
                    <img src="{{ asset('img/gafa.jpg') }}" alt="Gafas de Lujo">
                </a>
                <p>Gafas de Lujo</p>
                <p class="price"><s>COL $82,500</s></p>
                <p class="precio-descuento">COL $66,000</p>
            </div>
        </div>
        <!-- Producto 3 -->
        <div class="col-md-3">
            <div class="product-card position-relative">
                <span class="favorites">&#9829;</span>
                <a href="{{ url('/carrito') }}">
                    <img src="{{ asset('img/gafa.jpg') }}" alt="Gafas Rojas">
                </a>
                <p>Gafas Rojas</p>
                <p class="price"><s>COL $89,910</s></p>
                <p class="precio-descuento">COL $71,928</p>
            </div>
        </div>
        <!-- Producto 4 -->
        <div class="col-md-3">
            <div class="product-card position-relative">
                <span class="favorites">&#9829;</span>
                <a href="{{ url('/carrito') }}">
                    <img src="{{ asset('img/gafa.jpg') }}" alt="Gafas de Marca">
                </a>
                <p>Gafas Blancas</p>
                <p class="price"><s>COL $190,000</s></p>
                <p class="precio-descuento">COL $161,500</p>
            </div>
        </div>
    </div>
    <div class="text-center mt-3">
        <button class="btn custom-btn">Ver más</button>
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
