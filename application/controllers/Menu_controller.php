<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */	
	public function index()
	{
		header('Access-Control-Allow-Origin: http://127.0.0.1/');
		header('Access-Control-Allow-Origin: htpp://localhost/');
		header('Access-Control-Allow-Credentials: true');
		$this->load->view('menu_view');
	}
}