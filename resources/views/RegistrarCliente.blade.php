<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app') <!-- Extiende el layout base -->

@section('title', 'Registrar Cliente') <!-- Título específico de esta vista -->

@section('content') <!-- Contenido específico de esta vista -->
<div class="container">
    <div class="client-form">
        <h2>Información del cliente</h2>
        <form action="#" method="POST"> <!-- Ajusta la ruta según corresponda -->
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
                <button type="submit" class="submit-button">Guardar Registro</button>
            </div>
        </form>
    </div>
</div>
@endsection

<!-- Estilo CSS con un azul menos intenso y esquema de colores ajustado -->
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
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr; /* 2 columnas iguales */
        gap: 20px; /* Espacio entre las columnas */
    }
    .form-group {
        display: flex;
        flex-direction: column;
    }
    .form-group label {
        margin-bottom: 5px;
        font-weight: bold;
        color: #4a90e2; /* Azul menos intenso */
    }
    .form-group input {
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