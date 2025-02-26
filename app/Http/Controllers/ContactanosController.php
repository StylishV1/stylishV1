<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contactanos;
class ContactanosController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'mensaje' => 'required|string',
        ]);

        // Guardar en la base de datos
        Contactanos::create([
            'nombre' => $request->input('nombre'),
            'correo' => $request->input('correo'),
            'telefono' => $request->input('telefono'),
            'mensaje' => $request->input('mensaje'),
        ]);

        // Redirigir con mensaje de éxito
        return redirect()->back()->with('success', '¡Gracias por contactarnos! Pronto responderemos.');
    }
}
