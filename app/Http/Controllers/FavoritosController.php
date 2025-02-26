<?php

namespace App\Http\Controllers;
use App\Models\Favorito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FavoritosController extends Controller
{
    public function agregarFavorito(Request $request)
    {
        // Validación de datos (opcional)
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'imagen' => 'required|string',
        ]);

        // Guardar en la base de datos
        Favorito::create([
            'session_id' => session()->getId(),
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'imagen' => $request->imagen,
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
    // Obtener el nombre del producto para eliminarlo
    $nombreProducto = $request->input('nombre');

    // Eliminar el producto de favoritos de la base de datos
    $productoFavorito = Favorito::where('session_id', session()->getId())
                               ->where('nombre', $nombreProducto)
                               ->first();

    if ($productoFavorito) {
        $productoFavorito->delete(); // Eliminar de la base de datos
        return response()->json(['mensaje' => 'Producto eliminado de favoritos.']);
    }

    return response()->json(['mensaje' => 'El producto no se encuentra en favoritos.']);
}
}
