<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('Functions');
	}
	
	public function index()
	{
		$this->load->view('common/HeaderCliente');
		$this->load->view('common/header');
		$this->load->view('welcome');
		$this->load->view('common/FooterAdmin');
	}
}
