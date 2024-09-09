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
                    <a href="{{ route('gestion') }}" class="dropdown-toggle">Gestión de Productos</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('agregar') }}">Agregar Producto</a></li>
                        <li><a href="{{ route('modificar') }}">Modificar Producto</a></li>
                        <li><a href="{{ route('eliminar') }}">Eliminar Producto</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('clientes') }}">Clientes</a></li>
                <li><a href="{{ route('proveedores') }}">Proveedores</a></li>
                <li><a href="{{ route('pedidos') }}">Pedidos</a></li>
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
