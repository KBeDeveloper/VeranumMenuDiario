<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_controller extends CI_Controller {
	public function index()
	{
		header('Access-Control-Allow-Origin: http://127.0.0.1/');
		header('Access-Control-Allow-Origin: htpp://localhost/');
		header('Access-Control-Allow-Credentials: true');
		$this->load->view('menu_view');
		
	}
}