
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Garoka Plast</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
<div class="main-menu">
<header class="header">
    <a href="{{ route('menu') }}" class="logo">
        <img src="{{ asset('images/Garoka.png') }}" alt="Logo Garoka's Plast" class="pesheto" style="height:65px">
    </a>
    <button type="button" class="button-close fa fa-times js__menu_close"></button>
    <div class="user">
        <a href="#" class="avatar">
            <img src="{{ asset('images/rata.png') }}" alt="">
            <span class="status online"></span>
        </a>
        <h5 class="name"><a href="profile.html">Calos Afedo</a></h5>
        <h5 class="position">Administrator</h5>

    </div>
    <!-- /.user -->
</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<h5 class="title">Gestión de Productos</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li class="current">
					<a class="waves-effect" href="index.html"><i class="menu-icon fa fa-home"></i><span>Dashboard</span></a>
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-flag"></i><span>Productos</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{ route('agregar') }}">Registrar Producto</a></li>
						<li><a href="{{ route('modificar') }}">Editar productos</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-adjust"></i><span>Factura</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="ui-buttons.html">Agregar Factura</a></li>
						<li><a href="ui-cards.html">Editar Factura</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
				<li>
        <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-adjust"></i><span>Reposición</span><span class="notice notice-yellow">2</span></a>
          <ul class="sub-menu js__content">
						<li><a href="ui-buttons.html">Nueva reposición</a></li>
					</ul>
        </li>
        <li>
					<a class="waves-effect" href="{{ route('gestion') }}"><i class="menu-icon fa fa-calendar"></i><span>Stock</span></a>
				</li>
			</ul>
			<!-- /.menu js__accordion -->
			<h5 class="title">Gestión de Proveedores</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li>
        <a class="waves-effect" href="{{ route('proveedores') }}"><i class="menu-icon fa fa-calendar"></i><span>Proveedores</span></a>
				</li>
			</ul>
			<!-- /.menu js__accordion -->
			<h5 class="title">Adicional</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
      <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fas fa-file-alt"></i><span>Configuración</span><span class="notice notice-blue">3</span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{ route('configurar') }}">Perfil</a></li>
						<li><a href="page-login.html">Cambiar Datos</a></li>
						<li><a href="page-register.html">Cambiar Contraseña</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
				<li>
					<a class="waves-effect" href="inbox.html"><i class="menu-icon fa fa-envelope"></i><span>Chatbot</span><span class="notice notice-danger">New</span></a>
				</li>
        <li>
					<a class="waves-effect" href="{{ route('logout') }}"><i class="menu-icon fa fa-calendar"></i><span>Salir</span></a>
				</li>

			</ul>
			<!-- /.menu js__accordion -->
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
    <div class="float-left">
        <!-- Botón de menú tipo hamburguesa -->
        <button type="button" class="menu-mobile-button fas fa-bars js__menu_mobile"><div class="topbar">
        <div class="hamburger-menu" id="menuToggle">
            <img src="{{ asset('images/botondemenu.png') }}" alt="Menu" class="hamburger-icon" id="hamburgerIcon" style="width: 30px;
    height: 30px;
    transition: transform 0.3s ease-in-out;
    margin-left: 0px;">
        </div>
    </div></button>
        <!-- Texto Home -->
        <h1 class="page-title">Home</h1>
    </div>
    <!-- /.float-left -->
</div>

<!-- /.fixed-navbar -->

<!-- Contenedor principal para el contenido de las vistas -->
  <div class="main-content">
    @yield('content')
  </div>

<!-- /#message-popup -->
<div id="color-switcher">
	<div id="color-switcher-button" class="btn-switcher">
		<div class="inside waves-effect waves-circle waves-light">
			<i class="ico fas fa-cog"></i>
		</div>
		<!-- .inside waves-effect waves-circle -->
	</div>
	<!-- .btn-switcher -->
	
	<!-- /.content -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    // Maneja el click en los elementos del menú con submenús
    $('.js__control').on('click', function(e) {
        e.preventDefault();
        
        // Toggle (mostrar/ocultar) el submenú al hacer clic
        $(this).next('.js__content').slideToggle();

        // Cambia el ícono de flecha
        $(this).find('.menu-arrow').toggleClass('fa-angle-down fa-angle-up');
    });

    // Cerrar el menú lateral cuando se hace clic en el botón de cerrar
    $('.js__menu_close').on('click', function() {
        $('.main-menu').toggleClass('closed');
    });
});

