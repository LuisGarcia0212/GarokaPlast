<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\SolicitudController;
use App\Models\Solicitud;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'submit'])->name('login.submit');



// Rutas que requieren que el usuario esté autenticado
Route::middleware('auth')->group(function () {
    Route::get('/menu', function () {
        return view('Menu');
    })->name('menu');

    Route::get('/gestion', function () {
        return view('ListaProductos');
    })->name('gestion');

    Route::get('/agregar', function () {
        return view('RegistrarProducto');
    })->name('agregar');

    Route::get('/modificar', function () {
        return view('ModificarProducto');
    })->name('modificar');

    Route::get('/eliminar', function () {
        return view('EliminarProducto');
    })->name('eliminar');

    Route::get('/clientes', function () {
        return view('Clientes');
    })->name('clientes');

    Route::get('/dasboard', function () {
        return view('dashboard');
    })->name('dasboard');

   // Rutas para facturas
    Route::get('/gestionfactura', function () {
        return view('ListaFacturas');
    })->name('gestionfactura');
    Route::get('/agregarfactura', function () {
        return view('AgregarFactura');
    })->name('agregarfactura');
    Route::get('/eliminarFactura', function () {
        return view('EliminarFactura');
    })->name('eliminarFactura');

    // Rutas para proveedores
    Route::get('/solicitudes', [SolicitudController::class, 'index'])->name('solicitudes');
    Route::get('/solicitudes/modals', [SolicitudController::class, 'modals'])->name('solicitudes.modals');
 

    // Rutas para proveedores
    Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedores');
    Route::get('/proveedores/modals', [ProveedorController::class, 'modals'])->name('proveedores.modals');


    Route::get('/pedidos', function () {
        return view('Pedidos');
    })->name('pedidos');

    Route::get('/configurar', function () {
        return view('Configuracion');
    })->name('configurar');
});

// Ruta para procesar el login de usuario regular
Route::post('/login', [LoginController::class, 'submit'])->name('login.submit');

// Rutas para el administrador
// Ruta para mostrar el formulario de login de administrador
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');

// Ruta para procesar el login de administrador
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');

// Ruta para cerrar sesión de administrador
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

// Rutas protegidas para administradores autenticados
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/menu', function () {
        return view('admin.Menu'); // Asegúrate de tener esta vista creada
    })->name('admin.menu');

    Route::get('/admin/gestion', function () {
        return view('admin.GestionProductos'); // Asegúrate de tener esta vista creada
    })->name('admin.gestion');
});

// Ruta para cerrar sesión
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');