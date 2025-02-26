
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bb.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Token CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <!-- Barra superior con descuento -->                                <!--  // Mi bolsa de compras es el controlador de bolsa de compra y estsa es mi vista de bolsa-->      
    <header>
        <div class="promo-bar">
            Solo por hoy 20% de descuento en camisas y blusas
        </div>
        <div class="container">
            <a href="{{ url('/') }}" class="logo" id="logo">
                <img src="{{ asset('img/Logo.jpg') }}" alt="Stylish" style="height: 40px;">
            </a>
            <nav class="centered-menu">
                <ul class="top-menu">
                    <li><a href="#">Hombre</a></li>
                    <li><a href="#">Mujer</a></li>
                    <li><a href="{{ url('/ofertas') }}">Ofertas</a></li>
                    <li><a href="{{ url('/tendencias') }}">Tendencias</a></li>
                </ul>
            </nav>
            <ul class="left-icons">
                <li><a href="{{ url('/buscar') }}" id="search-toggle"><i class="fas fa-search"></i> Buscar</a></li>
                <li><a href="{{ url('/perfiles') }}" id="profile-link"><i class="fas fa-user"></i> Perfil</a></li>
                <li><a href="{{ url('/favoritos') }}"><i class="fas fa-heart"></i> Favoritos</a></li>
                <li><a href="{{ url('/carrito') }}"><i class="fas fa-shopping-cart"></i> Carrito</a></li>
            </ul>
        </div>
    </header>

    <!-- Bolsa de Compras -->
    <div class="container1">
        <h1 class="titulobolsa">Mi bolsa de compras</h1>
        <p class="summary1">Tienes un total de {{ $bolsas->count() }} productos en tu bolsa</p>

        <div class="content1">
            <div class="productsbolsa">
                <h2>Productos</h2>

                @foreach ($bolsas as $bolsa)
                <div class="productbolsa" data-id="{{ $bolsa->id }}">
                    <img src="{{ $bolsa->imagen }}" alt="{{ $bolsa->nombre }}">
                    <div class="details">
                        <h3>{{ $bolsa->nombre }}</h3>
                        <p>Talla: {{ $bolsa->talla }}</p>
                        <p>Color: {{ $bolsa->color }}</p>
                        <p>Cantidad: {{ $bolsa->cantidad }}</p>
                    </div>
                    <div class="price">${{ number_format($bolsa->precio, 0, ',', '.') }}</div>
                    <!-- Botón para eliminar el producto -->
                    <button type="button" class="remove">×</button>
                </div>
                @endforeach
            </div>

            <div class="summary-section1">
                <p>Sub total <span>${{ number_format($subtotal, 0, ',', '.') }}</span></p>
                <!-- Tipo de pago -->
                <p>Tipo de pago 
                    <span id="payment-type">Tarjeta de crédito</span>
                    <select id="payment-method" style="display:none;">
                        <option value="credito">Tarjeta Crédito</option>
                        <option value="debito">Tarjeta Débito</option>
                        <option value="paypal">PSE NEQUI</option>
                    </select>
                </p>
                <p>Envío <span>${{ number_format($envio, 0, ',', '.') }}</span></p>
                <hr>
                <p class="total">Total <span>${{ number_format($subtotal + $envio, 0, ',', '.') }}</span></p>
                <button class="continue">Continuar</button>
            </div>
            
            <script>
                // Lógica para mostrar el select de métodos de pago al elegir "Tarjeta de crédito"
                document.addEventListener('DOMContentLoaded', function() {
                    const paymentTypeSpan = document.getElementById('payment-type');
                    const paymentMethodSelect = document.getElementById('payment-method');
            
                    // Cambiar el tipo de pago a "Tarjeta de crédito" por defecto
                    paymentTypeSpan.textContent = 'Tarjeta de crédito';
            
                    // Aquí podrías agregar la lógica para cambiar el tipo de pago y mostrar el select
                    // Si seleccionas "Tarjeta de crédito"
                    paymentTypeSpan.addEventListener('click', function() {
                        if (paymentMethodSelect.style.display === 'none') {
                            paymentMethodSelect.style.display = 'inline'; // Mostrar el select
                            paymentTypeSpan.style.display = 'none'; // Ocultar el texto de "Tarjeta de crédito"
                        }
                    });
                });
            </script>
            
        </div>
    </div>

   
   

    <script>
      document.addEventListener('click', function (event) {
    if (event.target.classList.contains('remove')) {
        const productDiv = event.target.closest('.productbolsa');
        const productId = productDiv.getAttribute('data-id');
        const button = event.target; // Captura el botón presionado

        if (confirm('¿Estás seguro de que deseas eliminar este producto?')) {
            // Deshabilitar el botón mientras se procesa la solicitud
            button.disabled = true;

            // Hacer la solicitud DELETE
            fetch(`/bolsa/${productId}`, {
                method: 'DELETE', // Método DELETE
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json',
                },
            })
            .then(response => {
                console.log('Respuesta:', response);
                if (!response.ok) {
                    throw new Error(`Error en la respuesta: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    productDiv.remove(); // Eliminar el producto de la vista
                    alert(data.message); // Mostrar mensaje del servidor
                } else {
                    alert(`Error del servidor: ${data.message}`);
                }
            })
            .catch(error => {
                console.error('Error en fetch:', error);
                alert('Hubo un problema al procesar la solicitud. Detalle: ' + error.message);
            })
            .finally(() => {
                button.disabled = false; // Reactivar el botón
            });
        }
    }
});

    </script>
    <script>
        // Lógica para mostrar el select de métodos de pago al elegir "Tarjeta de crédito"
        document.addEventListener('DOMContentLoaded', function() {
            const paymentTypeSpan = document.getElementById('payment-type');
            const paymentMethodSelect = document.getElementById('payment-method');
    
            // Cambiar el tipo de pago a "Tarjeta de crédito" por defecto
            paymentTypeSpan.textContent = 'Tarjeta de crédito';
    
            // Aquí podrías agregar la lógica para cambiar el tipo de pago y mostrar el select
            // Si seleccionas "Tarjeta de crédito"
            paymentTypeSpan.addEventListener('click', function() {
                if (paymentMethodSelect.style.display === 'none') {
                    paymentMethodSelect.style.display = 'inline'; // Mostrar el select
                    paymentTypeSpan.style.display = 'none'; // Ocultar el texto de "Tarjeta de crédito"
                }
            });
        });
    </script>
</body>
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
        <a href="#">Nosotros</a>
        <a href="#">Ayuda</a>
        <a href="#">Términos y Condiciones</a>
        <a href="#">Contáctanos</a>
    </div>
</footer>
</html>
