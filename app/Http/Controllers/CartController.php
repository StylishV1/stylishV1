<?php
namespace App\Http\Controllers;


use App\Models\Producto;
use Illuminate\Http\Request;


class CartController extends Controller
{
     // Mostrar el carrito
     public function showCart()
     {
         return view('carrito'); // Retorna la vista carrito.blade.php
     }
 
     // Agregar al carrito
     public function addToCart(Request $request)
     {
         // Aquí se maneja la lógica de agregar productos al carrito (por ejemplo, guardarlos en la base de datos)
         $validated = $request->validate([
             'talla' => 'required|string|max:255',
             'cantidad' => 'required|integer|min:1',
             'color' => 'nullable|string|max:255',
             'imagen' => 'required|string|max:255',
             'precio' => 'required|numeric|min:0',
         ]);
         // Verificar que 'precio' es un número antes de realizar la multiplicación
    $precioUnitario = $validated['precio'];  // Esto es el precio unitario

    // Asegúrate de que 'cantidad' sea un número positivo
    $cantidad = $validated['cantidad'];

    // Calcular el precio total (precio * cantidad)
    $precioTotal = $precioUnitario * $cantidad;

    // Verifica que $precioTotal sea un valor numérico antes de intentar usarlo
    if (is_numeric($precioTotal)) {
 
         // Crear un nuevo producto en la base de datos (esto depende de cómo almacenes los productos)
         Producto::create([
             'talla' => $validated['talla'],
             'cantidad' => $validated['cantidad'],
             'color' => $validated['color'] ?? null,
             'imagen' => $validated['imagen'],
             'precio' => $precioTotal, // Guardar el precio
         ]);
 
         // Redirigir o devolver una respuesta según el flujo que desees
         return redirect()->route('carrito')->with('success', 'Producto agregado al carrito');
         
     }
}
}