<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Método register() en el controlador AuthController
public function register(Request $request)
{
    // Validación de los datos
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
    ]);

    // Crear el usuario
    $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
    ]);


    // Redirigir a la vista de inicio con un mensaje
    return redirect('/')->with('success', '¡Te has registrado!');

}
    // Método login() en el controlador AuthController
    public function login(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Intentar autenticar al usuario
        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            // Regenerar la sesión para evitar problemas de fijación de sesión
            $request->session()->regenerate();
    
            // Redirigir al usuario a su perfil
            return redirect()->route('perfil')->with('success', '¡Has iniciado sesión correctamente!');
        }
    
        // Si las credenciales no son correctas, redirigir con un mensaje de error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }


// Método logout() en el controlador AuthController
public function logout(Request $request)
{
    Auth::logout(); // Cerrar sesión del usuario
    $request->session()->invalidate(); // Invalidar la sesión
    $request->session()->regenerateToken(); // Regenerar el token CSRF
    return redirect('/')->with('success', 'Has cerrado sesión correctamente .');

}
// Mostrar el formulario de inicio de sesión (GET)
public function showLoginForm()
{
    return view('auth.login'); // Asegúrate de que esta vista exista
}

// Procesar el inicio de sesión (POST)

}
