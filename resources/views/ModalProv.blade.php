<!-- Modal Nuevo Proveedor -->
<div class="modal-nuevo" id="nuevoModal">
    <div class="modal-nuevo-content">
        <div class="modal-nuevo-header">
            <h2><i class="fas fa-plus-circle"></i> Agregar Proveedor</h2>
        </div>
        <div class="modal-nuevo-body">
            <form id="nuevoForm">
                <div class="form-nuevo-group">
                    <label>Razón Social</label>
                    <input type="text" id="nuevoRazonSocial" class="form-nuevo-input" placeholder="Ingrese razón social">
                </div>
                <div class="form-nuevo-group">
                    <label>Dirección</label>
                    <input type="text" id="nuevoDireccion" class="form-nuevo-input" placeholder="Ingrese dirección">
                </div>
                <div class="form-nuevo-group">
                    <label>RUC</label>
                    <input type="text" id="nuevoRUC" class="form-nuevo-input" placeholder="Ingrese RUC">
                </div>
                <div class="form-nuevo-group">
                    <label>Persona en contacto</label>
                    <input type="text" id="nuevoContacto" class="form-nuevo-input" placeholder="Ingrese nombre de contacto">
                </div>
                <div class="form-nuevo-group">
                    <label>Número de contacto</label>
                    <input type="text" id="nuevoNumero" class="form-nuevo-input" placeholder="Ingrese número de contacto">
                </div>
            </form>
        </div>
        <div class="modal-nuevo-footer">
            <button class="btn-nuevo-guardar">Guardar</button>
            <button class="btn-nuevo-cancelar">Cancelar</button>
        </div>
    </div>
</div>
<!-- Modal Ver Proveedor -->
<div class="modal" id="verModal">
    <div class="modal-content">
        <div class="modal-header">
            <h2><i class="fas fa-info-circle"></i> Información de Proveedor</h2>
        </div>
        <div class="modal-body">
            <div class="info-group">
                <label>Razón Social</label>
                <p id="verRazonSocial"></p>
            </div>
            <div class="info-group">
                <label>Dirección</label>
                <p id="verDireccion"></p>
            </div>
            <div class="info-group">
                <label>RUC</label>
                <p id="verRUC"></p>
            </div>
            <div class="info-group">
                <label>Persona en contacto</label>
                <p id="verContacto"></p>
            </div>
            <div class="info-group">
                <label>Número de contacto</label>
                <p id="verNumero"></p>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn-cerrar">Cerrar</button>
        </div>
    </div>
</div>

<!-- Modal Editar Proveedor -->
<div class="modal" id="editarModal">
    <div class="modal-content">
        <div class="modal-header">
            <h2><i class="fas fa-edit"></i> Editar Proveedor</h2>
        </div>
        <div class="modal-body">
            <form id="editForm">
                <div class="form-group">
                    <label>Razón Social</label>
                    <input type="text" id="editRazonSocial" class="form-input">
                </div>
                <div class="form-group">
                    <label>Dirección</label>
                    <input type="text" id="editDireccion" class="form-input">
                </div>
                <div class="form-group">
                    <label>RUC</label>
                    <input type="text" id="editRUC" class="form-input">
                </div>
                <div class="form-group">
                    <label>Persona en contacto</label>
                    <input type="text" id="editContacto" class="form-input">
                </div>
                <div class="form-group">
                    <label>Número de contacto</label>
                    <input type="text" id="editNumero" class="form-input">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button class="btn-guardar">Guardar</button>
            <button class="btn-cancelar">Cancelar</button>
        </div>
    </div>
</div>

