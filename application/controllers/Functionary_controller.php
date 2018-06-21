<?php
    DEFINED('BASEPATH') OR EXIT('No direct script access allowed');

    class Functionary_controller extends CI_Controller { 
        public function __construct(){
            parent::__construct();
            $this->load->model('Order_model');
        }
        public function index(){            
            header('Access-Control-Allow-Origin: http://127.0.0.1/');
		    header('Access-Control-Allow-Origin: htpp://localhost/');
            header('Access-Control-Allow-Credentials: true');
            $stock_list['stock_list'] = $this->Order_model->getStock();
		    $this->load->view('inputs_view', $stock_list);
        }
        public function stockFromMeal($meal_id){
            
        }
    }
?>