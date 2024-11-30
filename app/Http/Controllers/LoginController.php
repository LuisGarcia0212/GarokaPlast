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
            return redirect()->back()->with([
                'error' => "Cuenta bloqueada. Inténtalo de nuevo en $tiempo_restante minutos.",
                'intentos' => 3  // Para mostrar las X en el frontend
            ]);
        }

        // Validar los campos del formulario
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Obtener las credenciales
        $credentials = $request->only('email', 'password');

        // Intentar autenticación
        if (Auth::attempt($credentials)) {
            // Limpiar variables de sesión
            Session::forget(['intentos', 'bloqueado']);
            
            // Regenerar la sesión para prevenir ataques de fijación de sesión
            $request->session()->regenerate();

            Log::info('Inicio de sesión exitoso', ['email' => $request->email]);

            return redirect()
                ->route('menu')
                ->with('success', '¡Bienvenido! Has iniciado sesión correctamente.');
        }

        // Manejar intentos fallidos
        $intentos = Session::get('intentos', 0) + 1;
        Session::put('intentos', $intentos);

        Log::warning('Intento de inicio de sesión fallido', [
            'email' => $request->email,
            'intentos' => $intentos
        ]);

        if ($intentos >= 3) {
            Session::put('bloqueado', now()->addMinutes(3));
            Session::put('intentos', 3); // Mantener en 3 para la visualización
            
            return redirect()->back()->with([
                'error' => 'Cuenta bloqueada por 3 minutos debido a múltiples intentos fallidos.',
                'intentos' => 3
            ]);
        }

        return redirect()->back()->with([
            'error' => "Credenciales incorrectas. Intento $intentos de 3.",
            'intentos' => $intentos
        ]);
    }

    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('menu');
        }

        return view('Login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        // Invalidar la sesión y regenerar el token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with('success', 'Has cerrado sesión correctamente.');
    }
}