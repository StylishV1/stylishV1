<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    // Método para mostrar la vista de perfil
    public function index()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login'); // Redirigir al login si no está autenticado
        }

        return view('perfiles', compact('user'));
    }

    // Método para actualizar el perfil del usuario
    public function update(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        // Validar los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8|confirmed',
        ]);

        // Actualizar datos
        $user->name = $request->name;
        $user->email = $request->email;

        // Si el usuario ingresó una nueva contraseña, encriptarla antes de guardarla
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('perfil')->with('success', 'Perfil actualizado correctamente.');
    }
}
