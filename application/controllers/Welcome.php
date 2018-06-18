<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		header('Access-Control-Allow-Origin: http://127.0.0.1/');
		header('Access-Control-Allow-Origin: htpp://localhost/');
		header('Access-Control-Allow-Credentials: true');
		$this->load->view('index_view');
	}
}
