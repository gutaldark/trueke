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
  <link href="<?php echo base_url('/'); ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url('/'); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url('/'); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url('/'); ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url('/'); ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('/'); ?>assets/css/style.css" rel="stylesheet">
</head>
<body>
  <header>
    <!--CONTENIDO 1-->
    <div class="contenido1" id="banner">
      <div class="logo">
          <a href="index.php"><img src="<?php echo base_url('/'); ?>assets/img/trueke_logo.png" alt=""></a>
      </div>  

      <!-- BUSCADOR -->
      <div class="buscador-div border mx-auto aling-items-center" id="search">
        <form action="#" method="post" class="form-inline">
          <input type="search" id="search" name="buscar" class="search-buscador" placeholder="Buscar:">
          <button type="submit" title="Presiona para buscar" id="search-c" name="search" class="btn btn-sm boton-search"><i class="derecha fa fa-search" style="font-size: 1rem; color: grey;"></i></button>
        </form>
      </div> 
      <!--BUSCADOR-->

      <!-- LOGIN BOTONES -->
      <div class="botones c-user" style="">
        <div class=" img-user ">
          <a href="#ventanaLogin" data-toggle="modal" class="btn-login">
            <div class="boton btn">
              <i class="top-log-reg fa fa-user" name="person-outline"></i>Iniciar Sesión
            </div>
          </a>
          <a href="#ventanaRegistrarse" data-toggle="modal" class="btn-login">
            <div class="boton btn">
            <i class="top-log-reg fa fa-user-plus" name="person-add-outline"></i>Regístrate</div>
          </a>
        </div>
      </div>
    </div>

    <!-- CONTENIDO 2 -->
    <div class="contenido2 oculto">
      <div class="div-menu">
        <a href="#" class="btn-menu">
          <img src="<?php echo base_url('/'); ?>assets/img/trueke_logo.png" height="30px" width="130px">
          <i class="icono fa fa-bars"style="font-size: 1.3rem;"></i>
        </a>          
        <ul class="menu">
          <li><a href="#ventanaLogin" data-toggle="modal"><i class="icono izquierda fa fa-user"></i>Iniciar Sesión</a></li>
          <li><a href="#ventanaRegistrarse" data-toggle="modal"><i class="icono izquierda fa fa-user-plus"></i>Registrate</a></li>
        </ul>
      </div>
    </div>
  </header>


  <!-- BUSCADOR MOVIL -->
  <div class="buscador-div border mx-auto oculto" id="search-movil">
    <form action="#" method="post" class="form-inline">
      <input type="search" id="search" name="buscar" class="search-buscador" placeholder="Buscar:">
      <button type="submit" title="Presiona para buscar" id="search-c" name="search" class="btn btn-sm boton-search"><i class="derecha fa fa-search" style="font-size: 1rem; color: grey;"></i></button>
    </form>
  </div> 
  <!--BUSCADOR-->


 <!-- VENTANA MODAL INICIO DE SESION -->
 <div class="container">
    <div class="modal fade" id="ventanaLogin">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="logo-modal mx-auto">
              <img src="<?php echo base_url('/'); ?>assets/img/trueke_logo.png" alt="" class="logo-sesion" width="100%">
            </div>
          </div>
          <div class="modal-body">
            <center>
            <p class="modal-title text-muted">Inicio de Sesión</p> 
            <!-- FORMULARIO LOGIN  -->
            <form action="<?php echo base_url('/'); ?>login/logueando" method="post">
              <hr class="col-8">
              <div>
                <input type="text" autocomplete="off" name="correo" id="modal-user" class="form-control col-8 btn-sm" placeholder="Email:" required>
              </div><br>
              <div id="input-password-editar">
                <input type="password" name="pass" id="modal-password" class="form-control col-8 btn-sm" placeholder="Contraseña:" required>
              </div><br>
              <div class="modal-footer" style="border-top: 1px solid #dee2e6;">
                <?php                    
                    // mensajes de alerta
                    if ($this->session->flashdata('error')){ //change!
                        echo "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                        echo $this->session->flashdata('error');
                        echo "</div>";
                    }      
                    if ($this->session->flashdata('success')){ //change!
                        echo "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                        echo $this->session->flashdata('success');
                        echo "</div>";
                    }                 
                ?>
              </div> 
              <button type="reset" id="reset-auto" class="btn btn-sm btn-outline-danger"><i class="fa fa-redo-alt"></i> Limpiar</button>
              <button type="submit" name="" class="btn btn-sm btn-outline-success">Ingresar <i class="fa fa-sign-in-alt"></i></button>
            </form>
            </center>
          </div>
          <div class="modal-footer">  
            <button type="button" id="selector-option1" class="btn btn-sm btn-outline-primary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END MODAL -->


  <!-- VENTANA MODAL REGISTRARSE -->
  <div class="container">
    <div class="modal fade" id="ventanaRegistrarse">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <div class="logo-modal mx-auto">
                  <img src="<?php echo base_url('/'); ?>assets/img/trueke_logo.png" alt="" class="logo-sesion" width="100%">
              </div>
          </div>
          <div class="modal-body">
          <center>
            <p class="modal-title text-muted">Crea tu Cuenta</p> 
            <!-- FORMULARIO LOGIN  -->
            <form action="<?php echo base_url('/'); ?>login/store_user" method="post">
              <hr class="col-8">
              <div>
                <input type="text" autocomplete="off" name="nombre" id="modal-user" class="form-control col-8 btn-sm" placeholder="Nombre:" required>
              </div><br>
              <div>
                <input type="text" autocomplete="off" name="apellido" id="modal-user" class="form-control col-8 btn-sm" placeholder="Apellido:" required>
              </div><br>
              <div>
                <input type="text" autocomplete="off" name="correo" id="modal-user" class="form-control col-8 btn-sm" placeholder="Email:" required>
              </div><br>
              <div>
                <select name="region" id="" class="form-control col-8 btn-sm">
                  <option value="" class="form-control">Region</option>
                  <option value="Lima" class="form-control">Lima</option>
                  <option value="Cajamarca" class="form-control">Cajamarca</option>
                </select>
              </div><br>
              <div>
                <select name="provincia" id="" class="form-control col-8 btn-sm">
                  <option value="" class="form-control">Provincia</option>
                  <option value="algo" class="form-control">2</option>
                  <option value="doble" class="form-control">3</option>
                </select>
              </div><br>
              <div>
                <select name="distrito" id="" class="form-control col-8 btn-sm">
                  <option value="" class="form-control">Distrito</option>
                  <option value="lugar" class="form-control">2</option>
                  <option value="taran" class="form-control">3</option>
                </select>
              </div><br>
              <div>
                <input type="password" name="pass" id="modal-password" class="form-control col-8 btn-sm" placeholder="Contraseña:" required>
              </div><br>
              <div>
                <input type="password" name="pass2" id="modal-password" class="form-control col-8 btn-sm" placeholder="Repetir Contraseña:" required>
              </div><br>
              <div class="modal-footer" style="border-top: 1px solid #dee2e6;">
                <?php                    
                    // mensajes de alerta
                    if ($this->session->flashdata('error')){ //change!
                        echo "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                        echo $this->session->flashdata('error');
                        echo "</div>";
                    }      
                    if ($this->session->flashdata('success')){ //change!
                        echo "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                        echo $this->session->flashdata('success');
                        echo "</div>";
                    }                 
                ?>
              </div>
              <button type="reset" id="reset-auto" class="btn btn-sm btn-outline-danger"><i class="fa fa-redo-alt"></i> Limpiar</button>
              <button type="submit" name="" class="btn btn-sm btn-outline-success">Ingresar <i class="fa fa-sign-in-alt"></i></button>
            </form>
          </center>
        </div>
        <div class="modal-footer">  
          <button type="button" id="selector-option1" class="btn btn-sm btn-outline-primary" data-dismiss="modal">Cerrar</button>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END MODAL -->


  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="<?php echo base_url('/'); ?>assets/vendor/jquery/jquery-3.3.1.slim.min.js"></script>
  <script src="<?php echo base_url('/'); ?>assets/vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script src="<?php echo base_url('/'); ?>assets/vendor/bootstrap/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('/'); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- MAIN JS -->
  <script src="<?php echo base_url('/'); ?>assets/js/main.js"></script>
