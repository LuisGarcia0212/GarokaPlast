<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Producto</title>
</head>
<body>
@extends('layouts.app') <!-- Extiende el layout base -->

@section('title', 'Registrar Producto') <!-- Título específico de esta vista -->

@section('content') <!-- Contenido específico de esta vista -->
<div class="container">
    <div class="product-form">
        <h2>Registrar Nuevo Producto</h2>

        <!-- Formulario para registrar un nuevo producto -->
        <form action="#" method="POST"> <!-- Ajusta la ruta para registrar el producto -->
            @csrf
            <div class="form-grid">
                <div class="form-group">
                    <label for="nombre">Nombre del producto</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre del producto" required>
                </div>
                <div class="form-group">
                    <label for="nacionalidad">Nacionalidad</label>
                    <input type="text" id="nacionalidad" name="nacionalidad" placeholder="Ingrese la nacionalidad" required>
                </div>
                <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" id="color" name="color" placeholder="Ingrese el color" required>
                </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" step="any" id="cantidad" name="cantidad" placeholder="Ingrese la cantidad" required>
                </div>
                <div class="form-group">
                    <label for="ancho">Ancho</label>
                    <input type="number" step="any" id="ancho" name="ancho" placeholder="Ingrese el ancho" required>
                </div>
                <div class="form-group">
                    <label for="largo">Largo</label>
                    <input type="number" step="any" id="largo" name="largo" placeholder="Ingrese el largo" required>
                </div>
                <div class="form-group">
                    <label for="espesor">Espesor</label>
                    <input type="number" step="any" id="espesor" name="espesor" placeholder="Ingrese el espesor" required>
                </div>
                <div class="form-group">
                    <label for="unidad">Unidad de medida</label>
                    <input type="text" id="unidad" name="unidad" list="unidades" placeholder="Seleccione una unidad" required>
                    <datalist id="unidades">
                        <option value="ROLLOS"></option>
                        <option value="KILOS"></option>
                        <option value="FARDOS"></option>
                    </datalist>
                </div>
            </div>
            <div class="form-buttons">
                <button type="reset" class="cancel-button">Cancelar</button>
                <button type="submit" class="submit-button">Registrar Producto</button>
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
