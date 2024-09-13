<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Para utilizar el hashing

class AdminLoginController extends Controller
{
    // Muestra el formulario de inicio de sesión para administradores
    public function showLoginForm()
    {
        return view('admin-login'); // Asegúrate de crear esta vista
    }

    // Lógica de login de administrador
    public function login(Request $request)
    {
        // Validar los datos del formulario
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Intentar iniciar sesión con el guard de admin
        if (Auth::guard('admin')->attempt($credentials)) {
            // Redireccionar al panel de administración si el login es exitoso
            $request->session()->regenerate();
            return redirect()->route('admin.menu');
        }

        // Si falla, redireccionar de nuevo con un mensaje de error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    // Lógica de cierre de sesión de administrador
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
