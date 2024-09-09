<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Login');
});

Route::get('/menu', function () {
    return view('Menu');
})->name('menu');

Route::post('/', function () {
    // Lógica de autenticación aquí
    return redirect('/menu');
})->name('login.submit');

Route::get('/gestion', function () {
    return view('GestionProductos'); // Asegúrate de tener esta vista creada
})->name('gestion');

Route::get('/agregar', function () {
    return view('AgregarProducto'); // Asegúrate de tener esta vista creada
})->name('agregar');

Route::get('/modificar', function () {
    return view('ModificarProducto'); // Asegúrate de tener esta vista creada
})->name('modificar');

Route::get('/eliminar', function () {
    return view('EliminarProducto'); // Asegúrate de tener esta vista creada
})->name('eliminar');

Route::get('/clientes', function () {
    return view('Clientes'); // Asegúrate de tener esta vista creada
})->name('clientes');

Route::get('/proveedores', function () {
    return view('Proveedores'); // Asegúrate de tener esta vista creada
})->name('proveedores');

Route::get('/pedidos', function () {
    return view('Pedidos'); // Asegúrate de tener esta vista creada
})->name('pedidos');

Route::get('/configurar', function () {
    return view('Configuracion'); // Asegúrate de tener esta vista creada
})->name('configurar');