$(document).ready(function() {
    // Funcionalidad para el botón de menú tipo hamburguesa
    $('.js__menu_mobile').on('click', function() {
        $('.main-menu').toggleClass('menu-open');  // Agregar o quitar clase para abrir/cerrar el menú
    });
});

</script>


<style>
@import 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700';
@import url(../fonts/font-awesome/css/fontawesome-all.min.css);
@import url(../plugin/bootstrap/css/bootstrap.min.css);
@import url(../plugin/nprogress/nprogress.css);

html,
body {
  position: relative;
  height: 100%;
  background: #f5f7fa;
  color: #505458;
  font-size: 14px;
}
#wrapper {
  position: relative;
  top: 0px;
  z-index: 10;
  width: 100%;
  min-height: 100%;
  transform: translate(0, 0);
  -webkit-transform: translate(0, 0);
  -moz-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  background: #f5f7fa;
  overflow: hidden;
  transition: transform 0.4s ease;
  -webkit-transition: -webkit-transform 0.4s ease;
  -moz-transition: -moz-transform 0.4s ease;
  -o-transition: -o-transform 0.4s ease;
  -ms-transition: -ms-transform 0.4s ease;
}
@media (min-width: 1025px) {
  #wrapper {
    top: 0px !important;
  }
}
img {
  max-width: 100%;
  height: auto;
  -webkit-backface-visibility: hidden;
}
input,
button,
a {
  transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -ms-transition: all 0.4s ease;
  -webkit-transition: all 0.4s ease;
}
a {
  text-decoration: none !important;
  outline: none;
  color: #757575;
}
a:hover,
a:active,
a:focus {
  text-decoration: none !important;
  outline: none;
  color: #757575;
}
input,
button {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  outline: none;
}
label {
  font-weight: 500;
  margin-bottom: 10px;
}
/* Animation */
@-moz-keyframes pulse {
  0% {
    -moz-transform: scale(0);
    opacity: 0.0;
  }
  25% {
    -moz-transform: scale(0);
    opacity: 0.1;
  }
  50% {
    -moz-transform: scale(0.1);
    opacity: 0.3;
  }
  75% {
    -moz-transform: scale(0.5);
    opacity: 0.5;
  }
  100% {
    -moz-transform: scale(1);
    opacity: 0.0;
  }
}
@-webkit-keyframes pulse {
  0% {
    -webkit-transform: scale(0);
    opacity: 0.0;
  }
  25% {
    -webkit-transform: scale(0);
    opacity: 0.1;
  }
  50% {
    -webkit-transform: scale(0.1);
    opacity: 0.3;
  }
  75% {
    -webkit-transform: scale(0.5);
    opacity: 0.5;
  }
  100% {
    -webkit-transform: scale(1);
    opacity: 0.0;
  }
}

.fa-hover {
  font-size: 14px;
  line-height: 22px;
  padding-top: 5px;
  padding-bottom: 5px;
  margin-bottom: 5px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -ms-transition: all 0.4s ease;
  -webkit-transition: all 0.4s ease;
  cursor: pointer;
}
.fa-hover .ico,
.fa-hover .fa {
  display: inline-block;
  height: 22px;
  vertical-align: top;
  min-width: 28px;
  font-size: 14px;
  line-height: 22px;
  transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -ms-transition: all 0.4s ease;
  -webkit-transition: all 0.4s ease;
  color: #435966;
}
.fa-hover:hover {
  background: #757575;
  color: #ffffff;
}

.pesheto{}

