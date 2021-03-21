<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="text-center a-title"><h5>Configura tu Anuncio</h5></div>
    <div class="content border border-rounded">
        <div class="form-inline mx-auto">
            <div class="selectores-a ">
                <select name="" id="" class="select-a">
                    <option value="">Elegir Tipo</option>
                    <option value="">Producto</option>
                    <option value="">Servicio</option>
                </select>
                <select name="" id="" class="select-a">
                    <option value="">Estado de Producto</option>
                    <option value="">Nuevo</option>
                    <option value="">Usado</option>
                </select>
                <select name="" id="" class="select-a">
                    <option value="">Forma de Envio</option>
                    <option value="">Gratis</option>
                    <option value="">Pagado</option>
                    <option value="">A Convenir</option>
                </select>
            </div>
            <div class="form-group mx-auto grp">
                <input type="text" name="" id="" class="i-anuncio" placeholder="Nombre">
                <input type="text" name="" id="" class="i-anuncio" placeholder="Precio">
            </div>
            <div class="form-group mx-auto grp">
                <textarea name="" id="" cols="30" rows="10" class="i-anuncio-d" placeholder="Descripción"></textarea>
            </div>
            <div class="selectores-a ">
                <select name="" id="" class="select-a">
                    <option value="">Departamento</option>
                    <option value="">Option #</option>
                    <option value="">Option #</option>
                </select>
                <select name="" id="" class="select-a">
                    <option value="">Región</option>
                    <option value="">Option #</option>
                    <option value="">Option #</option>
                </select>
                <select name="" id="" class="select-a">
                    <option value="">Distrito</option>
                    <option value="">Option #</option>
                    <option value="">Option #</option>
                    <option value="">Option #</option>
                </select>
            </div>

            <div class="form-group mx-auto grp">
                <input type="text" name="" id="" class="i-anuncio-d" placeholder="Dirección">
            </div>
        </div>

        <div class="row col-md-12" style="margin: 0;">
                <div class="panel panel-primary col-md-12">
                    <div class="panel-heading">
                    <span style="color:green">Zona de cargar imagenes</span>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo base_url()."anuncios/save_image";?>" id="my-dropzone" method="post" enctype="multipart/form-data" class="dropzone">
                            <div class="dz-message needsclick">
                                Suelta las fotos aquí o has click para subir                                 
                            </div>
                            <div class="fallback">                                        
                                <input name="file" type="file" multiple>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="respuesta">

            </div>

        <div class="form-group mx-auto text-center">
            <button type="reset" class="btn btn-sm btn-outline-danger">Limpiar</button>
            <button type="submit" class="btn btn-sm btn-outline-dark">Guardar</button>
        </div>

    </div>

</div>