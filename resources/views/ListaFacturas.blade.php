<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Facturas</title>
</head>
<body>
@extends('layouts.app') <!-- Extiende el layout base -->

@section('title', 'Lista de Facturas') <!-- Título específico de esta vista -->

@section('content') <!-- Contenido específico de esta vista -->
<div class="container">
    <div class="factura-list">
        <h2>Lista de Facturas</h2>

        <!-- Sección para buscar facturas -->
        <form action="#" method="GET"> <!-- Ajusta la ruta para la búsqueda -->
            @csrf
            <div class="form-group">
                <label for="buscar_factura">Buscar Factura</label>
                <input type="text" id="buscar_factura" name="buscar_factura" placeholder="Buscar por ID Cliente o Fecha" required>
                <button type="submit" class="buscar-button">Buscar</button>
            </div>
        </form>

        <!-- Tabla para mostrar la lista de facturas -->
        <table class="factura-table">
            <thead>
                <tr>
                    <th>ID Cliente</th>
                    <th>Total Bruto</th>
                    <th>Fecha de Emisión</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Ejemplo de filas (esto se generará dinámicamente) -->
                <tr>
                    <td>12345</td>
                    <td>$1,500.00</td>
                    <td>2024-11-15</td>
                    <td>
                        <button class="view-button">Ver</button>
                        <button class="delete-button">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>67890</td>
                    <td>$3,200.00</td>
                    <td>2024-11-18</td>
                    <td>
                        <button class="view-button">Ver</button>
                        <button class="delete-button">Eliminar</button>
                    </td>
                </tr>
                <!-- Fin de ejemplo -->
            </tbody>
        </table>
    </div>
</div>
@endsection

<!-- Estilo CSS reutilizando el esquema de colores -->
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
    .factura-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    .factura-table th, .factura-table td {
        border: 1px solid #4a90e2;
        padding: 10px;
        text-align: center;
    }
    .factura-table th {
        background-color: #4a90e2;
        color: white;
    }
    .factura-table tbody tr:nth-child(even) {
        background-color: #f7f9fc;
    }
    .view-button, .delete-button {
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
    }
    .view-button {
        background-color: #4a90e2;
        color: white;
    }
    .view-button:hover {
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
