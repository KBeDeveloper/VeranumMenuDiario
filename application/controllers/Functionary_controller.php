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
            $inputs['inputsFromStock'] = $this->Order_model->getStock();
            $inputs['default'] = 1;
		    $this->load->view('inputs_view', $inputs);
        }
        public function stockFromMeal($meal_id){
            $inputs['inputsFromMeal'] = $this->Order_model->getInputsByMealId($meal_id);    
            $inputs['inputsFromStock'] = [];
            $inputs['default'] = 0;
            foreach($inputs['inputsFromMeal'] as $key => $im){
               array_push($inputs['inputsFromStock'], $this->Order_model->getInputsFromStock($im['INSUMO_COMIDA_STOCK_ID']));
            }
            //echo json_encode($inputs['inputsFromStock']);
            $this->load->view('inputs_view', $inputs);
        }
    }
?>