.fa-hover:hover .ico,
.fa-hover:hover .fa {
  font-size: 22px;
  line-height: 22px;
  height: 22px;
  color: #ffffff;
}
.input-no-style {
  border: none;
  background: none;
  outline: none;
}

.row-inline-block {
  font-size: 0px;
  text-align: left;
}
.row-inline-block > * {
  display: inline-block;
  float: none;
  font-size: 14px;
  vertical-align: top;
}
.row-inline-block.text-center > * {
  text-align: center;
}
.row.small-spacing {
  margin-left: -10px;
  margin-right: -10px;
}
.row.small-spacing > *[class^="col-"] {
  padding-left: 10px;
  padding-right: 10px;
}

.light-effect {
  position: relative;
  overflow: hidden;
  display: block;
}
.light-effect:after {
  content: "";
  display: block;
  position: absolute;
  top: 0px;
  left: -200%;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.3);
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  -moz-opacity: 1;
  -khtml-opacity: 1;
  opacity: 1;
  transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -ms-transition: all 0.4s ease;
  -webkit-transition: all 0.4s ease;
  transform: skew(45deg);
  -webkit-transform: skew(45deg);
  -moz-transform: skew(45deg);
  -o-transform: skew(45deg);
  -ms-transform: skew(45deg);
}
.light-effect:hover:after {
  left: 100%;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  -moz-opacity: 0;
  -khtml-opacity: 0;
  opacity: 0;
}
@media (max-width: 799px) {
    .main-content {
      min-height: 100vh;
      background: #f5f7fa;
      padding-top: 75px; /* Altura de la barra superior */
    }
    .main-menu .header {
        text-align: left;
        padding-left: 20px;
    }
}
.error {
  color: #ea4335;
  font-weight: 400;
  padding: 5px 0px 5px 0px;
}
.display-none {
  display: none;
}
@media (min-width: 1025px) {
  .hidden-on-desktop {
    display: none!important;
  }
}
h4 strong {
  font-weight: 600;
  font-size: 16px;
}
.help-block {
  margin-top: 10px;
  color: #aab2bd;
}

@media (max-width: 999px) {
  .list-inline-faq li {
    width: 100%;
  }
}
.limit-width {
  max-width: 600px;
  display: block;
  margin: 0px auto 0px;
  float: none;
}
.width-100 {
  max-width: 100px !important;
  width: 100px !important;
}
.width-200 {
  max-width: 200px !important;
  width: 200px !important;
}
.width-300 {
  max-width: 300px !important;
  width: 300px !important;
}
.width-400 {
  max-width: 400px !important;
  width: 400px !important;
}
.width-500 {
  max-width: 500px !important;
  width: 500px !important;
}
.main-menu {
  position: fixed;
  top: 0px;
  left: 0px;
  z-index: 1000;
  width: 260px;
  height: 100%;
  padding-top: 185px;
  background: #ffffff;
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.05), 0 1px 1px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.05), 0 1px 1px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.05), 0 1px 1px rgba(0, 0, 0, 0.05);
  transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -ms-transition: all 0.4s ease;
  -webkit-transition: all 0.4s ease;
}
.main-menu .content {
  height: 100%;
  overflow: auto;
}
.main-menu .button-close {
  display: none;
  position: absolute;
  top: 25px;
  right: 10px;
  font-size: 16px;
  outline: none;
  background: none;
  border: none;
  font-size: 20px;
  color: #ffffff;
}
.main-menu .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
  background: #aab2bd !important;
}
.main-menu:hover .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  -moz-opacity: 1;
  -khtml-opacity: 1;
  opacity: 1;
}
.main-content {
  position: relative;
  z-index: 50;
  margin-left: 200px;
  margin-right: 20px;
  padding-top: 50px;
}

