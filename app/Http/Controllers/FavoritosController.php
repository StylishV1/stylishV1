<?php

namespace App\Http\Controllers;
use App\Models\Favorito;
use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;



class FavoritosController extends Controller
{
    public function agregarFavorito(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'imagen' => 'required|string',
        ]);
    
        // Obtener el usuario autenticado (si existe)
        $userId = auth()->check() ? auth()->id() : null;
    
        // Guardar en la base de datos
        Favorito::create([
            'session_id' => session()->getId(),
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'imagen' => $request->imagen,
            'user_id' => $userId, // Asigna el usuario autenticado o null si no está logueado
        ]);
    
        return response()->json(['mensaje' => 'Producto agregado a favoritos.']);
    }
    

    public function obtenerFavoritos()
    {
       // Simula la autenticación con el usuario ID 1
    Auth::loginUsingId(6);

    // Obtén el ID del usuario autenticado
    $userId = Auth::id();

    // Obtén los productos favoritos de este usuario
    $favoritos = Favorito::where('user_id', $userId)->get();

    // Depuramos la variable para ver si contiene datos
    dd($favoritos);
    }
    
    public function eliminarFavorito(Request $request)
{
    Log::info('Datos recibidos:', $request->all()); // Registra los datos enviados

    $user = Auth::user(); 
    $idProducto = $request->input('id');

    if (!$user) {
        return response()->json(['mensaje' => 'Usuario no autenticado'], 401);
    }

    // Buscar el producto favorito
    $productoFavorito = Favorito::where('user_id', $user->id)
                                ->where('id', $idProducto)
                                ->first();

    if ($productoFavorito) {
        $productoFavorito->delete();
        return response()->json(['mensaje' => 'Producto eliminado de favoritos.']);
    }

    return response()->json(['mensaje' => 'El producto no se encuentra en favoritos.'], 404);
}

public function mostrarFavoritos()
{
    if (!auth()->check()) {
        return redirect('/login')->with('error', 'Debes iniciar sesión para ver tus favoritos.');
    }

    // Obtener favoritos del usuario autenticado
    $favoritos = Favorito::where('user_id', auth()->id())->get();

    return view('favoritos', compact('favoritos')); // Envía $favoritos a la vista
}

}
