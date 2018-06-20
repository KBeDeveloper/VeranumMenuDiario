<?php
    DEFINED('BASEPATH') OR EXIT('No direct script access allowed');

    class Functionary_controller extends CI_Controller { 
        public function __construct(){
            parent::__construct();
        }   
        public function index(){            
            header('Access-Control-Allow-Origin: http://127.0.0.1/');
		    header('Access-Control-Allow-Origin: htpp://localhost/');
		    header('Access-Control-Allow-Credentials: true');
		    $this->load->view('inputs_view');	
        }
        public function queryInputs($meal_id){
            $this->load->model('Meal_model');
            $input_list = $this->Meal_model->getInputByMealId($meal_id);
            $input_list->foreach(){
                //para cada input de la comida, se consulta a la tabla stock si dicho insumo tiene una cantidad mayor a cero, 
                //utilizando la función getInputFromStock del modelo Meal_model
            }
            $this->db->query('SELECT STOCK_CANT_DISPONIBLE FROM STOCK '):
        }
    }
?>