<!-- Modal Eliminar Proveedor -->
<div class="modal" id="eliminarModal">
    <div class="modal-content">
        <div class="modal-header">
            <h2><i class="fas fa-trash"></i> Confirmación</h2>
        </div>
        <div class="modal-body">
            <p>¿Deseas eliminar al proveedor permanentemente?</p>
        </div>
        <div class="modal-footer">
            <button class="btn-continuar">Continuar</button>
            <button class="btn-cancelar">Cerrar</button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Funciones para abrir modales
    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'block';
    }

    // Función para cerrar modales
    function closeModals() {
        document.querySelectorAll('.modal').forEach(modal => {
            modal.style.display = 'none';
        });
    }

    // Event listeners para los botones
    document.querySelectorAll('.btn-view').forEach(btn => {
        btn.addEventListener('click', () => openModal('verModal'));
    });

    document.querySelectorAll('.btn-edit').forEach(btn => {
        btn.addEventListener('click', () => openModal('editarModal'));
    });

    document.querySelectorAll('.btn-delete').forEach(btn => {
        btn.addEventListener('click', () => openModal('eliminarModal'));
    });

    // Cerrar modales
    document.querySelectorAll('.btn-cerrar, .btn-cancelar').forEach(btn => {
        btn.addEventListener('click', closeModals);
    });

    // Cerrar modal al hacer click fuera
    window.addEventListener('click', (e) => {
        if (e.target.classList.contains('modal')) {
            closeModals();
        }
    });
    // Para el botón ver
    document.querySelectorAll('.btn-view').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const row = this.closest('tr');
            document.getElementById('verRazonSocial').textContent = row.cells[2].textContent;
            document.getElementById('verContacto').textContent = row.cells[3].textContent;
            document.getElementById('verRUC').textContent = row.cells[4].textContent;
            // Aquí puedes agregar los otros campos
            openModal('verModal');
        });
    });

    // Para el botón editar
    document.querySelectorAll('.btn-edit').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const row = this.closest('tr');
            document.getElementById('editRazonSocial').value = row.cells[2].textContent;
            document.getElementById('editContacto').value = row.cells[3].textContent;
            document.getElementById('editRUC').value = row.cells[4].textContent;
            // Aquí puedes agregar los otros campos
            openModal('editarModal');
        });
    });

    // Para el botón eliminar
    document.querySelectorAll('.btn-delete').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const row = this.closest('tr');
            document.querySelector('#eliminarModal .btn-continuar').onclick = function() {
                row.remove();
                closeModals();
            };
            openModal('eliminarModal');
        });
    });
});
// Función para guardar cambios en el formulario de edición
document.querySelector('#editarModal .btn-guardar').addEventListener('click', function() {
    const razonSocial = document.getElementById('editRazonSocial').value;
    const contacto = document.getElementById('editContacto').value;
    const ruc = document.getElementById('editRUC').value;
    // Aquí actualizarías los datos en la tabla
    // También deberías hacer una llamada AJAX al servidor para guardar los cambios
    closeModals();
});
// En el botón continuar del modal de eliminar
document.querySelector('#eliminarModal .btn-continuar').addEventListener('click', function() {
    const row = this.dataset.row;
    const id = row.querySelector('td:first-child').textContent;
    
    // Hacer la llamada AJAX para eliminar
    fetch(`/proveedores/${id}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        }
    })
    .then(response => response.json())
    .then(data => {
        if(data.success) {
            row.remove();
            closeModals();
        }
    });
});
document.querySelector('.btn-nuevo-cancelar').addEventListener('click', function() {
        document.getElementById('nuevoModal').style.display = 'none';
    });

document.querySelector('.btn-nuevo-guardar').addEventListener('click', function() {
        // Tu lógica de guardar
        document.getElementById('nuevoModal').style.display = 'none';
    });
</script>

<style>
/* Estilos para los modales */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    z-index: 1000;
}

.modal-content {
    position: relative;
    background-color: #fff;
    margin: 10% auto;
    width: 90%;
    max-width: 500px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.modal-header {
    padding: 15px;
    border-bottom: 1px solid #ddd;
    background-color: #f5f5f5;
    border-radius: 8px 8px 0 0;
}

.modal-header h2 {
    margin: 0;
    font-size: 20px;
    color: #333;
    display: flex;
}

.modal-body {
    padding: 20px;
    background-color: #ffffff;
}

.modal-footer {
    padding: 15px;
    text-align: right;
    border-top: 1px solid #ddd;
    background-color: #f5f5f5;
    border-radius: 0 0 8px 8px;
}

.info-group {
    margin-bottom: 15px;
}

.info-group label {
    display: block;
    color: #FF8C00;
    margin-bottom: 5px;
    font-weight: 500;
}

.info-group p {
    margin: 0;
    color: #333;
    padding: 8px;
    background-color: #f5f5f5;
    border-radius: 4px;
}

.form-group {
    margin-bottom: 15px;
}

.form-input {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ddd;
    border-radius: 4px;
    background-color: #f5f5f5;
}
.form-input::placeholder {
    color: #adb5bd;
}
.btn-cerrar,
.btn-guardar,
.btn-cancelar,
.btn-continuar {
    padding: 8px 16px;
    border-radius: 4px;
    border: none;
    cursor: pointer;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-cerrar,
.btn-cancelar {
    background-color: #ccc;
    color: #333;
    margin-left: 10px;
}

.btn-guardar,
.btn-continuar {
    background-color: #FF8C00;
    color: white;
}

.btn-cerrar:hover,
.btn-cancelar:hover {
    background-color: #b3b3b3;
}

.btn-guardar:hover,
.btn-continuar:hover {
    background-color: #ff9f2f;
}

/* Estilos para inputs cuando están en focus */
.form-input:focus {
    outline: none;
    border-color: #FF8C00;
    box-shadow: 0 0 0 2px rgba(255,140,0,0.2);
}

@media (max-width: 768px) {
    .modal-content {
        width: 95%;
        margin: 5% auto;
    }
    
    .btn-cerrar,
    .btn-guardar,
    .btn-cancelar,
    .btn-continuar {
        width: 100%;
        margin: 5px 0;
    }
    
    .modal-footer {
        display: flex;
        flex-direction: column-reverse;
        gap: 10px;
        padding: 15px 20px;
    }
}
/* Estilos específicos para el modal nuevo */
.modal-nuevo {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    z-index: 1000;
}

.modal-nuevo-content {
    position: relative;
    background-color: #fff;
    margin: 5% auto;
    width: 800px;
    border-radius: 4px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.modal-nuevo-header {
    padding: 15px 20px;
    background-color: #f8f9fa;
    border-bottom: 1px solid #dee2e6;
    border-radius: 4px 4px 0 0;
}

.modal-nuevo-header h2 {
    margin: 0;
    font-size: 18px;
    color: #333;
    display: flex;
    align-items: center;
    gap: 10px;
}

.modal-nuevo-body {
    padding: 50px;
}

.form-nuevo-group {
    margin-bottom: 20px;
}

.form-nuevo-group label {
    display: block;
    margin-bottom: 5px;
    color: #6c757d;
    font-size: 14px;
}

.form-nuevo-input {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ced4da;
    border-radius: 4px;
    font-size: 15px;
    background-color: #f8f9fa;
    transition: border-color 0.15s ease-in-out;
}

.form-nuevo-input:focus {
    border-color: #FF8C00;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(255,140,0,0.25);
}

.form-nuevo-input::placeholder {
    color: #adb5bd;
    opacity: 1;
}

.modal-nuevo-footer {
    padding: 15px 20px;
    border-top: 1px solid #dee2e6;
    background-color: #f8f9fa;
    border-radius: 0 0 4px 4px;
    display: flex;
    justify-content: flex-end;
    gap: 10px;
}

.btn-nuevo-guardar,
.btn-nuevo-cancelar {
    padding: 8px 16px;
    border-radius: 4px;
    border: none;
    font-weight: 500;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.2s;
}

.btn-nuevo-guardar {
    background-color: #FF8C00;
    color: white;
}

.btn-nuevo-cancelar {
    background-color: #e9ecef;
    color: #495057;
}

.btn-nuevo-guardar:hover {
    background-color: #ff9f2f;
}

.btn-nuevo-cancelar:hover {
    background-color: #dde0e3;
}

@media (max-width: 850px) {
    .modal-nuevo-content {
        width: 95%;
        margin: 5% auto;
    }

    .modal-nuevo-footer {
        flex-direction: column;
    }

    .btn-nuevo-guardar,
    .btn-nuevo-cancelar {
        width: 100%;
    }
}
</style>
