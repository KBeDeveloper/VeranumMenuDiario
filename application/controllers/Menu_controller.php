<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_controller extends CI_Controller {
	public function index()
	{
		header('Access-Control-Allow-Origin: http://127.0.0.1/');
		header('Access-Control-Allow-Origin: htpp://localhost/');
		header('Access-Control-Allow-Credentials: true');
		$this->load->model('Meal_model');
		$listaD['listaD']=$this->Meal_model->getAllByType(1);
		$listaA['listaA']=$this->Meal_model->getAllByType(2);
		$listaC['listaC']=$this->Meal_model->getAllByType(3);
		$listaO['listaO']=$this->Meal_model->getAllByType(4);
		$this->load->view('menu_view',$listaD,$listaA,$listaC,$listaO);		
	}
}