.fixed-navbar {
  position: fixed;
  top: 0px;
  left: 260px;
  z-index: 999;
  right: 0px;
  height: 75px;
  background: #dcdcdc;
  color: #000000;
}
.fixed-navbar .searchform {
  opacity: 0;
  visibility: hidden;
  position: absolute;
  right: -3px;
  top: 13px;
  height: 49px;
  font-size: 0;
  line-height: 0;
  padding: 0;
  width: 50px;
  transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -ms-transition: all 0.4s ease;
  -webkit-transition: all 0.4s ease;
}
.fixed-navbar .searchform.active {
  opacity: 1;
  width: 320px;
  visibility: visible;
  transform: translateY(0);
  -moz-transform: translateY(0);
  -webkit-transform: translateY(0);
}
.fixed-navbar .searchform .input-search {
  font-weight: 500;
  height: 49px;
  font-size: 14px;
  width: 320px;
  max-width: 100%;
  border-radius: 25px;
  -webkit-border-radius: 25px;
  -moz-border-radius: 25px;
}
.fixed-navbar .searchform .button-search {
  top: 50%;
  right: 11px;
  color: #aab2bd;
  font-size: 18px;
  transform: translate(0, -50%);
  -moz-transform: translate(0, -50%);
  -webkit-transform: translate(0, -50%);
}
.fixed-navbar .searchform .button-search.mdi {
  font-size: 24px;
}
@media (max-width: 799px) {
  .main-menu {
    transform: translate(-110%, 0);
    -webkit-transform: translate(-110%, 0);
    -moz-transform: translate(-110%, 0);
    -o-transform: translate(-110%, 0);
    -ms-transform: translate(-110%, 0);
  }
  .main-menu .header {
    text-align: left;
    padding-left: 20px;
  }
  .main-menu .button-close {
    display: block;
  }
  .main-content {
    margin-left: 20px;
  }
  .fixed-navbar {
    left: 0px;
    right: 0px;
    box-shadow: 0 0px 24px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);
    -moz-box-shadow: 0 0px 24px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);
    -webkit-box-shadow: 0 0px 24px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);
  }
  .menu-active .main-menu {
    transform: translate(0, 0);
    -webkit-transform: translate(0, 0);
    -moz-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
  }
}
@media (max-width: 599px) {
  .fixed-navbar .searchform {
    top: 75px;
    position: fixed;
    width: 100%;
    right: 0;
    box-shadow: 0 0px 24px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);
    -moz-box-shadow: 0 0px 24px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);
    -webkit-box-shadow: 0 0px 24px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);
  }
  .fixed-navbar .searchform.active {
    width: 100%;
  }
  .fixed-navbar .searchform .input-search {
    width: 100%;
    border-radius: 0;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
  }
}

@media (min-width: 1025px) {
    .menu-mobile-button {
        left: 0; /* Ocultar el botón en pantallas grandes */
    }
}


.header {
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 185px;
  text-align: left;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 75px;
}
.header .logo {
  position: absolute;
  top: 0;
  left: -39px;
  width: 100%;
  text-align: center;
  font-family: "Poppins", sans-serif;
  font-size: 20px;
  line-height: 75px;
  height: 75px;
  white-space: nowrap;
  overflow: hidden;
  color: #000000;
  background:#dcdcdc;
  font-weight: 500;
}
.header .logo .ico {
  margin-right: 5px;
  font-size: 24px;
  position: relative;
  top: 2px;
}

