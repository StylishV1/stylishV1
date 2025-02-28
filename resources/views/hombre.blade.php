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
        <h4 class="descuento">Camisas<br></h4>
            <div class="row">
                <!-- Products Row 1 -->
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                            <img src="{{ asset('img/24.jpg') }}" alt="Camisa Lino manga larga">
                        </a>
                        <p>Camisa Lino manga larga</p>
                        <p class="precio-descuento">COL $161,500</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                            <img src="{{ asset('img/24.jpg') }}" alt="Camisa  manga larga">
                        </a>
                        <p>Camisa Negra manga larga</p>
                        <p class="precio-descuento">COL $161,500</p>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/24.jpg') }}" alt="Camisa Azul manga larga">
                        </a>
                        <p>Camisa Azul manga larga</p>
                        <p class="precio-descuento">COL $161,500</p>
                        
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/24.jpg') }}" alt="Camisa Lino manga larga">
                        </a>
                        <p>Camisa Lino manga larga</p>
                        <p class="precio-descuento">COL $161,500</p>
                      
                    </div>
                </div>
            </div>
        </div>

        <div class="category mb-5">
        <h4 class="descuento">Pantalones<br></h4>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/Danil4.jpg') }}" alt="Camisa Lino manga corta">
                        </a>
                        <p>Camisa Lino manga corta</p>
                        <p class="precio-descuento">COL $161,500</p>
                       
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/Danil4.jpg') }}" alt="Camisa Rosa manga corta">
                        </a>
                        <p>Camisa Rosa manga corta</p>
                        <p class="precio-descuento">COL $161,500</p>
                      
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/Danil4.jpg') }}" alt="Camisa Cuadros manga corta">
                        </a>
                        <p>Camisa Cuadros manga corta</p>
                        <p class="precio-descuento">COL $161,500</p>                       
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/Danil4.jpg') }}" alt="Camisa Rosa manga corta">
                        </a>
                        <p>Camisa Rosa manga corta</p>
                        <p class="precio-descuento">COL $161,500</p>                       
                    </div>
                </div>
            </div>
        </div>

        <div class="category mb-5">
        <h4 class="descuento">Polos<br></h4>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/Daniel3.jpg') }}" alt="Polo Premium Slim Fit">
                        </a>
                        <p>Polo Premium Slim Fit</p>
                        <p class="precio-descuento">COL $161,500</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/Daniel3.jpg') }}" alt="Polo Moda Slim Fit">
                        </a>
                        <p>Polo Moda Slim Fit</p>
                        <p class="precio-descuento">COL $161,500</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/Daniel3.jpg') }}" alt="Polo Business Tejida">
                        </a>
                        <p>Polo Business Tejida</p>
                        <p class="precio-descuento">COL $161,500</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/Daniel3.jpg') }}" alt="Camisa Rosa manga corta">
                        </a>
                        <p>Camisa Rosas manga corta</p>
                        <p class="precio-descuento">COL $161,500</p>                        
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <button class="btn custom-btn">Ver más</button>
            </div>
        </div>
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
