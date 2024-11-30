<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Factura</title>
</head>
<body>
@extends('layouts.app') <!-- Extiende el layout base -->

@section('title', 'Eliminar Factura') <!-- Título específico de esta vista -->

@section('content') <!-- Contenido específico de esta vista -->
<div class="container">
    <div class="factura-form">
        <h2>Eliminar Factura</h2>

        <!-- Instrucción -->
        <p>Seleccione la factura que desea eliminar:</p>

        <!-- Tabla con la lista de facturas -->
        <table class="factura-table">
            <thead>
                <tr>
                    <th>ID Factura</th>
                    <th>ID Cliente</th>
                    <th>Total Bruto</th>
                    <th>Fecha de Emisión</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Facturas de ejemplo -->
                <tr>
                    <td>101</td>
                    <td>12345</td>
                    <td>$1,500.00</td>
                    <td>2024-11-15</td>
                    <td>
                        <a href="#" class="delete-button" onclick="confirmDelete(101)">Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <td>102</td>
                    <td>67890</td>
                    <td>$2,200.00</td>
                    <td>2024-11-10</td>
                    <td>
                        <a href="#" class="delete-button" onclick="confirmDelete(102)">Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <td>103</td>
                    <td>54321</td>
                    <td>$800.00</td>
                    <td>2024-11-05</td>
                    <td>
                        <a href="#" class="delete-button" onclick="confirmDelete(103)">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Confirmación de eliminación -->
        <div id="confirmation" class="confirmation-box" style="display:none;">
            <h3>¿Está seguro de que desea eliminar esta factura?</h3>
            <p><strong>ID Factura:</strong> <span id="factura-id"></span></p>
            <form action="#" method="POST">
                @csrf
                <div class="form-buttons">
                    <button type="button" class="cancel-button" onclick="cancelDelete()">Cancelar</button>
                    <button type="submit" class="submit-button">Eliminar Factura</button>
                </div>
            </form>
        </div>
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
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table th, table td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ddd;
    }
    table th {
        background-color: #4a90e2;
        color: white;
    }
    table td {
        background-color: #f7f9fc;
    }
    .delete-button {
        color: red;
        text-decoration: none;
        cursor: pointer;
    }
    .delete-button:hover {
        text-decoration: underline;
    }
    .confirmation-box {
        margin-top: 20px;
        padding: 20px;
        background-color: #fff3cd;
        border: 2px solid #f0ad4e;
        border-radius: 5px;
        text-align: center;
    }
    .form-buttons {
        display: flex;
        justify-content: center;
        margin-top: 20px;
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

<script>
    // Función para mostrar el mensaje de confirmación
    function confirmDelete(facturaId) {
        document.getElementById('factura-id').textContent = facturaId;
        document.getElementById('confirmation').style.display = 'block';
    }

    // Función para cancelar la eliminación
    function cancelDelete() {
        document.getElementById('confirmation').style.display = 'none';
    }
</script>
</body>
</html>
