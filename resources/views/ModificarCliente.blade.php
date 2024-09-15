<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app') <!-- Extiende el layout base -->

@section('title', 'Modificar Cliente') <!-- Título específico de esta vista -->

@section('content') <!-- Contenido específico de esta vista -->
<div class="container">
    <div class="client-form">
        <h2>Modificar Datos del Cliente</h2>
        
        <!-- Sección para buscar al cliente por RUC -->
        <form action="#" method="GET"> <!-- Ajusta la ruta para buscar el cliente -->
            @csrf
            <div class="form-group">
                <label for="buscar_ruc">Buscar por RUC</label>
                <input type="text" id="buscar_ruc" name="buscar_ruc" placeholder="Ingrese RUC del cliente" required>
                <button type="submit" class="buscar-button">Buscar</button>
            </div>
        </form>

        <!-- Sección para modificar los datos del cliente una vez encontrado -->
        <form action="#" method="POST"> <!-- Ajusta la ruta para actualizar el cliente -->
            @csrf
            <div class="form-grid">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="dni">DNI</label>
                    <input type="text" id="dni" name="dni" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" id="telefono" name="telefono" required>
                </div>
                <div class="form-group">
                    <label for="razon_social">Razón Social</label>
                    <input type="text" id="razon_social" name="razon_social" required>
                </div>
                <div class="form-group">
                    <label for="ruc">RUC</label>
                    <input type="text" id="ruc" name="ruc" required>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" id="direccion" name="direccion" required>
                </div>
            </div>
            <div class="form-buttons">
                <button type="button" class="cancel-button">Cancelar</button>
                <button type="submit" class="submit-button">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>
@endsection

<!-- Estilo CSS con el esquema de colores azul menos intenso -->
<style>
    .container {
        width: 90%;
        margin: auto;
        padding: 20px;
        background-color: #e0f0ff; /* Fondo azul muy claro */
        border-radius: 8px;
        border: 2px solid #4a90e2; /* Borde azul menos intenso */
    }
    h2 {
        font-size: 24px;
        color: #000; /* Texto negro */
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
        color: #4a90e2; /* Azul menos intenso */
    }
    .form-group input {
        flex-basis: 70%;
        padding: 10px;
        border: 1px solid #4a90e2; /* Borde azul menos intenso */
        border-radius: 5px;
        background-color: #f7f9fc; /* Fondo gris claro */
        color: #000;
    }
    .form-group input:focus {
        border-color: #ff4b5c; /* Borde rojo al hacer foco */
        outline: none;
    }
    .buscar-button {
        padding: 10px 20px;
        margin-left: 10px;
        background-color: #4a90e2; /* Azul menos intenso para botón de búsqueda */
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    .buscar-button:hover {
        background-color: #357ab9; /* Azul más oscuro al pasar el cursor */
    }
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr; /* 2 columnas iguales */
        gap: 20px; /* Espacio entre las columnas */
    }
    .form-buttons {
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
        grid-column: 1 / span 2; /* Los botones ocupan ambas columnas */
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
        background-color: #ff4b5c; /* Rojo para el botón de cancelar */
    }
    .submit-button {
        background-color: #4a90e2; /* Azul menos intenso para el botón de guardar */
    }
    .cancel-button:hover {
        background-color: #e63946; /* Rojo más oscuro al pasar el cursor */
    }
    .submit-button:hover {
        background-color: #357ab9; /* Azul más oscuro al pasar el cursor */
    }
</style>
</body>
</html>