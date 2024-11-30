@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="content-header">
        <h1>Solicitudes</h1>
        <button class="btn-nuevo" onclick="openModal('nuevoModal')">
            <i class="fa fa-plus"></i> Nueva Solicitud
        </button>
    </div>

    <div class="search-section">
        <div class="mostrar-section">
            Mostrar:
            <select class="select-items">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            más
        </div>
        
        <div class="search-box">
            Buscar:
            <input type="text" id="searchInput" class="search-input">
        </div>
    </div>

    <div class="table-container">
        <table class="solicitudes-table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Fecha de Creación</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PO-001</td>
                    <td>2024-08-05, 15:25</td>
                    <td>Cartón</td>
                    <td>100</td>
                    <td><span class="estado atendido">Atendido</span></td>
                    <td>
                        <div class="dropdown">
                            <button class="dropbtn"><i class="fas fa-ellipsis-v"></i></button>
                            <div class="dropdown-content">
                                <a href="{{ route('solicitudes.modals') }}" class="btn-view"><i class="fas fa-eye"></i> Ver</a>
                                <a href="{{ route('solicitudes.modals') }}" class="btn-edit"><i class="fas fa-edit"></i> Editar</a>
                                <a href="{{ route('solicitudes.modals') }}" class="btn-delete"><i class="fas fa-trash"></i> Eliminar</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <div class="pagination">
        <button class="btn-page">Anterior</button>
        <span class="page-number active">1</span>
        <button class="btn-page">Siguiente</button>
    </div>
    @include('ModalSoli')
</div>
<script>
    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'block';
    }

    function closeModals() {
        document.querySelectorAll('.modal').forEach(modal => {
            modal.style.display = 'none';
        });
    }
    
