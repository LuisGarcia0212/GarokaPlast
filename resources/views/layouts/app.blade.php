<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Menú lateral -->
    <div class="sidebar" id="sidebar">
        <div class="imageLogo">
        <a href="{{ route('menu') }}">
            <img src="{{ asset('images/Garoka.png') }}" alt="Logo Garoka's Plast" style="height:40px">
        </a>    
        </div>
        <div class="profile">
            <img src="{{ asset('images/rata.png') }}" alt="María" class="profile-image">
            <H2>Le Carles</H2>
            <br>
        </div>
        <nav>
            <ul>
            <li class="dropdown">
                    <a href="{{ route('gestion') }}" class="dropdown-toggle">Productos</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('registrarproducto') }}">Registrar Producto</a></li>
                        <li><a href="{{ route('modificarproducto') }}">Modificar Producto</a></li>
                        <li><a href="{{ route('eliminarproducto') }}">Eliminar Producto</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ route('clientes') }}" class="dropdown-toggle">Clientes</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('registrarcliente') }}">Registrar Cliente</a></li>
                        <li><a href="{{ route('modificarcliente') }}">Modificar Cliente</a></li>
                        <li><a href="{{ route('eliminarcliente') }}">Eliminar Cliente</a></li>
                    </ul>
                <li class="dropdown">
                    <a href="{{ route('proveedores') }}" class="dropdown-toggle">Proveedores</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('registrarproducto') }}">Registrar Proveedor</a></li>
                        <li><a href="{{ route('modificarproducto') }}">Modificar Proveedor</a></li>
                        <li><a href="{{ route('eliminarproducto') }}">Eliminar Proveedor</a></li>
                        <li><a href="{{ route('gestionarproveedor') }}">Gestionar Sucursales</a></li>
                    </ul>
                <li class="dropdown">
                    <a href="{{ route('pedidos') }}" class="dropdown-toggle">Transportistas</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('registrarproducto') }}">Registrar Transportista</a></li>
                        <li><a href="{{ route('modificarproducto') }}">Modificar Transportista</a></li>
                        <li><a href="{{ route('eliminarproducto') }}">Eliminar Transportista</a></li>
                    </ul>
                <li>
                <li class="dropdown">
                    <a href="{{ route('pedidos') }}" class="dropdown-toggle">Entradas</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('registrarproducto') }}">Facturas</a></li>
                        <li><a href="{{ route('modificarproducto') }}">Guias</a></li>
                    </ul>
                <li>
                <li class="dropdown">
                    <a href="{{ route('pedidos') }}" class="dropdown-toggle">Salidas</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('registrarproducto') }}">Facturas</a></li>
                        <li><a href="{{ route('modificarproducto') }}">Guias</a></li>
                    </ul>
                <li>
                <li><a href="{{ route('configurar') }}">Configuración</a></li>
                <li><a href="{{ route('login.submit') }}">Salir</a></li>
            </ul>
        </nav>
    </div>

    <!-- Barra superior con el ícono del menú hamburguesa -->
    <div class="topbar">
        <div class="hamburger-menu" id="menuToggle">
            <img src="{{ asset('images/botondemenu.png') }}" alt="Menu" class="hamburger-icon" id="hamburgerIcon">
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="main-content">
        @yield('content') <!-- Aquí va el contenido específico de cada vista -->
    </div>

    <!-- Script para mostrar/ocultar el menú lateral y mover las tres franjas -->
    <script>
        document.getElementById('menuToggle').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            var icon = document.getElementById('hamburgerIcon');
            sidebar.classList.toggle('active');
            icon.classList.toggle('shift-left');
        });
    </script>
</body>
</html>
