<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Factura</title>
</head>
<body>
@extends('layouts.app') <!-- Extiende el layout base -->

@section('title', 'Agregar Factura') <!-- Título específico de esta vista -->

@section('content') <!-- Contenido específico de esta vista -->
<div class="container">
    <div class="factura-form">
        <h2>Agregar Nueva Factura</h2>

        <!-- Formulario para agregar una nueva factura -->
        <form action="#" method="POST"> <!-- Ajusta la ruta para agregar la factura -->
            @csrf
            <div class="form-grid">
                <div class="form-group">
                    <label for="id_cliente">ID Cliente</label>
                    <input type="text" id="id_cliente" name="id_cliente" placeholder="Ingrese el ID del cliente" required>
                </div>
                <div class="form-group">
                    <label for="total_bruto">Total Bruto</label>
                    <input type="number" step="any" id="total_bruto" name="total_bruto" placeholder="Ingrese el total bruto" required>
                </div>
                <div class="form-group">
                    <label for="fecha_emision">Fecha de Emisión</label>
                    <input type="date" id="fecha_emision" name="fecha_emision" required>
                </div>
            </div>
            <div class="form-buttons">
                <button type="reset" class="cancel-button">Cancelar</button>
                <button type="submit" class="submit-button">Agregar Factura</button>
            </div>
        </form>
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
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    .form-buttons {
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
        grid-column: 1 / span 2;
    }
    .form-buttons .cancel-button, 
    .form-buttons .submit-button {
        padding: 10px 20px;
        color: white;
        border: none;
        border-radius: 5px;
        margin-left: 10px;
        cursor: pointer;
        font-size: 16px;
    }
    .cancel-button {
        background-color: #ff4b5c;
    }
    .submit-button {
        background-color: #4a90e2;
    }
    .cancel-button:hover {
        background-color: #e63946;
    }
    .submit-button:hover {
        background-color: #357ab9;
    }
</style>
</body>
</html>
