<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/buscar.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

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
                
                <li><a href="{{ url('/perfil') }}" id="profile-link"><i class="fas fa-user"></i> Perfil</a></li> <!-- Icono de perfil -->
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
        
        <h2 class="text-center mb-5 titulol">CAMISAS PARA HOMBRE</h2>
       

        <!-- Categories -->
        <div class="category mb-5">
            <h4>CAMISAS MANGA LARGA</h4>
            <div class="row">
                <!-- Products Row 1 -->
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <img src="{{ asset('img/24.jpg') }}" alt="Camisa Lino manga larga">
                        <p>Camisa Lino manga larga</p>
                        <p class="price">COL $250,000</p>
                        <div class="sizes">
                            <span class="badge bg-secondary" onclick="toggleSize(this)">S</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">M</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">L</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">XL</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <img src="{{ asset('img/24.jpg') }}" alt="Camisa Negra manga larga">
                        <p>Camisa Negra manga larga</p>
                        <p class="price">COL $300,000</p>
                        <div class="sizes">
                            <span class="badge bg-secondary" onclick="toggleSize(this)">S</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">M</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">L</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">XL</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <img src="{{ asset('img/24.jpg') }}" alt="Camisa Azul manga larga">
                        <p>Camisa Azul manga larga</p>
                        <p class="price">COL $202,000</p>
                        <div class="sizes">
                            <span class="badge bg-secondary" onclick="toggleSize(this)">S</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">M</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">L</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">XL</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <img src="{{ asset('img/24.jpg') }}" alt="Camisa Lino manga larga">
                        <p>Camisa Lino manga larga</p>
                        <p class="price">COL $250,000</p>
                        <div class="sizes">
                            <span class="badge bg-secondary" onclick="toggleSize(this)">S</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">M</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">L</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">XL</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <button class="btn custom-btn">Ver más</button>
            </div>
        </div>

        <div class="category mb-5">
            <h4>CAMISAS MANGA CORTA</h4>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <img src="{{ asset('img/23.jpg') }}" alt="Camisa Lino manga corta">
                        <p>Camisa Lino manga corta</p>
                        <p class="price">COL $144,800</p>
                        <div class="sizes">
                            <span class="badge bg-secondary" onclick="toggleSize(this)">S</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">M</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">L</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">XL</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <img src="{{ asset('img/23.jpg') }}" alt="Camisa Rosa manga corta">
                        <p>Camisa Rosa manga corta</p>
                        <p class="price">COL $190,000</p>
                        <div class="sizes">
                            <span class="badge bg-secondary" onclick="toggleSize(this)">S</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">M</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">L</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">XL</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <img src="{{ asset('img/23.jpg') }}" alt="Camisa Cuadros manga corta">
                        <p>Camisa Cuadros manga corta</p>
                        <p class="price">COL $160,000</p>
                        <div class="sizes">
                            <span class="badge bg-secondary" onclick="toggleSize(this)">S</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">M</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">L</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">XL</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <img src="{{ asset('img/23.jpg') }}" alt="Camisa Rosa manga corta">
                        <p>Camisa Rosa manga corta</p>
                        <p class="price">COL $190,000</p>
                        <div class="sizes">
                            <span class="badge bg-secondary" onclick="toggleSize(this)">S</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">M</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">L</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">XL</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <button class="btn custom-btn">Ver más</button>
            </div>
        </div>

        <div class="category mb-5">
            <h4>POLOS</h4>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <img src="{{ asset('img/Daniel3.jpg') }}" alt="Polo Premium Slim Fit">
                        <p>Polo Premium Slim Fit</p>
                        <p class="price">COL $90,000</p>
                        <div class="sizes">
                            <span class="badge bg-secondary" onclick="toggleSize(this)">S</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">M</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">L</span>
                            <span class="badge bg-secondary" onclick="toggleSize(this)">XL</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <img src="{{ asset('img/Daniel3.jpg') }}" alt="Polo Moda Slim Fit">
                        <p>Polo Moda Slim Fit</p>
                        <p class="price">COL $82,500</p>
                        <div class="sizes">
                            <span class="badge" onclick="toggleSize(this)">S</span>
                            <span class="badge" onclick="toggleSize(this)">M</span>
                            <span class="badge" onclick="toggleSize(this)">L</span>
                            <span class="badge" onclick="toggleSize(this)">XL</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <img src="{{ asset('img/Daniel3.jpg') }}" alt="Polo Business Tejida">
                        <p>Polo Business Tejida</p>
                        <p class="price">COL $89,910</p>
                        <div class="sizes">
                            <span class="badge" onclick="toggleSize(this)">S</span>
                            <span class="badge" onclick="toggleSize(this)">M</span>
                            <span class="badge" onclick="toggleSize(this)">L</span>
                            <span class="badge" onclick="toggleSize(this)">XL</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="favorites">&#9829;</span>
                        <img src="{{ asset('img/Daniel3.jpg') }}" alt="Camisa Rosa manga corta">
                        <p>Camisa Rosa manga corta</p>
                        <p class="price">COL $190,000</p>

                        <div class="sizes">
                            <span class="badge" onclick="toggleSize(this)">S</span>
                            <span class="badge" onclick="toggleSize(this)">M</span>
                            <span class="badge" onclick="toggleSize(this)">L</span>
                            <span class="badge" onclick="toggleSize(this)">XL</span>
                        </div>
                        
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
        $(this).toggleClass("selected");
    });
</script>
<script>
    function toggleSize(element) {
        console.log("Se hizo clic en la talla:", element.innerText);  // Verifica si el clic está siendo detectado

        // Verifica si la talla ya está seleccionada
        if (element.classList.contains('selected')) {
            // Si ya está seleccionada, la deselecciona (vuelve al color original)
            element.classList.remove('selected');
        } else {
            // Si no está seleccionada, selecciona la talla (aplica el color)
            let sizes = document.querySelectorAll('.sizes .badge');
            sizes.forEach(size => {
                size.classList.remove('selected'); // Remueve la clase 'selected' de todas las tallas
            });

            element.classList.add('selected'); // Agrega la clase 'selected' a la talla seleccionada
        }
    }
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
