<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/carrito.css') }}">
</head>
<body>

@if(session('success'))
    <div id="alertSuccess" class="alert-success show">
        {{ session('success') }}
    </div>
@endif

<header>
    <!-- Barra de promoción -->
    <div class="promo-bar">
        Solo por hoy 20% de descuento en camisas y blusas
    </div>
    <div class="container">
        <a href="{{ url('/') }}" class="logo" id="logo">
            <img src="{{ asset('img/Logo.jpg') }}" alt="Stylish" style="height: 40px;">
        </a>
        <nav class="centered-menu">
                <ul class="top-menu"> <!-- Lista de elementos del menú superior -->
                    <li><a href="{{ url('/hombre') }}">Hombre</a></li> <!-- Enlace a la sección de Hombre -->
                    <li><a href="{{ url('/mujer') }}">Mujer</a></li> <!-- Enlace a la sección de MUJER -->
                    <li><a href="{{ url('/ofertas') }}">Ofertas</a></li> <!-- Enlace a la sección de Ofertas -->
                    <li><a href="{{ url('/tendencias') }}">Tendencias</a></li> <!-- Enlace a la sección de Tendencias -->
                </ul>
            </nav>
        <ul class="left-icons">
            <li><a href="{{ url('/buscar') }}" id="search-toggle"><i class="fas fa-search"></i> Buscar</a></li>
            <li><a href="{{ url('/perfil') }}" id="profile-link"><i class="fas fa-user"></i> Perfil</a></li>
            <li><a href="{{ url('/favoritos') }}"><i class="fas fa-heart"></i> Favoritos</a></li>
            <li><a href="{{ url('/carrito') }}"><i class="fas fa-shopping-cart"></i> Carrito</a></li>
        </ul>
    </div>
</header>

<div class="product-detail-container">
    <div class="product-image">
        <img id="main-image" src="img/24.jpg" alt="Camisa casual">
        <div class="image-thumbnails">
            <img class="thumbnail" src="img/24.jpg" alt="Imagen 1">
            <img class="thumbnail" src="img/24.jpg" alt="Imagen 2">
            <img class="thumbnail" src="img/23.jpg" alt="Imagen 3">
        </div>
    </div>

    <div class="product-info">
        <h2>Camiseta casual</h2>
        <p class="price">$70.000</p>
        
        <!-- Formulario para agregar al carrito -->
        <form action="{{ route('add.to.cart') }}" method="POST">
            @csrf
            <div class="product-options">
                <div class="size">
                    <label for="size">Talla</label>
                    <select name="talla" id="size">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                </div>

                <div class="color">
                    <label>Color</label>
                    <select name="color" id="color">
                        <option value="Verde">Verde</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Gris">Gris</option>
                        <option value="Gris Claro">Gris Claro</option>
                    </select>
                </div>

                <div class="quantity">
                    <label>Cantidad</label>
                    <button type="button" class="quantity-btn" id="decrease">-</button>
                    <span id="quantity">1</span>
                    <button type="button" class="quantity-btn" id="increase">+</button>
                    <input type="hidden" name="cantidad" id="quantityInput" value="1">
                </div>
            </div>
            <input type="hidden" name="precio" value="70000"> <!-- Precio de la camiseta -->
            <input type="hidden" name="imagen" value="img/24.jpg"> <!-- Aquí puedes colocar la URL de la imagen que desees -->
            <button type="submit" class="add-to-cart-btn">Añadir al carrito</button>
        </form>
    </div>
</div>

<!-- Pestañas de contenido -->
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

<!-- Footer -->
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
        <a href="#">Contáctanos</a>
    </div>
</footer>

<script>
    // Aumentar y disminuir la cantidad
    document.getElementById('increase').addEventListener('click', function() {
    let quantity = parseInt(document.getElementById('quantity').innerText);
    document.getElementById('quantity').innerText = quantity + 1;
    document.getElementById('quantityInput').value = quantity + 1;
    console.log(document.getElementById('quantityInput').value); // Verifica el valor
});

document.getElementById('decrease').addEventListener('click', function() {
    let quantity = parseInt(document.getElementById('quantity').innerText);
    if (quantity > 1) {
        document.getElementById('quantity').innerText = quantity - 1;
        document.getElementById('quantityInput').value = quantity - 1;
        console.log(document.getElementById('quantityInput').value); // Verifica el valor
    }
});


    // Pestañas de contenido
    document.addEventListener("DOMContentLoaded", function () {
        const buttons = document.querySelectorAll(".tab-btn");
        const contents = document.querySelectorAll(".tab-content");

        buttons.forEach(button => {
            button.addEventListener("click", () => {
                contents.forEach(content => content.style.display = "none");
                buttons.forEach(btn => btn.classList.remove("active"));
                const tabId = button.getAttribute("data-tab");
                document.getElementById(tabId).style.display = "block";
                button.classList.add("active");
            });
        });

        document.getElementById("descripcion").style.display = "block";
        buttons[0].classList.add("active");
    });
</script>

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
    window.addEventListener('DOMContentLoaded', function () {
        // Verificamos si hay una alerta de éxito
        const alertSuccess = document.getElementById('alertSuccess');
        
        if (alertSuccess) {
            // Mostrar el mensaje con animación
            setTimeout(() => {
                alertSuccess.classList.add('show');
            }, 10); // Pequeña demora para que la transición de opacidad funcione

            // Hacer que desaparezca después de 3 segundos
            setTimeout(() => {
                alertSuccess.classList.remove('show'); // Remueve la clase 'show'
                // Después de la animación de desaparición (500ms), eliminamos el elemento del DOM
                setTimeout(() => {
                    alertSuccess.remove(); // Elimina el elemento del DOM
                }, 500); // Tiempo de animación
            }, 3000); // 3 segundos
        }
    });
</script>
</body>
</html>
