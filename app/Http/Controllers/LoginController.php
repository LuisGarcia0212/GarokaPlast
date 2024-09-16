<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

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

        \Log::info('Inicio de sesión exitoso para el usuario: ' . $request->input('email'));

        // Redirigir al menú
        return redirect()->route('menu')->with('success', 'Inicio de sesión exitoso.');
    } else {
        \Log::info('Fallo de autenticación para el usuario: ' . $request->input('email'));
        \Log::info('Credenciales proporcionadas: ' . json_encode($credentials));

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

}