.user {
  position: absolute;
  top: 75px;
  left: 0;
  width: 100%;
  padding: 32px 40px 0 100px;
  height: 110px;
}
.user:after {
  content: "";
  display: block;
  width: 0px;
  height: 0px;
  clear: both;
  overflow: hidden;
}
.user .control-wrap.active .control-list {
  opacity: 1;
  visibility: visible;
}
.user .avatar {
  max-width: 70px;
  position: absolute;
  top: 19px;
  left: 20px;
}
.user .avatar img {
  border: 3px solid #d7ecfb;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -ms-transition: all 0.4s ease;
  -webkit-transition: all 0.4s ease;
}
.user .control-wrap {
  position: absolute;
  width: 20px;
  height: 40px;
  right: 15px;
  top: 44px;
  text-align: center;
}
.user .control-wrap > .fa {
  font-size: 18px;
  line-height: 20px;
  color: #434a54;
  cursor: pointer;
}
.user .control-list {
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  -moz-opacity: 0;
  -khtml-opacity: 0;
  opacity: 0;
  visibility: hidden;
  position: absolute;
  top: 0;
  right: 0;
  margin-right: 5px;
  z-index: 20;
  width: 200px;
  margin-top: 2px;
  padding: 10px 0px;
  border: 1px solid rgba(152, 166, 173, 0.15);
  background: #ffffff;
  list-style: none;
  transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -ms-transition: all 0.4s ease;
  -webkit-transition: all 0.4s ease;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  transform: translate(0, 20px);
  -webkit-transform: translate(0, 20px);
  -moz-transform: translate(0, 20px);
  -o-transform: translate(0, 20px);
  -ms-transform: translate(0, 20px);
  box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);
  -moz-box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);
  -webkit-box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);
}
.user .control-list a {
  top: 0px;
  color: #435966;
  font-size: 14px;
  line-height: 24px;
  padding: 6px 20px 6px 20px;
  display: block;
  text-align: left;
}
.user .control-list a i {
  font-size: 16px;
  line-height: 24px;
  width: 25px;
}
.user .control-list a:hover {
  color: #757575;
}
.user .name {
  color: #435966;
  margin: 0px;
  font-size: 16px;
  line-height: 26px;
  font-weight: 500;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.user .name a {
  color: #435966;
}
@media (min-width: 1025px) {
  .user .name a:hover {
    color: #757575;
  }
}
.user .position {
  color: #aab2bd;
  font-weight: 400;
  font-size: 12px;
  line-height: 15px;
  margin: 0;
}
.user .status {
  position: absolute;
  bottom: 5px;
  right: 5px;
  width: 12px;
  height: 12px;
  border: 1px solid #ffffff;
  background: #ffffff;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
}
.user .status:before {
  content: "";
  position: absolute;
  top: 1px;
  left: 1px;
  width: 8px;
  height: 8px;
  background: #00bf4f;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
}

.navigation .title {
  padding: 12px 20px;
  margin: 0;
  font-size: 16px;
  line-height: 26px;
  font-weight: 500;
  color: #212121;
  background: #e6e9ed;
}
.navigation .menu {
  list-style: none;
  padding: 0px;
  margin: 0px;
}
.navigation .menu a {
  display: block;
  color: #434a54;
}
@media (min-width: 1025px) {
  .navigation .menu a:hover {
    color: #757575;
  }
  .navigation .menu a:hover i {
    color: #757575;
  }
}
.navigation .menu a.active,
.navigation .menu a.current {
  color: #757575;
}
.navigation .menu a i {
  color: #212121;
  transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -ms-transition: all 0.4s ease;
  -webkit-transition: all 0.4s ease;
}
.navigation .menu > li {
  transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -ms-transition: all 0.4s ease;
  -webkit-transition: all 0.4s ease;
}
.navigation .menu > li > a {
  position: relative;
  padding: 14px 30px 14px 53px;
  margin: 0px;
}
.navigation .menu > li > a span {
  vertical-align: middle;
  font-size: 14px;
}
.navigation .menu > li > a .menu-arrow {
  position: absolute;
  top: 14px;
  right: 20px;
  font-size: 14px;
  line-height: 18px;
  transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -ms-transition: all 0.4s ease;
  -webkit-transition: all 0.4s ease;
}
.navigation .menu > li.active {
  background: rgba(0, 0, 0, 0.05);
}
.navigation .menu > li.active > a {
  background: #e6e9ed;
}
.navigation .menu > li.active > a .menu-arrow {
  transform: rotate(-180deg);
  -webkit-transform: rotate(-180deg);
  -moz-transform: rotate(-180deg);
  -o-transform: rotate(-180deg);
  -ms-transform: rotate(-180deg);
}
.navigation .menu > li.current > a {
  color: #000000;
}
.navigation .menu > li.current > a > i {
  color: #000000;
}
.navigation .menu > li.current .current > a {
  color: #757575;
}
.navigation .menu > li.current .sub-menu {
  display: block;
}
.navigation .menu .sub-menu {
  display: none;
  list-style: none;
  padding: 0px;
  margin: 0px;
}
.navigation .menu .sub-menu a {
  padding: 10px 20px 10px 53px;
}
.navigation .menu .menu-icon {
  display: inline-block;
  position: absolute;
  top: 0px;
  left: 0;
  margin-left: 0;
  width: 50px;
  font-size: 18px;
  line-height: 49px;
  text-align: center;
  vertical-align: middle;
}
.navigation .menu .menu-icon.mdi {
  font-size: 20px;
}
.navigation .menu .notice {
  position: absolute;
  top: 12px;
  right: 20px;
  font-size: 12px;
}
.navigation .menu .waves-ripple {
  background: -webkit-radial-gradient(rgba(113, 182, 249, 0.2) 0, rgba(113, 182, 249, 0.3) 40%, rgba(113, 182, 249, 0.4) 50%, rgba(113, 182, 249, 0.5) 60%, rgba(113, 182, 249, 0) 70%);
  background: -o-radial-gradient(rgba(113, 182, 249, 0.2) 0, rgba(113, 182, 249, 0.3) 40%, rgba(113, 182, 249, 0.4) 50%, rgba(113, 182, 249, 0.5) 60%, rgba(113, 182, 249, 0) 70%);
  background: -moz-radial-gradient(rgba(113, 182, 249, 0.2) 0, rgba(113, 182, 249, 0.3) 40%, rgba(113, 182, 249, 0.4) 50%, rgba(113, 182, 249, 0.5) 60%, rgba(113, 182, 249, 0) 70%);
  background: radial-gradient(rgba(113, 182, 249, 0.2) 0, rgba(113, 182, 249, 0.3) 40%, rgba(113, 182, 249, 0.4) 50%, rgba(113, 182, 249, 0.5) 60%, rgba(113, 182, 249, 0) 70%);
}
.main-menu.menu-open {
  transform: translateX(0);
}

@media (min-width: 800px) {
  .main-menu {
    transition: none;
    -moz-transition: none;
    -o-transition: none;
    -ms-transition: none;
    -webkit-transition: none;
  }
  .header .logo {
    transition: none;
    -moz-transition: none;
    -o-transition: none;
    -ms-transition: none;
    -webkit-transition: none;
  }
  .menu-active .header {
    width: 75px;
    height: 0;
    padding: 0;
  }
  .menu-active .header .logo {
    position: fixed;
    z-index: 988;
    width: 75px;
    height: 75px;
    font-size: 0;
    line-height: 80px;
    color: #1e3ded;
    background: transparent;
  }
  .menu-active .header .logo::first-letter {
    font-size: 28px;
  }
  .menu-active .header .logo:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 75px;
    height: 75px;
    background: #1e3ded;
    z-index: -2;
  }
  .menu-active .header .logo:after {
    content: '';
    position: absolute;
    left: 20px;
    top: 20px;
    width: 35px;
    height: 35px;
    background: #ffffff;
    z-index: -1;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
  }
  .menu-active .header .logo .ico {
    margin-right: 0;
    top: 0;
  }
  .menu-active .main-menu {
    position: absolute;
    width: 75px;
    padding-top: 75px;
  }
  .menu-active .fixed-navbar {
    left: 75px;
    z-index: 40;
  }
  .menu-active .main-content {
    margin-left: 95px;
  }
  .menu-active .user {
    display: none;
  }
  .menu-active .navigation .title {
    display: none;
  }
  .menu-active .navigation .menu > li {
    position: relative;
  }
  .menu-active .navigation .menu > li > a {
    height: 48px;
    padding: 10px 30px;
    transition: color 0.4s ease;
    -moz-transition: color 0.4s ease;
    -o-transition: color 0.4s ease;
    -ms-transition: color 0.4s ease;
    -webkit-transition: color 0.4s ease;
  }
  .menu-active .navigation .menu > li > a span {
    display: none;
    font-size: 14px;
    line-height: 30px;
  }
  .menu-active .navigation .menu > li > a .menu-arrow,
  .menu-active .navigation .menu > li > a .notice {
    display: none!important;
  }
  .menu-active .navigation .menu > li:hover > a {
    width: 260px;
    background: #757575;
    color: #ffffff;
    padding-left: 90px;
  }
  .menu-active .navigation .menu > li:hover > a i {
    color: #ffffff;
  }
  .menu-active .navigation .menu > li:hover > a span {
    display: block;
  }
  .menu-active .navigation .menu > li:hover .sub-menu {
    display: block!important;
  }
  .menu-active .navigation .menu .menu-icon {
    font-size: 24px;
    width: 75px;
  }
  .menu-active .navigation .menu .menu-icon.mdi {
    font-size: 26px;
  }
  .menu-active .navigation .menu .sub-menu {
    display: none!important;
    position: absolute;
    top: 100%;
    left: 75px;
    width: 185px;
  }
  .menu-active .navigation .menu .sub-menu a {
    background: #e6e9ed;
    padding: 10px 15px;
  }
  .menu-active .mCSB_container,
  .menu-active .mCustomScrollBox,
  .menu-active .content {
    overflow: visible;
  }
  .menu-active body {
    height: auto;
  }
}

