<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function submit(Request $request)
    {
        // Definir usuario y contraseña válidos
        $usuario_valido = "usuario123@gmail.com";
        $password_valida = "password123";

        // Verificar si la cuenta está bloqueada
        if (Session::has('bloqueado') && now()->lt(session('bloqueado'))) {
            $tiempo_restante = now()->diffInMinutes(session('bloqueado'));
            return back()->with('error', "Has fallado 3 veces. Inténtalo de nuevo en $tiempo_restante minutos.");
        }

        // Verificar si el formulario fue enviado correctamente
        $usuario = $request->input('email');
        $password = $request->input('password');

        // Verificar si el usuario y la contraseña son correctos
        if ($usuario === $usuario_valido && $password === $password_valida) {
            // Restablecer los intentos fallidos
            Session::forget('intentos');
            Session::forget('bloqueado');

            // Redirigir al menú
            return redirect()->route('menu')->with('success', 'Inicio de sesión exitoso.');
        } else {
            // Manejar intentos fallidos
            $intentos = Session::get('intentos', 0) + 1;
            Session::put('intentos', $intentos);

            // Bloquear si se ha intentado más de 3 veces
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
