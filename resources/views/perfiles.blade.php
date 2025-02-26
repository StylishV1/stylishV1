
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/perfi.CSS') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
</head>
<body>
    <header>
        <div class="promo-bar">
            Solo por hoy 20% de descuento en camisas y blusas
        </div>
        <div class="container">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('img/Logo.jpg') }}" alt="Stylish" style="height: 40px;">
            </a>
            <nav class="centered-menu">
                <ul class="top-menu">
                    <li><a href="#">Hombre</a></li>
                    <li><a href="#">Mujer</a></li>
                    <li><a href="{{ url('/ofertas') }}">Ofertas</a></li>
                    <li><a href="#">Tendencias</a></li>
                </ul>
            </nav>
            <ul class="left-icons">
                <li><a href="#" id="search-toggle"><i class="fas fa-search"></i> Buscar</a></li>
                <li><a href="{{ route('perfil') }}" id="profile-link"><i class="fas fa-user"></i> Perfil</a></li>
                <li><a href="#"><i class="fas fa-heart"></i> Favoritos</a></li>
                <li><a href="#"><i class="fas fa-shopping-cart"></i> Carrito</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div  class="contact1-title">
            <h1>PERFIL</h1> <!-- Titulo del Formulario-->
         </div>
        <!-- Sección de Perfil -->
        <section class="profile">

            

            @if(auth()->check())
    <h1>Bienvenido. {{ auth()->user()->name }}</h1>
    @else
    <h1>No has iniciado sesión</h1>
    @endif

            <!-- Mostrar mensaje de éxito -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="profile-info">
                <div class="avatar">
                    <i class="bi bi-person"></i>
                    <p>{{ $user->name }}</p>
                </div>
                <div class="user-details">
                    <form action="{{ route('perfil.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                    
                        <label for="name">Nombre:</label> <br>
                        <input type="text" name="name" value="{{ $user->name }}" placeholder="Nombre"><br>
                    
                        <label for="email">Correo:</label>
                        <input type="email" name="email" value="{{ $user->email }}" placeholder="Correo electrónico">
                    
                        <label for="password">Nueva Contraseña (opcional):</label>
                        <input type="password" name="password" placeholder="Nueva contraseña">
                    
                        <label for="password_confirmation">Confirmar Contraseña:</label>
                        <input type="password" name="password_confirmation" placeholder="Confirmar contraseña">
                    
                        <button type="submit" class="edit-btn">Guardar Cambios</button>
                    </form>
                    
            </div>
        </section>
    </main>

   
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


  
</body>
</html>
    
   
       



