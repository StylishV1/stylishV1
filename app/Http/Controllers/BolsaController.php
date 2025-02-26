<?php
                               // Mi bolsa de compras es el controlador de bolsa de compra
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bolsa;
class BolsaController extends Controller
{
    public function index()
    {
        $bolsas = Bolsa::all(); // Recuperar todos los productos
        $subtotal = $bolsas->sum('precio'); // Calcular el subtotal
        $envio = 80000; // Costo fijo de envío (puedes cambiarlo según sea necesario)
    
        return view('bolsas', compact('bolsas', 'subtotal', 'envio'));
    }

   
    public function destroy($id)
    {
        $bolsa = Bolsa::find($id);
        
        if ($bolsa) {
            $bolsa->delete();
            return response()->json(['success' => true, 'message' => 'Producto eliminados correctamente.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Producto no encontrado.'], 404);
        }
    }
    

}