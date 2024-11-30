<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app') <!-- Extiende el layout base -->

@section('title', 'Lista de Productos') <!-- Título específico de esta vista -->

@section('content') <!-- Contenido específico de esta vista -->
<div class="container">
    <div class="product-list">
        <h2>Lista de Productos</h2>

        <!-- Sección para buscar productos -->
        <form action="#" method="GET"> <!-- Ajusta la ruta para la búsqueda -->
            @csrf
            <div class="form-group">
                <label for="buscar_producto">Buscar Producto</label>
                <input type="text" id="buscar_producto" name="buscar_producto" placeholder="Ingrese el nombre o atributo" required>
                <button type="submit" class="buscar-button">Buscar</button>
            </div>
        </form>

        <!-- Tabla para mostrar la lista de productos -->
        <table class="product-table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nacionalidad</th>
                    <th>Color</th>
                    <th>Cantidad</th>
                    <th>Unidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Ejemplo de filas (esto se generará dinámicamente) -->
                <tr>
                    <td>Producto 1</td>
                    <td>Argentina</td>
                    <td>Rojo</td>
                    <td>100</td>
                    <td>ROLLOS</td>
                    <td>
                        <button class="edit-button">Editar</button>
                        <button class="delete-button">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Producto 2</td>
                    <td>Brasil</td>
                    <td>Verde</td>
                    <td>200</td>
                    <td>KILOS</td>
                    <td>
                        <button class="edit-button">Editar</button>
                        <button class="delete-button">Eliminar</button>
                    </td>
                </tr>
                <!-- Fin de ejemplo -->
            </tbody>
        </table>
    </div>
</div>
@endsection

<!-- Estilo CSS reutilizando y extendiendo el esquema de colores -->
<style>
    .container {
        width: 90%;
        margin: auto;
        padding: 20px;
        background-color: #e0f0ff;
        border-radius: 8px;
        border: 2px solid #4a90e2;
    }
    h2 {
        font-size: 24px;
        color: #000;
        margin-bottom: 20px;
        text-align: center;
    }
    .form-group {
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .form-group label {
        flex-basis: 25%;
        text-align: right;
        padding-right: 15px;
        font-weight: bold;
        color: #4a90e2;
    }
    .form-group input {
        flex-basis: 70%;
        padding: 10px;
        border: 1px solid #4a90e2;
        border-radius: 5px;
        background-color: #f7f9fc;
        color: #000;
    }
    .form-group input:focus {
        border-color: #ff4b5c;
        outline: none;
    }
    .buscar-button {
        padding: 10px 20px;
        margin-left: 10px;
        background-color: #4a90e2;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    .buscar-button:hover {
        background-color: #357ab9;
    }
    .product-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    .product-table th, .product-table td {
        border: 1px solid #4a90e2;
        padding: 10px;
        text-align: center;
    }
    .product-table th {
        background-color: #4a90e2;
        color: white;
    }
    .product-table tbody tr:nth-child(even) {
        background-color: #f7f9fc;
    }
    .edit-button, .delete-button {
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
    }
    .edit-button {
        background-color: #4a90e2;
        color: white;
    }
    .edit-button:hover {
        background-color: #357ab9;
    }
    .delete-button {
        background-color: #ff4b5c;
        color: white;
    }
    .delete-button:hover {
        background-color: #e63946;
    }
</style>
</body>
</html>
