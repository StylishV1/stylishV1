
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/perfi.CSS') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
                
                <li><a href="{{ url('/favoritos') }}"><i class="fas fa-heart"></i> Favoritos</a></li> <!-- Icono de favoritos -->
                <li><a href="{{ url('/carrito') }}"><i class="fas fa-shopping-cart"></i> Carrito</a></li> <!-- Icono de carrito de compras -->
            </ul>
        </div>
    </header>

  

    <main>
        <div  class="contact1-title">
            <h1>PERFILE</h1> <!-- Titulo del Formulario-->   
         </div>
        <!-- Sección de Perfil -->


        <section class="profile">

            

            @if(auth()->check())
    <h1>{{ auth()->user()->name }}</h1>
    @else
    <h1>No has iniciado sesión</h1>
    @endif

            <!-- Mostrar mensaje de éxito        
                
                 AVATAR 


                <div class="profile-info">
                <div class="avatar">
                    <i class="bi bi-person"></i>
                    <p>{{ $user->name }}</p>
                </div>         -->



                @if(session('success'))
                <div class="alert alert-success" id="success-message">
                    {{ session('success') }}
                </div>
                
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        setTimeout(function() {
                            let message = document.getElementById("success-message");
                            if (message) {
                                message.style.display = "none";
                            }
                        }, 2000); // Oculta el mensaje después de 3 segundos
                    });
                </script>
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
    
                    <label for="name"></label>
                    <input type="text" name="name" value="{{ $user->name }}" placeholder="Nombre">
    
                    <label for="email"></label>
                    <input type="email" name="email" value="{{ $user->email }}" placeholder="Correo electrónico">
    
                    <label for="password"></label>
                    <input type="password" name="password" placeholder="Nueva contraseña">
    
                    <label for="password_confirmation"></label>
                    <input type="password" name="password_confirmation" placeholder="Confirmar contraseña">
    
                    <button type="submit" class="edit-btn">Guardar Cambios</button>
                    </form>
                    
            </div>
        </section>
    </main>

    
<!-- Contenedor independiente SOLO para el título -->
<div class="container text-center">
    <h2 class="mb-4">Mis Favoritos</h2><br>
</div>

<!-- Contenedor de Favoritos (Imágenes NO se mueven) -->
<div class="container">
    <div class="row d-flex justify-content-center" id="favoritos-container">
        @foreach($favoritos as $key => $favorito)
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 favorito-item {{ $key >= 6 ? 'hidden' : '' }}">
                <div class="card">
                    <img src="{{ $favorito->imagen }}" class="card-img-top img-fluid" alt="{{ $favorito->nombre }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $favorito->nombre }}</h5>
                        <p class="card-text">COL <strong>${{ number_format($favorito->precio, 0) }}</strong></p>
                        <button class="btn btn-danger btn-eliminar" data-nombre="{{ $favorito->nombre }}">Eliminar</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@if(count($favoritos) > 6)
    <div class="text-center mt-3">
        <button class="btn btn-primary" id="verMasBtn">Ver más</button>
        <button class="btn btn-secondary d-none" id="verMenosBtn">Ver menos</button>
    </div>
@endif
</div>
    

<footer>
    <div class="footer-logo">
    <img src="{{ asset('img/Logo.jpg') }}" alt="Stylish" style="height: 40px;"> <!-- Imagen del logo -->
    </div>
    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a> <!-- Ícono facebook -->
        <a href="#"><i class="fab fa-instagram"></i></a><!-- Ícono de instagram -->
        <a href="#"><i class="fab fa-twitter"></i></a><!-- Ícono de tiwter -->
        <a href="#"><i class="fab fa-whatsapp"></i></a> <!-- Ícono de WhatsApp -->
    </div>
    <div class="footer-links">

    <a href="{{ url('/nosotros') }}">Nosotros</a>
        <a href="#">Ayuda</a>
        <a href="#">Términos y Condiciones</a>
        <a href="#">Contáctanos</a>
        
    </div>
</footer>
  
</body>
</html>
    
   
       
<script>

document.getElementById("avatarUpload").addEventListener("change", function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.querySelector(".avatar i").style.display = "none"; // Oculta el ícono
            const img = document.getElementById("avatarPreview");
            img.src = e.target.result;
            img.style.display = "block";
        };
        reader.readAsDataURL(file);
    }
});


</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let btnVerMas = document.getElementById("verMasBtn");
        let btnVerMenos = document.getElementById("verMenosBtn");
    
        // Ocultar el botón "Ver menos" al inicio
        btnVerMenos.style.display = "none";
    
        if (btnVerMas && btnVerMenos) {
            btnVerMas.addEventListener("click", function() {
                document.querySelectorAll(".favorito-item.hidden").forEach(el => {
                    el.classList.remove("hidden");
                });
    
                btnVerMas.style.display = "none";  // Ocultar "Ver más"
                btnVerMenos.style.display = "inline-block";  // Mostrar "Ver menos"
            });
    
            btnVerMenos.addEventListener("click", function() {
                document.querySelectorAll(".favorito-item").forEach((el, index) => {
                    if (index >= 6) {
                        el.classList.add("hidden");
                    }
                });
    
                btnVerMenos.style.display = "none";  // Ocultar "Ver menos"
                btnVerMas.style.display = "inline-block";  // Mostrar "Ver más"
            });
        }
    });
    
    </script>