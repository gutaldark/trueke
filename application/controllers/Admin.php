<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('Functions');
	}
	
	public function index()
	{
		/* $this->load->view('common/HeaderAdmin');
		$this->load->view('admin/configuracion'); */
	}

	public function configuracion()
	{
		/* $usuario = $this->Functions->find('usuarios', $this->session->userdata('id'));
		, compact('usuario') */

		$this->load->view('common/HeaderAdmin');
		$this->load->view('admin/configuracion');
		$this->load->view('common/FooterAdmin');
	}

	public function update_user(){
	/* 	
		Hay que acomodar unas cosas en la BD y hacer otras tablas 
	$id = $this->input->post('id');
		$departamento = $this->input->post('departamento');
		$region = $this->input->post('region');
		$distrito = $this->input->post('distrito');
		$razon_social = $this->input->post('razon_social');
		$dni = $this->input->post('dni');
		$telefono = $this->input->post('telefono');
		$direccion = $this->input->post('direccion');
		$correo = $this->input->post('correo');
		$usuario = $this->input->post('usuario');
		$apellido = $this->input->post('apellido');
		$avenida = $this->input->post('avenida');
		$foto = $this->input->post('foto');
		$pass = $this->input->post('pass');
		$pass2 = $this->input->post('pass2');

		if ($pass == $pass2) {
            $pass = md5($this->input->post('pass'));
        }else{
            echo 'error contraseñas diferentes';
            exit;
        }

		// actualizar el registro en la base de datos 
        $consulta = $this->db->query("UPDATE usuarios SET 
        UbicacionID = '$UbicacionID', 
        Nombre = '$usuario',
		Apellido = '$Apellido',
		correo = '$correo',
		Telefono = '$Telefono',
		DNI = '$dni',
		Direccion = '$direccion',
		Nickname = '$usuario',
		password = '$pass',
		foto_perfil = '$foto',
		tipo_usuario = 'Estandar'
        WHERE id = $id");    

        if ($consulta) {
            echo 1;
        } else {
            echo 0;
        }  	 */
	}
	
	public function negocios()
	{
		$this->load->view('common/HeaderAdmin');
		$this->load->view('negocios/create-empresa');
		$this->load->view('common/FooterAdmin');
    }

    public function inbox()
	{
		$this->load->view('common/HeaderAdmin');
		$this->load->view('admin/inbox');
		$this->load->view('common/FooterAdmin');
    }

    public function favoritos()
	{
		$this->load->view('common/HeaderAdmin');
		$this->load->view('admin/favoritos');
		$this->load->view('common/FooterAdmin');
    }

    public function notificaciones()
	{
		$this->load->view('common/HeaderAdmin');
		$this->load->view('admin/notificaciones');
		$this->load->view('common/FooterAdmin');
	}
	
	public function save_image(){

		//Obtenemos algunos datos necesarios sobre el archivo
		$archivo = date('Y_m_d_h_i_s')."_".$_FILES['file']['name'];

		// eliminar espacios en blanco
		$archivo = str_replace(' ', '_', $archivo);
		$temp = $_FILES['file']['tmp_name'];

		//Se intenta subir al servidor
	
		if (move_uploaded_file($temp, './uploads/negocios/'.$archivo)) {
			echo 1;
		}else{
			echo 2;
		}
		
	}
    
}
