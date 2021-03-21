<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anuncios extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('Functions');
       /*  $this->Functions->validar_sesion(); */
	}
	
	public function index()
	{
		$this->load->view('common/HeaderAdmin');
		$this->load->view('anuncios/anuncios');
		$this->load->view('common/FooterAdmin');
	}
	
	public function create()
	{
		$this->load->view('common/HeaderAdmin');
		$this->load->view('anuncios/create-anuncio');
		$this->load->view('common/FooterAdmin');
	}
	
	public function save_image(){

		//Obtenemos algunos datos necesarios sobre el archivo
		$archivo = date('Y_m_d_h_i_s')."_".$_FILES['file']['name'];

		// eliminar espacios en blanco
		$archivo = str_replace(' ', '_', $archivo);
		$temp = $_FILES['file']['tmp_name'];

		//Se intenta subir al servidor
	
		if (move_uploaded_file($temp, './uploads/anuncios/'.$archivo)) {
			echo 1;
		}else{
			echo 2;
		}
		
	}
    
}
