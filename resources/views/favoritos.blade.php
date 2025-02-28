<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Favoritos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/favoritos.css') }}">
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



    
    <div class="container py-5 position-relative">
        <h2 class="text-center position-absolute start-50 translate-middle-x" style="top: 20px;">
            Mis Productos Favoritos
        </h2>
        <div class="mt-5">
            @if($favoritos->count() > 0)
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    @foreach($favoritos as $favorito)
                        <div class="card favorito-item" id="favorito-{{ $favorito->id }}" data-id="{{ $favorito->id }}" style="min-width: 250px;">
                            <img src="{{ $favorito->imagen }}" class="card-img-top" alt="{{ $favorito->nombre }}"
                                 style="height: 200px; object-fit: contain;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">{{ $favorito->nombre }}</h5>
                                <p class="card-text text-center">Precio: ${{ number_format($favorito->precio, 2) }}</p>
                                <div class="mt-auto text-center">
                                    <button class="btn btn-danger btn-eliminar" data-id="{{ $favorito->id }}">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                
                @else
                <div class="position-absolute start-50 translate-middle text-center" style="top: 150%;">
                    <p class="fw-bold fs-4">No tienes productos en tus favoritos.</p>
                </div>
            @endif
            
            
            
            
        </div>
    </div>
    

    <script>
  $(document).ready(function() {
    $(".btn-eliminar").click(function() {
        let idProducto = $(this).data("id");

        console.log("Eliminando producto con ID:", idProducto); // Verifica en la consola

        $.ajax({
            url: "/favoritos/eliminar",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                id: idProducto
            },
            success: function(response) {
                console.log("Respuesta del servidor:", response);
                $("#favorito-" + idProducto).remove();
                alert(response.mensaje);
            },
            error: function(xhr) {
                console.log("Error en la petición:", xhr.responseJSON);
                alert(xhr.responseJSON.mensaje);
            }
        });
    });
});
    </script>

<script>
    $(document).ready(function() {
        $(".btn-eliminar").click(function() {
            let nombreProducto = $(this).data("nombre");
            let card = $(this).closest(".col-md-3"); // Selecciona la tarjeta completa

            $.ajax({
                url: "/favoritos/eliminar",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    nombre: nombreProducto
                },
                success: function(response) {
                    card.fadeOut(500, function() { 
                        $(this).remove(); // Elimina la tarjeta de la vista
                    });
                },
                error: function(xhr) {
                    alert(xhr.responseJSON.mensaje);
                }
            });
        });
    });
</script>

</body>
</html>
