<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- CDN de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                    <a href="{{ route('gestion') }}" class="dropdown-toggle">
                        <i class="fas fa-box"></i> Gestión de Productos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('agregar') }}">Agregar Producto</a></li>
                        <li><a href="{{ route('modificar') }}">Modificar Producto</a></li>
                        <li><a href="{{ route('eliminar') }}">Eliminar Producto</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('clientes') }}">
                        <i class="fas fa-users"></i> Clientes
                    </a>
                </li>
                <li>
                    <a href="{{ route('proveedores') }}">
                        <i class="fas fa-truck"></i> Proveedores
                    </a>
                </li>
                <li>
                    <a href="{{ route('pedidos') }}">
                        <i class="fas fa-shopping-cart"></i> Pedidos
                    </a>
                </li>
                <li>
                    <a href="{{ route('configurar') }}">
                        <i class="fas fa-cogs"></i> Configuración
                    </a>
                </li>
                <li>
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" style="background: none; border: none; color: inherit; padding: 0; font: inherit; cursor: pointer;">
            <i class="fas fa-sign-out-alt"></i> Salir
        </button>
    </form>
</li>
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
