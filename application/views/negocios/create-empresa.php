<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="text-center a-title"><h5>Configura tu Empresa</h5></div>
    <div class="content border border-rounded">
        <p class="title text-center text-muted">DATOS GENERALES</p>
        <hr class="line">
        <div class="form-inline mx-auto">
            <div class="selectores-a ">
                <select name="" id="" class="select-a">
                    <option value="">Elegir Categoria</option>
                    <option  value="1">Agricultura, Ganadería, Silvicultura, Pesca</option>
                    <option  value="2">Explotación de minas y canteras</option>
                    <option  value="3">Industria manufacturera</option>
                    <option  value="4">Electricidad, gas y agua</option>
                    <option  value="5">Construcción</option>
                    <option  value="6">Comercio </option>
                    <option  value="7">Reparación de vehículos automotores y motocicletas</option>
                    <option  value="8">Transporte y Almacenamiento</option>
                    <option  value="9">Alojamiento</option>
                    <option  value="10">Servicio de comidas y bebidas</option>
                    <option  value="11">Informática y computación</option>
                    <option  value="12">Información y comunicaciones</option>
                    <option  value="13">Servicios profesionales, técnicos y de apoyo</option>
                    <option  value="14">Salud</option>
                    <option  value="15">Enseñanza y Educación</option>
                    <option  value="16">Otros servicios </option>
                </select>
            </div>
            <div class="form-group mx-auto grp">
                <input type="text" name="" id="" class="i-anuncio" placeholder="Razon Social">
                <input type="text" name="" id="" class="i-anuncio" placeholder="RUC">
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
            <div class="form-group mx-auto grp">
                <input type="text" name="" id="" class="i-anuncio" placeholder="Teléfono Celular">
                <input type="text" name="" id="" class="i-anuncio" placeholder="Teléfono fijo">
            </div>
            <div class="form-group mx-auto grp">
                <textarea name="" id="" cols="30" rows="10" class="i-anuncio-d" placeholder="Descripción"></textarea>
            </div>

        </div>
        <div class="form-group cont-dt grp">

            <!-- LOGO -->
            <div class="cont-dt1 form-group">
                <label class="text-muted">LOGO DE TU EMPRESA</label>
                <div class="form-group">
                    <input type="file" id="imgInp" class="border btn-logo btn form-control text-left">
                </div>
                <div class="cont-dt2 border">
                    <img id="blah" src="https://via.placeholder.com/150" alt="Tu imagen" />
                </div>
            </div>

            <!-- HORARIO -->
            <div class="form-group mx-auto text-center title-h">
                <label class="text-muted">HORARIO DE ATENCIÓN</label>

                <div class="horario border mx-auto text-center">
                    <input type="radio" class="in-bt" name="h-" id="op-1" >
                    <label for="op-1" class="btn-h text-center">No disponible</label>

                    <input type="radio" class="in-bt" name="h-" id="op-2" >
                    <label for="op-2" class="btn-h text-center">Siempre disponible</label>

                    <input type="radio" class="in-bt" name="h-" id="op-3" >
                    <label for="op-3" class="btn-h text-center">Cerrado definitivamente</label>

                    <input type="radio" class="in-bt" name="h-" id="op-4" >
                    <label for="op-4" class="btn-h text-center">Abierto en horas concretas</label>
                </div>
                <div class="cont-dt2 border oculto" id="horario">
                    <div class="d-d">
                        <div class="d-1">Lunes</div>
                        <div class="d-1">Martes</div>
                        <div class="d-1">Miercoles</div>
                        <div class="d-1">Jueves</div>
                        <div class="d-1">Viernes</div>
                        <div class="d-1">Sabado</div>
                        <div class="d-1">Domingo</div>
                    </div>
                    <div class="d-i">
                        <select name="" id="" class="d-i-1">
                            <option value="">Hora Inicio</option>
                        </select>
                        <select name="" id="" class="d-i-1">
                            <option value="">Hora Inicio</option>
                        </select>
                        <select name="" id="" class="d-i-1">
                            <option value="">Hora Inicio</option>
                        </select>
                        <select name="" id="" class="d-i-1">
                            <option value="">Hora Inicio</option>
                        </select>
                        <select name="" id="" class="d-i-1">
                            <option value="">Hora Inicio</option>
                        </select>
                        <select name="" id="" class="d-i-1">
                            <option value="">Hora Inicio</option>
                        </select>
                        <select name="" id="" class="d-i-1">
                            <option value="">Hora Inicio</option>
                        </select>
                    </div>
                    <div class="d-f">
                        <select name="" id="" class="d-i-1">
                            <option value="">Hora Fin</option>
                        </select>
                        <select name="" id="" class="d-i-1">
                            <option value="">Hora Fin</option>
                        </select>
                        <select name="" id="" class="d-i-1">
                            <option value="">Hora Fin</option>
                        </select>
                        <select name="" id="" class="d-i-1">
                            <option value="">Hora Fin</option>
                        </select>
                        <select name="" id="" class="d-i-1">
                            <option value="">Hora Fin</option>
                        </select>
                        <select name="" id="" class="d-i-1">
                            <option value="">Hora Fin</option>
                        </select>
                        <select name="" id="" class="d-i-1">
                            <option value="">Hora Fin</option>
                        </select>
                    </div>
                    </div>
                </div>
            </div>
            <!-- dropzone -->
            <div class="row col-md-12" style="margin: 0;">
                <div class="panel panel-primary col-md-12">
                    <div class="panel-heading">
                    <span style="color:green">Zona de cargar imagenes</span>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo base_url()."admin/save_image";?>" id="my-dropzone" method="post" enctype="multipart/form-data" class="dropzone">
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
            <!-- end dropone -->
            <div class="form-group mx-auto text-center">
                <button type="reset" class="btn btn-sm btn-outline-danger">Limpiar</button>
                <button type="submit" class="btn btn-sm btn-outline-dark">Guardar</button>
            </div>
  
        </div>
