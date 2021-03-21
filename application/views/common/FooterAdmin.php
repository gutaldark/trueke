<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="<?php echo base_url('/'); ?>assets/vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script src="<?php echo base_url('/'); ?>assets/vendor/bootstrap/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('/'); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- dropzone -->
  <script src="<?php echo base_url('/'); ?>assets/js/dropzone.js"></script>
  
  <script src="<?php echo base_url('/'); ?>assets/vendor/scrollreveal/scrollreveal.min.js"></script>
 
		<script src="<?php echo base_url('/'); ?>assets/js/slick.min.js"></script>
		<script src="<?php echo base_url('/'); ?>assets/js/nouislider.min.js"></script>
		<script src="<?php echo base_url('/'); ?>assets/js/jquery.zoom.min.js"></script>
  <!-- MAIN JS -->
  <script src="<?php echo base_url('/'); ?>assets/js/main.js"></script>
  <!-- Libs -->
  <script src="<?php echo base_url('/'); ?>assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="<?php echo base_url('/'); ?>assets/libs/select2/select2.js"></script>
  <script src="<?php echo base_url('/'); ?>assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

  <!-- Demo -->
  <script src="<?php echo base_url('/'); ?>assets/js/pages_chat.js"></script>

  <script>
    // <!-- SCRIPT MOSTRAR U OCULTAR HORARIO -->
    $("#op-1").click(function (){
        $("#horario").removeClass("oculto");
        $("#horario").addClass("oculto");
    });
    $("#op-2").click(function (){
        $("#horario").removeClass("oculto");
        $("#horario").addClass("oculto");
    });
    $("#op-3").click(function (){
        $("#horario").removeClass("oculto");
        $("#horario").addClass("oculto");
    });
    $("#op-4").click(function (){
        $("#horario").removeClass("oculto");
    });

    // SCRIPT VISTA PREVIA IMAGENES
    function readImage (input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result); // Renderizamos la imagen
        }
        reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function () {
        // Código a ejecutar cuando se detecta un cambio de archivO
        readImage(this);
    });

//al cargar la pagina tomara la primera imagen del foreach para mostrarla en la vista

  var algo = $("#idsito").val();
  $('#cambio').replaceWith('<img id="cambio" src="'+ algo + '" class="d-block w-100 imgmanx">');


/* //funcion para capturar ruta de imagen y cambiarla en la vista
function imagen(clicked_id){
    var id = clicked_id;
    
    $('#cambio').replaceWith('<img id="cambio" src="'+ id + '" class="img-responsive anun">');
} */
 
</script>

<script>
  function redireccionar(url){
    location.href=url;
  }
  </script>