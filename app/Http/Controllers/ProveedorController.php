<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor; // Si tienes un modelo Proveedor

class ProveedorController extends Controller
{
    /*** Muestra la lista de proveedores*/
    public function index()
    {
        return view('proveedores');
    }

    /*** Muestra el formulario para crear un nuevo proveedor*/
    public function create()
    {
        return view('ModalProv');
    }

    /*** Almacena un nuevo proveedor*/
    public function store(Request $request)
    {
        // Aquí irá la lógica para guardar un nuevo proveedor
    }

    /*** Muestra la información de un proveedor específico*/
    public function show($id)
    {
        // Aquí irá la lógica para mostrar un proveedor
    }

    /*** Muestra el formulario para editar un proveedor*/
    public function edit($id)
    {
        // Aquí irá la lógica para mostrar el formulario de edición
    }

    /*** Actualiza un proveedor específico*/
    public function update(Request $request, $id)
    {
        // Aquí irá la lógica para actualizar un proveedor
    }

    /*** Elimina un proveedor específico*/
    public function destroy($id)
    {
        // Aquí irá la lógica para eliminar un proveedor
    }

    /*** Muestra los modales*/
    public function modals()
    {
        return view('ModalProv');
    }
}