.fixed-navbar {
  height: 75px;
}
.fixed-navbar .ico-item {
  display: inline-block;
  position: relative;
  margin-left: 15px;
  cursor: pointer;
  font-size: 19px;
  line-height: 75px;
  color: #021cac;
}
@media (min-width: 1025px) {
  .fixed-navbar .ico-item:hover {
    color: #ffffff;
  }
}
.fixed-navbar .ico-item .ico-item {
  margin-left: 0;
}
.fixed-navbar .ico-item .ico-item.mdi {
  font-size: 24px;
}
.fixed-navbar .ico-item .ico-item.mdi:before {
  font-size: 24px;
  line-height: 75px;
  position: relative;
  top: 3px;
}
.fixed-navbar .ico-item.mdi {
  font-size: 24px;
}
.fixed-navbar .ico-item.mdi:before {
  font-size: 24px;
  line-height: 75px;
  position: relative;
  top: 3px;
}
.fixed-navbar .ico-item.pulse:before {
  content: '';
  width: 2px;
  height: 2px;
  border: 3px solid #ffce54 ;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  border-radius: 30px;
  background-color: #ffce54 ;
  z-index: 10;
  position: absolute;
  right: 2px;
  top: 28px;
}
.fixed-navbar .ico-item.pulse:after {
  content: '';
  border: 4px solid #ffce54 ;
  background: transparent;
  -webkit-border-radius: 60px;
  -moz-border-radius: 60px;
  border-radius: 60px;
  height: 30px;
  width: 30px;
  -webkit-animation: pulse 3s ease-out;
  -moz-animation: pulse 3s ease-out;
  animation: pulse 3s ease-out;
  -webkit-animation-iteration-count: infinite;
  -moz-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  position: absolute;
  top: 16px;
  left: -1px;
  z-index: 1;
  opacity: 0;
}
.fixed-navbar .ico-item.toggle-hover {
  position: relative;
}
.menu-mobile-button {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 75px;
  width: 70px;
  border: none;
  outline: none;
  font-size: 20px;
  line-height: 75px;
  color: #ffffff;
  box-sizing: border-box;
  background: #dcdcdc;
}
.notice {
  display: inline-block;
  -webkit-border-radius: 0.25em;
  -moz-border-radius: 0.25em;
  border-radius: 0.25em;
  padding: 2px 6px 0;
  font-size: 75%;
}
.notice-blue {
  color: #ffffff;
  background: #757575;
}
.notice-purple {
  color: #ffffff;
  background: #5b69bc;
}
.notice-yellow {
  color: #ffffff;
  background: #fbbc05;
}
.notice-danger {
  color: #ffffff;
  background: #ff1744;
}

</style>




</html>
