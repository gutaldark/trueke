<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Trueke</title>

  <!-- Font Awesome -->
  <link href="<?php echo base_url('/'); ?>assets/fontawesome/css/fontawesome-all.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- datatables -->
  <link href="<?php echo base_url('/'); ?>assets/css/datatables.min.css" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('/'); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url('/'); ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url('/'); ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<!-- Slick -->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('/'); ?>assets/css/slick.css"/>
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('/'); ?>assets/css/slick-theme.css"/>

  <!-- nouislider -->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('/'); ?>assets/css/nouislider.min.css"/>
     
  <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/css/chat.css">
  <!-- Libs -->
  <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/libs/perfect-scrollbar/perfect-scrollbar.css">

  <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/css/shreerang-material.css">
  <!-- dropzone -->
  <link href="<?php echo base_url('/'); ?>assets/css/dropzone.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('/'); ?>assets/css/style.css" rel="stylesheet">
</head>
<body>
  <header>
    <!--CONTENIDO 1-->
    <div class="contenido1" id="banner">
      <div class="logo">
          <a href="<?php echo base_url('welcome'); ?>"><img src="<?php echo base_url('/'); ?>assets/img/trueke_logo.png" alt=""></a>
      </div>  

      <!-- BUSCADOR -->
      <div class="buscador-div border mx-auto aling-items-center" id="search2">
        <form action="#" method="post" class="form-inline">
          <input type="search" id="search" name="buscar" class="search-buscador" placeholder="Buscar:">
          <button type="submit" title="Presiona para buscar" id="search-c" name="search" class="btn btn-sm boton-search"><i class="derecha fa fa-search" style="font-size: 1rem; color: grey;"></i></button>
        </form>
      </div> 
      <!--BUSCADOR-->

      <!-- BOTONES -->
      <div class="botones c-admin">
        <a href="<?php echo base_url('admin/notificaciones'); ?>" class="btn-login" title="Notificaciones">
          <div class="boton">
            <i class="top-log-reg fa fa-bell icos mx-auto"></i>
          </div>
        </a>
        <a href="<?php echo base_url('admin/inbox'); ?>" class="btn-login" title="Mensajes">
          <div class="boton">
            <i class="top-log-reg fa fa-envelope icos mx-auto"></i>
          </div>
        </a>
        <a href="#" class="btn-login" title="Favoritos">
          <div class="boton">
            <i class="top-log-reg far fa-star icos mx-auto"></i>
          </div>
        </a>
        <a href="#" class="as btn-login" title="Promocionar">
          <div class="boton">
            <i class="top-log-reg fa fa-plus-circle icos mx-auto"></i>
          </div>
            
          <div class="list-opciones mx-auto">
            <ul>
              <li onclick="redireccionar('<?php echo base_url('anuncios/create'); ?>')"> Anuncio</li>
              <li onclick="redireccionar('<?php echo base_url('admin/negocios'); ?>')">Negocio</li>
            </ul>
          </div>
        </a>

        <!-- PROFILE -->
        <div class="d-block text-b">
          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow" style="list-style: none;">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">Eduin Urdaneta</span>
              <img class="img-profile rounded-circle" src="<?php echo base_url('/'); ?>assets/img/undraw_profile.svg" style="  height: 2rem; width: 2rem;">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
              aria-labelledby="userDropdown">
              <a class="dropdown-item" href="<?php echo base_url('#'); ?>">
                <i class="fas fa-bullhorn fa-sm fa-fw mr-2 text-gray-400"></i>
                Anuncios
              </a>
              <a class="dropdown-item" href="#">
                <i class="fas fa-star fa-sm fa-fw mr-2 text-gray-400"></i>
                Favoritos
              </a>
              <a class="dropdown-item" href="#">
                <i class="fas fa-envelope fa-sm fa-fw mr-2 text-gray-400"></i>
                Mensajes
              </a>
              <a class="dropdown-item" href="#">
                <i class="fas fa-building fa-sm fa-fw mr-2 text-gray-400"></i>
                Empresas
              </a>
              <a class="dropdown-item" href="<?php echo base_url('admin/configuracion'); ?>">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Configuración
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo base_url('login/cerrar_sesion'); ?>" data-target="#logoutModal">
                <i class="fas fa-power-off fa-sm fa-fw mr-2 text-gray-400"></i>
                Salir
              </a>
            </div>
          </li>
        </div>
      </div>
    </div>
  </div>

    <!-- CONTENIDO 2 -->
    <div class="contenido2 oculto">
      <div class="div-menu">
        <a href="#" class="btn-menu">
          <img src="<?php echo base_url(); ?>assets/img/trueke_logo.png" height="30px" width="130px">
          <i class="icono fa fa-bars"style="font-size: 1.3rem;"></i>
        </a>          
        <ul class="menu">
          <li><a href="<?php echo base_url('admin/notificaciones'); ?>"><i class="icono izquierda fa fa-bell"></i>Notificaciones</a></li>
          <li><a href="<?php echo base_url('admin/inbox'); ?>"><i class="icono izquierda fa fa-envelope"></i>Mensajes</a></li>
          <li><a href="#"><i class="icono izquierda far fa-star"></i>Favoritos</a></li>
          <li><a href="#"><i class="icono izquierda fa fa-plus-circle"></i>Promocionar<i class="icono derecha fa fa-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo base_url('anuncios/create-anuncios'); ?>"><i class="icono izquierda"></i>Anuncio</a></li>
              <li><a href="<?php echo base_url('negocios/create-empresa'); ?>"><i class="icono izquierda"></i>Negocio</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="icono izquierda fa fa-bullhorn"></i>Mis Anuncios</a></li>
          <li><a href="#"><i class="icono izquierda fa fa-building"></i>Mis Empresas</a></li>
          <li><a href="<?php echo base_url('admin/configuracion'); ?>"><i class="icono izquierda fa fa-cogs"></i>Configuración</a></li>
          <li><a href="<?php echo base_url('login/cerrar_sesion'); ?>"><i class="icono izquierda fa fa-power-off"></i>Salir</a></li>
        </ul>
      </div>
    </div>
  </header>

