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

//Redirecciones de Menú

Route::get('/menu', function () {
    return view('Menu');
})->name('menu');

//Ruta para el Login 
Route::post('/', function () {
    // Lógica de autenticación aquí
    return redirect('/menu');
})->name('login.submit');

//----------------Referente a productos------------------- 

Route::get('/gestion', function () {
    return view('GestionProductos'); // Asegúrate de tener esta vista creada
})->name('gestion');

Route::get('/registrarproducto', function () {
    return view('RegistrarProducto'); // Asegúrate de tener esta vista creada
})->name('registrarproducto');

Route::get('/modificarproducto', function () {
    return view('ModificarProducto'); // Asegúrate de tener esta vista creada
})->name('modificarproducto');

Route::get('/eliminarproducto', function () {
    return view('EliminarProducto'); // Asegúrate de tener esta vista creada
})->name('eliminarproducto');


//-------Referentes a clientes -------------------------
Route::get('/clientes', function () {
    return view('Clientes'); // Asegúrate de tener esta vista creada
})->name('clientes');

Route::get('/registrarcliente', function () {
    return view('RegistrarCliente'); // Asegúrate de tener esta vista creada
})->name('registrarcliente');

Route::get('/modificarcliente', function () {
    return view('ModificarCliente'); // Asegúrate de tener esta vista creada
})->name('modificarcliente');

Route::get('/eliminarcliente', function () {
    return view('EliminarCliente'); // Asegúrate de tener esta vista creada
})->name('eliminarcliente');

Route::get('/gestionarproveedor', function () {
    return view('GestionarSucursal'); // Asegúrate de tener esta vista creada
})->name('gestionarproveedor');


 //--------------Referente a Proveedores ---------------------------

Route::get('/proveedores', function () {
    return view('Proveedores'); // Asegúrate de tener esta vista creada
})->name('proveedores');





// --------------Referente a pedidos -------------------------------
Route::get('/pedidos', function () {
    return view('Pedidos'); // Asegúrate de tener esta vista creada
})->name('pedidos');




// ----------------Referente a config -------------------
Route::get('/configurar', function () {
    return view('Configuracion'); // Asegúrate de tener esta vista creada
})->name('configurar');
