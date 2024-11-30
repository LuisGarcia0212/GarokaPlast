<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
class LoginController extends Controller
{
    public function submit(Request $request)
{
    // Verificar si la cuenta está bloqueada
    if (Session::has('bloqueado') && now()->lt(session('bloqueado'))) {
        $tiempo_restante = now()->diffInMinutes(session('bloqueado'));
        return back()->with('error', "Has fallado 3 veces. Inténtalo de nuevo en $tiempo_restante minutos.");
    }

    // Obtener las credenciales
    $credentials = $request->only('email', 'password');

    // Intentar autenticación
    if (Auth::attempt($credentials)) {
        // Restablecer los intentos fallidos
        Session::forget('intentos');
        Session::forget('bloqueado');

        Log::info('Inicio de sesión exitoso para el usuario: ' . $request->input('email'));

        // Redirigir al menú
        return redirect()->route('dasboard')->with('success', 'Inicio de sesión exitoso.');
    } else {
        Log::info('Fallo de autenticación para el usuario: ' . $request->input('email'));
        Log::info('Credenciales proporcionadas: ' . json_encode($credentials));

        // Manejar intentos fallidos
        $intentos = Session::get('intentos', 0) + 1;
        Session::put('intentos', $intentos);

        if ($intentos >= 3) {
            Session::put('bloqueado', now()->addMinutes(3));
            Session::forget('intentos');
            return back()->with('error', 'Has fallado 3 veces. Bloqueado por 3 minutos.');
        } else {
            return back()->with('error', "Usuario o contraseña incorrectos. Intento $intentos de 3.");
        }
    }
}

public function showLoginForm()
{
    // Verificar si el usuario ya está autenticado
    if (Auth::check()) {
        return redirect()->route('menu'); // Redirigir al menú si ya está autenticado
    }

    return view('Login'); // Mostrar el formulario de inicio de sesión
}

 // Método para cerrar sesión
 public function logout(Request $request)
 {
     Auth::logout(); // Cierra la sesión del usuario
     $request->session()->invalidate(); // Invalida la sesión
     $request->session()->regenerateToken(); // Regenera el token CSRF
 
     return redirect()->route('login'); // Redirige al formulario de inicio de sesión
 }
 

}
