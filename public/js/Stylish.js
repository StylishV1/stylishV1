// Agregar un evento al logo para redirigir a la página principal
document.getElementById('logo').addEventListener('click', function(event) {
    event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
    window.location.href = 'index.html'; // Redirigir a la página principal
});

// Mostrar/ocultar el formulario de inicio de sesión al hacer clic en el enlace del perfil
document.getElementById('profile-link').addEventListener('click', function(event) {
    event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
    var loginForm = document.getElementById('login-form'); // Obtener el formulario de inicio de sesión
    // Alternar entre mostrar y ocultar el formulario de inicio de sesión
    if (loginForm.style.display === 'none' || loginForm.style.display === '') {
        loginForm.style.display = 'block'; // Mostrar el formulario
    } else {
        loginForm.style.display = 'none'; // Ocultar el formulario
    }
});

// Ocultar el formulario de inicio de sesión al hacer clic en el botón "Cancelar"
document.getElementById('cancel-button').addEventListener('click', function() {
    document.getElementById('login-form').style.display = 'none'; // Ocultar el formulario de inicio de sesión
});

// Mostrar el formulario de registro y ocultar el de inicio de sesión al hacer clic en "Crea tu cuenta"
document.getElementById('register-link').addEventListener('click', function(event) {
    event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
    document.getElementById('login-form').style.display = 'none'; // Ocultar el formulario de inicio de sesión
    document.getElementById('register-form').style.display = 'block'; // Mostrar el formulario de registro
});

// Ocultar el formulario de registro al hacer clic en el botón "Cancelar" dentro de este formulario
document.getElementById('register-cancel-button').addEventListener('click', function() {
    document.getElementById('register-form').style.display = 'none'; // Ocultar el formulario de registro
});

// Mostrar el formulario de inicio de sesión y ocultar el de registro al hacer clic en "Inicia sesión"
document.getElementById('login-link').addEventListener('click', function(event) {
    event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
    document.getElementById('register-form').style.display = 'none'; // Ocultar el formulario de registro
    document.getElementById('login-form').style.display = 'block'; // Mostrar el formulario de inicio de sesión
});

// Mostrar/ocultar la caja de búsqueda al hacer clic en el enlace de búsqueda
document.getElementById('search-toggle').addEventListener('click', function(event) {
    event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
    var searchForm = document.getElementById('search-form'); // Obtener la caja de búsqueda
    // Alternar entre mostrar y ocultar la caja de búsqueda
    if (searchForm.style.display === 'none' || searchForm.style.display === '') {
        searchForm.style.display = 'block'; // Mostrar la caja de búsqueda
    } else {
        searchForm.style.display = 'none'; // Ocultar la caja de búsqueda
    }
});


