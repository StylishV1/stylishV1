<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FavoritosController;
use App\Http\Controllers\BolsaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;

//Rutas de Bolsa o carrito de compra ya para pagar
Route::delete('/bolsa/{id}', [BolsaController::class, 'destroy'])->name('bolsa.destroy');
Route::get('/bolsas', [BolsaController::class, 'index'])->name('bolsas.index');


//Rutas de Carrito
Route::post('/api/add-to-cart', [CartController::class, 'addToCart']);


Route::get('/', function () {
    return view('home');
});

//Route::get('/contactanos', function ()    {return view('contactanos');   });
Route::get('/carrito', [CartController::class, 'showCart'])->name('carrito');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');


// Ruta para mostrar la vista de perfil
Route::middleware(['auth'])->group(function () {
    Route::get('/perfil', [ProfileController::class, 'index'])->name('perfil');
});
Route::put('/perfil/actualizar', [ProfileController::class, 'update'])->name('perfil.update')->middleware('auth');
Route::get('/perfil', [ProfileController::class, 'mostrareFavoritos'])->middleware('auth');



//rutas de login y registro 


Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// routes/web.php

// Ruta para mostrar el formulario de inicio de sesión (GET)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Ruta para procesar el inicio de sesión (POST)
Route::post('/login', [AuthController::class, 'login']);






Route::get('/contactanos', function () {
    return view('contactanos'); // Asegúrate de tener esta vista creada.
})->name('contactanos.form');

Route::post('/contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');


Route::get('/favoritos', [FavoritosController::class, 'obtenerFavoritos']);
Route::post('/agregar-favorito', [FavoritosController::class, 'agregarFavorito']);
Route::post('/eliminar-favorito', [FavoritosController::class, 'eliminarFavorito']);
Route::post('/favoritos/eliminar', [FavoritosController::class, 'eliminarFavorito']);

Route::get('/mis-favoritos', [FavoritosController::class, 'mostrarFavoritos'])->middleware('auth');





// Asegúrate de tener esta vista creada.Route::get('/bolsa', function (){  return view('detallebolsa');});
    




// Asegúrate de tener esta vista creada.  Route::get('/carrito', function () { return view('carrito');  });
    




Route::get('/buscar', function () {
    return view('buscar');
})->name('buscar.productos');

Route::get('/hombre', function () {
    return view('hombre');
})->name('hombre.productos');



Route::get('/accesorios', function () {
    return view('accesorios');
});




Route::get('/mujer', function () {
    return view('mujer');
});


Route::get('/nosotros', function () {
    return view('nosotros');
});



Route::get('/ofertas', function () {
    return view('oferta');
})->name('oferta');






Route::get('/tendencias', function () {
    return view ('tendencias');
});


// inicio ayuda2
Route::get('/ayuda2', function () {
    return view('ayuda2'); 
});
// hace parte de ayuda2
Route::get('/solicitud', function () {
    return view('solicitud'); 
})->name('solicitud'); 


Route::get('/favoritos', function () {
    return view('favoritos');
})->name('favoritos');

Route::get('/servicioalcliente', function () {
    return view ('servicioalcliente');
    
});

Route::get('/hombre2', function () {
    return view('hombre2'); // Asegúrate de que la vista esté en resources/views/hombre.blade.php
});



Route::get('/mujer2', function () {
    return view('mujer2'); // La vista debe existir en resources/views/
});