document.addEventListener('DOMContentLoaded', function() {
    const dropbtns = document.querySelectorAll('.dropbtn');
    
    dropbtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const dropdownContent = this.nextElementSibling;
            
            // Cerrar todos los otros dropdowns
            document.querySelectorAll('.dropdown-content').forEach(drop => {
                if (drop !== dropdownContent) {
                    drop.classList.remove('show');
                }
            });
            
            dropdownContent.classList.toggle('show');
        });
    });

    // Cerrar dropdown al hacer click fuera
    window.addEventListener('click', function(e) {
        if (!e.target.matches('.dropbtn')) {
            document.querySelectorAll('.dropdown-content').forEach(drop => {
                drop.classList.remove('show');
            });
        }
    });
});
    // Event listener para el botón de guardar en el modal de "Nuevo Solicitud"
    document.querySelector('.btn-nuevo-guardar').addEventListener('click', function() {
        const producto = document.getElementById('nuevoProducto').value;
        const cantidad = document.getElementById('nuevoCantidad').value;
        const estado = document.getElementById('nuevoEstado').value;

        if (!producto || !cantidad || !estado) {
            alert('Por favor complete todos los campos');
            return;
        }

        // Obtener la fecha actual formateada
        const fecha = new Date().toLocaleString('es-ES', {
            year: 'numeric',
            month: '2-digit',
            day: '2-digit',
            hour: '2-digit',
            minute: '2-digit'
        });

         // Obtener el último código y generar el siguiente
        const rows = document.querySelectorAll('.solicitudes-table tbody tr');
        let lastCode = 0;
        
        if (rows.length > 0) {
            const lastCodeText = rows[rows.length - 1].cells[0].textContent;
            lastCode = parseInt(lastCodeText.replace('PO-', ''));
        }
        
        // Generar nuevo código
        const newCode = lastCode + 1;
        const codigo = `PO-${String(newCode).padStart(3, '0')}`;

        // Crear nueva fila
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td>${codigo}</td>
            <td>${fecha}</td>
            <td>${producto}</td>
            <td>${cantidad}</td>
            <td><span class="estado ${estado.toLowerCase()}">${estado}</span></td>
            <td>
                <div class="dropdown">
                    <button class="dropbtn"><i class="fas fa-ellipsis-v"></i></button>
                    <div class="dropdown-content">
                        <a href="#" class="btn-view"><i class="fas fa-eye"></i> Ver</a>
                        <a href="#" class="btn-edit"><i class="fas fa-edit"></i> Editar</a>
                        <a href="#" class="btn-delete"><i class="fas fa-trash"></i> Eliminar</a>
                    </div>
                </div>
            </td>
        `;

        document.querySelector('.solicitudes-table tbody').appendChild(newRow);
        document.getElementById('nuevoForm').reset();
        closeModals();
    });

// Delegación de eventos para los botones de tres puntos y el contenido del menú
document.querySelector('.table-container').addEventListener('click', function(event) {
    if (event.target.closest('.dropbtn')) {
        // Manejo del botón de los tres puntos
        event.stopPropagation();
        const dropdownContent = event.target.closest('.dropdown').querySelector('.dropdown-content');

        // Cerrar todos los otros dropdowns
        document.querySelectorAll('.dropdown-content').forEach(drop => {
            if (drop !== dropdownContent) {
                drop.classList.remove('show');
            }
        });

        // Alternar el menú desplegable del botón clicado
        dropdownContent.classList.toggle('show');
    }

    if (event.target.closest('.btn-view')) {
        event.preventDefault();
        openModal('verModal');
    }

    if (event.target.closest('.btn-edit')) {
        event.preventDefault();
        openModal('editarModal');
    }

    if (event.target.closest('.btn-delete')) {
        event.preventDefault();
        const row = event.target.closest('tr');
        row.remove();
    }
});

// Funcionalidad de búsqueda
document.getElementById('searchInput').addEventListener('keyup', function() {
    const searchValue = this.value.toLowerCase();
    const rows = document.querySelectorAll('.providers-table tbody tr');

    rows.forEach(row => {
        const rowText = row.textContent.toLowerCase();
        row.style.display = rowText.includes(searchValue) ? '' : 'none';
    });
});

</script>
<style>
.main-content {
    width: calc(100% - 280px); 
    font-size: 14px;
    position: relative;
    min-height: calc(100vh - 75px);
}

.content-header {
    background-color: #bbbbbb;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    border-radius: 4px;
    padding: 10px 20px; /* Reducir el padding */
    height: 60px; /* Establecer una altura fija más pequeña */
}

.content-header h1 {
    color: #333;
    font-size: 50px;
}

.btn-nuevo {
    background-color: #FF8C00;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.search-section {
    display: flex;
    justify-content: space-between;
    margin-bottom: 30px;
    align-items: center;
    font-size: 16px;
}

.select-items {
    padding: 8px;
    margin: 0 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
}

.search-input {
    padding: 10px;
    margin-left: 10px;
    width: 300px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 20px;
}

.table-container {
    margin-top: 10px;
    background: #d1cfcf;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    overflow: visible !important;
}

.solicitudes-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 20px;
}

.solicitudes-table th,
.solicitudes-table td {
    padding: 35px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.solicitudes-table th {
    background-color: #f5f5f5;
    font-weight: 500;
    font-size: 20px;
}

.estado {
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 500;
}

.atendido{
    background-color: #4CAF50;
    color: white;
}

.en_espera {
    background-color: #FFA500;
    color: white;
}
.retrasado, .estado.retrasado {
    background-color: #FF5252;
    color: white;
}

/* Estilos para el dropdown */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn {
    background-color: transparent;
    border: none;
    cursor: pointer;
    padding: 8px;
    font-size: 18px;
    color: #666;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #fff;
    min-width: 160px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    border-radius: 4px;
    z-index: 1000;
}
.dropdown-content.show {
    display: block;
    left: 20px;
    position: absolute;
    z-index: 1000;
    top: 180%; 
    transform: translateY(-50%);
}
.dropdown-content a {
    color: #333;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    transition: background-color 0.3s;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.btn-view {
    color: #4CAF50;
}

.btn-edit {
    color: #2196F3;
}

.btn-delete {
    color: #f44336;
}

.pagination {
    display: flex;
    margin-left: 72%;
    align-items: center;
    gap: 15px;
    margin-top: 30px;
}

.btn-page {
    padding: 8px 20px;
    border: 1px solid #ddd;
    background: white;
    cursor: pointer;
    border-radius: 4px;
    font-size: 16px;
}

.page-number {
    padding: 8px 15px;
    font-size: 16px;
}

.page-number.active {
    background-color: #FF8C00;
    color: white;
    border-radius: 4px;
}

@media (max-width: 768px) {
    .main-content {
        width: 100%;
        padding: 15px;
    }

    .search-section {
        flex-direction: column;
        gap: 15px;
    }

    .search-input {
        width: 100%;
    }

    .content-header {
        flex-direction: column;
        gap: 15px;
    }

    .btn-nuevo {
        width: 100%;
    }
}
</style>
@endsection
