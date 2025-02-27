<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camisas para Hombre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/hombre2.css') }}">
    

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
                    <li><a href="{{ url('/hombre') }}">Hombre</a></li> <!-- Enlace a la sección de Hombre -->
                    <li><a href="{{ url('/mujer') }}">Mujer</a></li> <!-- Enlace a la sección de MUJER -->
                    <li><a href="{{ url('/ofertas') }}">Ofertas</a></li> <!-- Enlace a la sección de Ofertas -->
                    <li><a href="{{ url('/tendencias') }}">Tendencias</a></li> <!-- Enlace a la sección de Tendencias -->
                </ul>
            </nav>

            <!-- Lista de iconos a la izquierda -->
            <ul class="left-icons">
                
                
                <li><a href="{{ url('/buscar') }}" id="search-toggle"><i class="fas fa-search"></i> Buscar</a></li>
                
                <li><a href="{{ route('perfil') }}" id="profile-link"><i class="fas fa-user"></i> Perfil</a></li>
                
                


                <li><a href="{{ url('/favoritos') }}"><i class="fas fa-heart"></i> Favoritos</a></li> <!-- Icono de favoritos -->
                <li><a href="{{ url('/bolsas') }}"><i class="fas fa-shopping-cart"></i> Carrito</a></li> <!-- Icono de carrito de compras -->
            </ul>
        </div>
    </header>
<!-- Verificar si el usuario está autenticado -->
@if(Auth::check())
    <!-- Si el usuario está autenticado, mostrar el mensaje de bienvenida y el formulario de cierre de sesión -->
    <div style="position: absolute; top: 20px; right: 10px;">
        
        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
        </form>
    </div>
@else



    <!-- Si el usuario no está autenticado, mostrar los formularios de login y registro -->

    <!-- Formulario de Inicio de Sesión -->
    <div id="login-form" class="login-form">
        <div class="login-content">
            <h2>Iniciar sesión</h2>
            <!-- Mostrar mensajes de error en el formulario de login -->
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
            <!-- Mostrar mensajes de error en el formulario de registro -->
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
@endif

<!-- Mostrar mensaje de éxito después del registro -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
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
        <h4 class="descuento">Camisas<br>¡20% de Descuento!</h4>
            <div class="row">
                <!-- Products Row 1 -->
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                            <img src="{{ asset('img/b.jpg') }}" alt="Camisa Lino manga larga">
                        </a>
                        <p>Camisa Lino manga larga</p>
                        <p class="price"><s>COL $82,500</s></p>
                        <p class="precio-descuento">COL $161,500</p>
                        <button class="boton-carrito">Agregar al carrito</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                            <img src="{{ asset('img/24.jpg') }}" alt="Camisa  manga larga">
                        </a>
                        <p>Camisa Negra manga larga</p>
                        <p class="price"><s>COL $82,500</s></p>
                        <p class="precio-descuento">COL $161,500</p>
                        <button class="boton-carrito">Agregar al carrito</button>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/24.jpg') }}" alt="Camisa Azul manga larga">
                        </a>
                        <p>Camisa Azul manga larga</p>
                        <p class="price"><s>COL $82,500</s></p>
                        <p class="precio-descuento">COL $161,500</p>
                        <button class="boton-carrito">Agregar al carrito</button>
                        
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/24.jpg') }}" alt="Camisa Lino manga larga">
                        </a>
                        <p>Camisa Lino manga larga</p>
                        <p class="price"><s>COL $82,500</s></p>
                        <p class="precio-descuento">COL $161,500</p>
                        <button class="boton-carrito">Agregar al carrito</button>

                      
                    </div>
                </div>
            </div>
        </div>

        <div class="category mb-5">
        <h4 class="descuento">Pantalones<br>¡20% de Descuento!</h4>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/Danil4.jpg') }}" alt="Camisa Lino manga corta">
                        </a>
                        <p>Camisa Lino manga corta</p>
                        <p class="price"><s>COL $82,500</s></p>
                        <p class="precio-descuento">COL $161,500</p>
                        <button class="boton-carrito">Agregar al carrito</button>
                       
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/Danil4.jpg') }}" alt="Camisa Rosa manga corta">
                        </a>
                        <p>Camisa Rosa manga corta</p>
                        <p class="price"><s>COL $82,500</s></p>
                        <p class="precio-descuento">COL $161,500</p>
                        <button class="boton-carrito">Agregar al carrito</button>
                      
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/Danil4.jpg') }}" alt="Camisa Cuadros manga corta">
                        </a>
                        <p>Camisa Cuadros manga corta</p>
                        <p class="price"><s>COL $82,500</s></p>
                        <p class="precio-descuento">COL $161,500</p>
                        <button class="boton-carrito">Agregar al carrito</button>
                       
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/Danil4.jpg') }}" alt="Camisa Rosa manga corta">
                        </a>
                        <p>Camisa Rosa manga corta</p>
                        <p class="price"><s>COL $82,500</s></p>
                        <p class="precio-descuento">COL $161,500</p>
                        <button class="boton-carrito">Agregar al carrito</button>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="category mb-5">
        <h4 class="descuento">Polos<br>¡20% de Descuento!</h4>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/Daniel3.jpg') }}" alt="Polo Premium Slim Fit">
                        </a>
                        <p>Polo Premium Slim Fit</p>
                        <p class="price"><s>COL $82,500</s></p>
                        <p class="precio-descuento">COL $161,500</p>
                        <button class="boton-carrito">Agregar al carrito</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/Daniel3.jpg') }}" alt="Polo Moda Slim Fit">
                        </a>
                        <p>Polo Moda Slim Fit</p>
                        <p class="price"><s>COL $82,500</s></p>
                        <p class="precio-descuento">COL $161,500</p>
                        <button class="boton-carrito">Agregar al carrito</button>  
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/Daniel3.jpg') }}" alt="Polo Business Tejida">
                        </a>
                        <p>Polo Business Tejida</p>
                        <p class="price"><s>COL $82,500</s></p>
                        <p class="precio-descuento">COL $161,500</p>
                        <button class="boton-carrito">Agregar al carrito</button>   

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <a href="{{ url('/carrito') }}">
                        <img src="{{ asset('img/Daniel3.jpg') }}" alt="Camisa Rosa manga corta">
                        </a>
                        <p>Camisa Rosas manga corta</p>
                        <p class="price"><s>COL $82,500</s></p>
                        <p class="precio-descuento">COL $161,500</p>
                        <button class="boton-carrito">Agregar al carrito</button>                
                        
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
