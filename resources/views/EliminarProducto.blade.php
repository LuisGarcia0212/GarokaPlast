<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app') <!-- Extiende el layout base -->

@section('title', 'Eliminar Producto') <!-- Título específico de esta vista -->

@section('content') <!-- Contenido específico de esta vista -->
<div class="container">
    <div class="product-form">
        <h2>Eliminar Producto</h2>
        
        <!-- Sección para buscar el producto por nombre -->
        <form action="#" method="GET"> <!-- Ajusta la ruta para buscar el producto -->
            @csrf
            <div class="form-group">
                <label for="buscar_nombre">Buscar por Nombre del Producto</label>
                <input type="text" id="buscar_nombre" name="buscar_nombre" placeholder="Ingrese el nombre del producto" required>
                <button type="submit" class="buscar-button">Buscar</button>
            </div>
        </form>

        <!-- Sección para mostrar la información del producto encontrado -->
        <form action="#" method="POST"> <!-- Ajusta la ruta para eliminar el producto -->
            @csrf
            @method('DELETE') <!-- Método para enviar la solicitud de eliminación -->
            
            <!-- Campos bloqueados solo para mostrar los datos del producto -->
            <div class="form-grid">
                <div class="form-group">
                    <label for="nombre">Nombre del producto</label>
                    <input type="text" id="nombre" name="nombre" value="Nombre del Producto" disabled>
                </div>
                <div class="form-group">
                    <label for="nacionalidad">Nacionalidad</label>
                    <input type="text" id="nacionalidad" name="nacionalidad" value="Nacionalidad del Producto" disabled>
                </div>
                <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" id="color" name="color" value="Color del Producto" disabled>
                </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" step="any" id="cantidad" name="cantidad" value="Cantidad del Producto" disabled>
                </div>
                <div class="form-group">
                    <label for="ancho">Ancho</label>
                    <input type="number" step="any" id="ancho" name="ancho" value="Ancho del Producto" disabled>
                </div>
                <div class="form-group">
                    <label for="largo">Largo</label>
                    <input type="number" step="any" id="largo" name="largo" value="Largo del Producto" disabled>
                </div>
                <div class="form-group">
                    <label for="espesor">Espesor</label>
                    <input type="number" step="any" id="espesor" name="espesor" value="Espesor del Producto" disabled>
                </div>
                <div class="form-group">
                    <label for="unidad">Unidad de medida</label>
                    <input type="text" id="unidad" name="unidad" value="Unidad de Medida del Producto" disabled>
                </div>
            </div>
            
            <!-- Confirmación para eliminar el producto -->
            <div class="form-buttons">
                <button type="button" class="cancel-button">Cancelar</button>
                <button type="submit" class="delete-button">Eliminar Producto</button>
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
    .form-group input:disabled {
        background-color: #e0e0e0; /* Fondo gris para los campos deshabilitados */
        color: #808080; /* Texto gris */
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
    .form-buttons .delete-button {
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
    .delete-button {
        background-color: #e63946; /* Rojo más intenso para el botón de eliminar */
    }
    .cancel-button:hover {
        background-color: #d63031; /* Rojo más oscuro al pasar el cursor */
    }
    .delete-button:hover {
        background-color: #c0392b; /* Rojo más oscuro al pasar el cursor */
    }
</style>
</body>
</html>