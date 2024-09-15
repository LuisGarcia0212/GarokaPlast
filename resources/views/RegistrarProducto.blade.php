<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app') <!-- Extiende el layout base -->

@section('title', 'Registrar Producto') <!-- Título específico de esta vista -->

@section('content') <!-- Contenido específico de esta vista -->
<div class="container">
    <div class="product-form">
        <h2>Información del producto</h2>
        <form action="#" method="POST"> <!-- Ajusta la ruta según corresponda -->
            @csrf
            <div class="form-grid">
                <div class="form-group">
                    <label for="nombre">Nombre del producto</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="nacionalidad">Nacionalidad</label>
                    <input type="text" id="nacionalidad" name="nacionalidad" required>
                </div>
                <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" id="color" name="color" required>
                </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" step="any" id="cantidad" name="cantidad" required>
                </div>
                <div class="form-group">
                    <label for="ancho">Ancho</label>
                    <input type="number" step="any" id="ancho" name="ancho" required>
                </div>
                <div class="form-group">
                    <label for="largo">Largo</label>
                    <input type="number" step="any" id="largo" name="largo" required>
                </div>
                <div class="form-group">
                    <label for="espesor">Espesor</label>
                    <input type="number" step="any" id="espesor" name="espesor" required>
                </div>
                <div class="form-group">
                    <label for="unidad">Unidad de medida</label>
                    <input type="text" id="unidad" name="unidad" list="unidades" required>
                    <datalist id="unidades">
                        <option value="ROLLOS"></option>
                        <option value="KILOS"></option>
                        <option value="FARDOS"></option>
                    </datalist>
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