<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
		$this->load->view('common/HeaderAdmin');
		$this->load->view('common/header');
        $this->load->view('welcome');
		$this->load->view('common/FooterAdmin');
    }
	   
    public function logueando(){
        $correo = $this->input->post('correo');
        $password = md5($this->input->post('pass'));

        // consultar si el usuario existe en la base de datos
        $verificar = $this->db->query("SELECT * FROM usuarios WHERE correo = '$correo' and password = '$password'")->result_array();
        
        // si existe el usuario guardar la sesion y entrar al admin
        if ($verificar) {
            $usuario = $verificar[0];
            $this->session->set_userdata($usuario);

            header('Location: '.base_url('login'));

        // si no existe el usuario mostrar mensaje de advertencia
        } else {
            /* mensaje de alerta */
            $this->session->set_flashdata('error', 'Error! usuario incorrecto...');
            header('Location: '.base_url('welcome'));
        }
    }

    public function store_user(){
		$nombre = $this->input->post('nombre');		
        $apellido = $this->input->post('apellido');
        $correo = $this->input->post('correo');		
        $region = $this->input->post('region');
        $provincia = $this->input->post('provincia');		
        $distrito = $this->input->post('distrito');
        $pass = $this->input->post('pass');		
        $pass2 = $this->input->post('pass2');
        $telefono = '0';
        $nick = '...';
        $e = '...';
        if ($pass == $pass2) {
            $pass = md5($this->input->post('pass'));
        }else{
            echo 'error contraseñas diferentes';
            exit;
        }
     
		// verificar si ya existe 
		$verificar = $this->db->query("SELECT * FROM usuarios WHERE correo = '$correo' ")
		->result_object();
		
		if ($verificar) {
			 /* mensaje de alerta */
             $this->session->set_flashdata('error', 'Error! el correo ya esta registrado...');
		} else {

            // insertar registro de ubicacion
			$inserubi = $this->db->query("INSERT INTO ubicacion VALUES(null,
			'$distrito',
            '$region',
			'$provincia',
			'$correo'
            )");

            $consultar = $this->db->query("SELECT * FROM ubicacion WHERE correo = '$correo'")->result_object();

            if ($consultar) {
                $ubicacion = $conaultar['UbicacionID'];
            }else{
                echo 'error';
                exit;
            }
            
			// insertar registro en la tabla
			$insertar = $this->db->query("INSERT INTO usuarios VALUES(null,
            '$ubicacion',
			'$nombre',
			'$apellido',
            '$correo',
            '$telefono',
			'$telefono',
            '$telefono',
			'$nick',
            '$pass',
			'$telefono',
            '$e'
			)");

			if ($insertar) {
				/* mensaje de alerta */
                $usuario = $insertar;
                $this->session->set_userdata($usuario);
                header('Location: '.base_url('login'));
			} else {
				/* mensaje de alerta */
                $this->session->set_flashdata('error', 'Error! al registrar...');
			}
		}
	}

    public function cerrar_sesion(){
        $this->session->sess_destroy();
        header('Location: '.base_url('welcome'));
    }
}
