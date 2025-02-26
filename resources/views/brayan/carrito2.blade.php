<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camisas para Hombre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/carrito.css') }}">
    

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
                
                <li><a href="{{ url('/perfiles') }}" id="profile-link"><i class="fas fa-user"></i> Perfil</a></li> <!-- Icono de perfil -->
                <li><a href="{{ url('/favoritos') }}"><i class="fas fa-heart"></i> Favoritos</a></li> <!-- Icono de favoritos -->
                <li><a href="{{ url('/carrito') }}"><i class="fas fa-shopping-cart"></i> Carrito</a></li> <!-- Icono de carrito de compras -->
            </ul>
        </div>
    </header>
    <div class="product-detail-container">
        <div class="product-image">
            <!-- Imagen principal con el id necesario -->
            <img id="main-image" src="img/24.jpg" alt="Camisa casual">
            <div class="image-thumbnails">
                <!-- Miniaturas -->
                <img class="thumbnail" src="img/24.jpg" alt="Imagen 1">
                <img class="thumbnail" src="img/24.jpg" alt="Imagen 2">
                <img class="thumbnail" src="img/23.jpg" alt="Imagen 3">
            </div>
        </div>
    
        <div class="product-info">
            <h2>Camiseta casual</h2>
            <p class="price">$70.000</p>
            <div class="product-options">
                <div class="size">
                    <label for="size">Talla</label>
                    <select id="size">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                </div>
    
                <div class="color">
                    <label>Color</label>
                    <span class="color-option" style="background-color: green;"></span>
                    <span class="color-option" style="background-color: white;"></span>
                    <span class="color-option" style="background-color: gray;"></span>
                    <span class="color-option" style="background-color: lightgray;"></span>
                </div>
    
                <div class="quantity">
                    <label>Cantidad</label>
                    <button class="quantity-btn" id="decrease">-</button>
                    <span id="quantity">1</span>
                    <button class="quantity-btn" id="increase">+</button>
                </div>
            </div>
            <a href="{{ url('/bolsa') }}">
            <button class="add-to-cart-btn">Añadir al carrito</button>
            </a>
        </div>
    </div>
    
    
    <!-- Agrega aquí las pestañas debajo de la imagen -->
    <div class="tabs-container">
        <div class="tabs">
            <button class="tab-btn" data-tab="descripcion">Descripción</button>
            <button class="tab-btn" data-tab="detalles">Detalles</button>
            <button class="tab-btn" data-tab="cuidados">Cuidados</button>
        </div>
    
        <div class="tab-content" id="descripcion">
            <p>Esta camiseta está diseñada para brindar comodidad y estilo casual.</p>
        </div>
        <div class="tab-content" id="detalles" style="display: none;">
            <p>Fabricada en algodón 100%. Disponible en varios colores y tallas.</p>
        </div>
        <div class="tab-content" id="cuidados" style="display: none;">
            <p>Lavar a mano o en máquina con agua fría. No usar blanqueador.</p>
        </div>
    </div>
    
    
    </div>
    <script>
        // Seleccionamos la imagen principal y las miniaturas
        const mainImage = document.getElementById("main-image");
        const thumbnails = document.querySelectorAll(".thumbnail");
    
        // Agregamos evento a cada miniatura
        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener("click", () => {
                // Cambiamos la imagen principal por la imagen de la miniatura seleccionada
                mainImage.src = thumbnail.src;
    
                // Opcional: resaltar la miniatura seleccionada
                thumbnails.forEach(thumb => thumb.style.border = "2px solid transparent"); // Quitar bordes previos
                thumbnail.style.border = "2px solid #000"; // Agregar borde a la miniatura activa
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const buttons = document.querySelectorAll(".tab-btn");
            const contents = document.querySelectorAll(".tab-content");
    
            buttons.forEach(button => {
                button.addEventListener("click", () => {
                    // Oculta todas las secciones de contenido
                    contents.forEach(content => content.style.display = "none");
                    
                    // Elimina la clase activa de todos los botones
                    buttons.forEach(btn => btn.classList.remove("active"));
    
                    // Muestra la sección correspondiente
                    const tabId = button.getAttribute("data-tab");
                    document.getElementById(tabId).style.display = "block";
    
                    // Añade la clase activa al botón clickeado
                    button.classList.add("active");
                });
            });
    
            // Muestra por defecto el primer contenido
            document.getElementById("descripcion").style.display = "block";
            buttons[0].classList.add("active");
        });
    </script>
    <script>
    document.getElementById('increase').addEventListener('click', function() {
    let quantity = parseInt(document.getElementById('quantity').innerText);
    document.getElementById('quantity').innerText = quantity + 1;
});

document.getElementById('decrease').addEventListener('click', function() {
    let quantity = parseInt(document.getElementById('quantity').innerText);
    if (quantity > 1) {
        document.getElementById('quantity').innerText = quantity - 1;
    }
});
</script>




    