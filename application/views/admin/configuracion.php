<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>

    .title-cog {
       margin-top: 8%; 
    }
    .content-cog{
        width: 100%;
        min-height: 10rem;
        /* height: 500px; */
        margin-bottom: 4%;
        /* background: black; */
        background: rgba(245, 245, 245);
        padding: 15px;
    }
    .content-t{
        width: 100%;
        min-height: 30rem;
    }
    .cont-cog-1{
        width: 65%;
        min-height: 100px;
        float: left;
        margin: auto;
    }
    .cont-cog-2{
        width: 30%;
        min-height: 100px;
        float: right;
        margin: auto;
    }
    /* FORMULARIO */
    .in-{
        width: 49%;
        padding: 5px; 
        font-family: 'poppins';
        font-size: 14px;
        border-top: 0px;
        border-left: 0px;
        margin: auto;
        text-align: center;
        border-right: 0px;
    }
    .sub-title-d{
        padding: 5px; 
        font-family: 'poppins';
        font-size: 14px;
        /* color: white; */
        /* background: white;         */
        margin-top: auto;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 1%;
        text-align: center;
    }
    .form-cog{
        /* background: red; */
    }
    .selectores-a{
        margin-left: 3%;
    }
    .select-k{
        width: 28%;
        padding: 5px;
        background-color: #ffffff;
        color: rgb(102, 101, 101);
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-size: 14px;
        border-top: 0px !important;
        border-left: 0px !important;
        border-right: 0px !important;
        margin-bottom: 10px;
        cursor: pointer;
    }
    .select-k:hover{
        background: rgb(245, 245, 245) !important;
    }
    .in-:hover{
        background: rgb(245, 245, 245) !important;
    }

    @media screen and (min-width: 450px) and (max-width: 900px){
        .content-cog{
            min-height: 500px;
            margin-bottom: 4%;
        }
        .cont-cog-1{
            width: 100%;
            float: none;
            margin: auto;
        }
        .cont-cog-2{
            width: 100%;
            float: none;
            margin: auto;
        }
    }
</style>
<div class="container">
    <h5 class="title-cog text-muted text-center">Configuración</h5>
    <div class="content-cog border">
        <div class="content-t">
            <div class="cont-cog-1">

                <p class="sub-title-d form-group text-muted">DATOS GENERALES</p>
                <hr class="line">
                <center>
                <div class="selectores-a mx-auto">
                    <select name="" id="" class="select-k">
                        <option value="">Departamento</option>
                        <option value="">Option #</option>
                        <option value="">Option #</option>
                    </select>
                    <select name="" id="" class="select-k">
                        <option value="">Región</option>
                        <option value="">Option #</option>
                        <option value="">Option #</option>
                    </select>
                    <select name="" id="" class="select-k">
                        <option value="">Distrito</option>
                        <option value="">Option #</option>
                        <option value="">Option #</option>
                        <option value="">Option #</option>
                    </select>
                </div>
                </center>

                <div class="form-cog">
                    <div class="form-group">
                        <input type="text" name="" id="" class="in-" placeholder="Razón Social">
                        <input type="text" name="" id="" class="in-" placeholder="DNI/RUC">
                    </div>
                    <div class="form-group">
                        <input type="text" name="" id="" class="in-" placeholder="Teléfono">
                        <input type="text" name="" id="" class="in-" placeholder="Dirección">
                    </div>
                </div>

                <p class="sub-title-d form-group text-muted">DATOS DE SEGURIDAD</p>
                <hr class="line">
                <div class="form-cog">
                    <div class="form-group">
                        <input type="text" name="" id="" class="in-" placeholder="Correo electrónico">
                        <input type="text" name="" id="" class="in-" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <input type="text" name="" id="" class="in-" placeholder="Apellido">
                        <input type="text" name="" id="" class="in-" placeholder="Dirección">
                    </div>
                    <div class="form-group">
                        <input type="text" name="" id="" class="in-" placeholder="Contraseña">
                        <input type="text" name="" id="" class="in-" placeholder="Repetir Contraseña">
                    </div>
                </div>
                <div class="form-group mx-auto text-center">
                    <buttom type="buttom" class="btn btn-sm btn-outline-danger">Limpiar</buttom>
                    <buttom type="buttom" class="btn btn-sm btn-outline-success">Guardar</buttom>
                </div>
            </div>


            <div class="cont-cog-2">
            <p class="sub-title-d form-group text-muted">IMAGEN DE PERFIL</p>
            <hr class="line">
            <div class="form-group">
                <input type="file" id="imgInp" class="border btn-logo btn form-control text-left" style="color: #f5f5f5">
            </div>

            <div class="cont-dt2 border">
                <img id="blah" src="https://via.placeholder.com/150" alt="Tu imagen" />
            </div>
        </div>


        </div>



    </div>

</div>