<?php
    DEFINED('BASEPATH') OR EXIT('No direct script access allowed');

    class Functionary_controller extends CI_Controller { 
        public function __construct(){
            parent::__construct();
            $this->load->model('Order_model');
            $this->load->model('User_model');
        }
        public function index(){            
            header('Access-Control-Allow-Origin: http://127.0.0.1/');
		    header('Access-Control-Allow-Origin: htpp://localhost/');
            header('Access-Control-Allow-Credentials: true');
            $inputs['inputsFromStock'] = $this->Order_model->getStock();
            $inputs['default'] = 1;
            $inputs['functionary'] = [];
            $this->load->view('inputs_view', $inputs);
            
        }
        public function stockFromMeal($meal_id){
            $inputs['inputsFromMeal'] = $this->Order_model->getInputsByMealId($meal_id);    
            $inputs['inputsFromStock'] = [];
            $inputs['default'] = 0;
            $inputs['functionary'] = [];
            foreach($inputs['inputsFromMeal'] as $key => $im){
               array_push($inputs['inputsFromStock'], $this->Order_model->getInputsFromStock($im['INSUMO_COMIDA_STOCK_ID']));
            }
            //echo json_encode($inputs['inputsFromStock']);
            $this->load->view('inputs_view', $inputs);
        }
        public function settingFunctionary(){
            $inputs['functionary'] = [
                "USUARIO_RUN"      => $this->input->post("input-functionary-run"),
                "USUARIO_CORREO"   => $this->input->post("input-functionary-mail"),
                "USUARIO_TELEFONO" => $this->input->post("input-functionary-phone"),
                "USUARIO_DV"       => $_POST['select-dv'],
                "USUARIO_NOMBRE"   => $this->input->post("input-functionary-name"),
                "USUARIO_APELLIDO" => $this->input->post("input-functionary-lastname"),
                "USUARIO_TIPO"     => 1
            ];            
            if(count($this->User_model->read($inputs['functionary']['USUARIO_RUN'])) == 0){
                $this->User_model->create($inputs['functionary']);
            }            
            $order = [
                "PEDIDO_ID"              => count($this->Order_model->getAll())+1,
                "PEDIDO_FUNCIONARIO_RUN" => $inputs['functionary']['USUARIO_RUN']
            ];
            $this->Order_model->create($order);
            $order_info = $this->Order_model->read($order['PEDIDO_FUNCIONARIO_RUN']);
            $ind = count($this->Order_model->read($order['PEDIDO_FUNCIONARIO_RUN']));
            $this->session->order_id = $order_info[$ind]['PEDIDO_ID'];
            header('Access-Control-Allow-Origin: http://127.0.0.1/');
		    header('Access-Control-Allow-Origin: htpp://localhost/');
            header('Access-Control-Allow-Credentials: true');
            $inputs['inputsFromStock'] = $this->Order_model->getStock();
            $inputs['default'] = 1;
		    $this->load->view('inputs_view', $inputs);
        }        
        public function addInput($id){            
            if(count($this->session->fun)>0){                
                $input_data = [
                    "INSUMO_PEDIDO_CANTIDAD"  => $this->input->post('input-quantity'),
                    "INSUMO_PEDIDO_STOCK_ID"  => $id,
                    "INSUMO_PEDIDO_PEDIDO_ID" => $this->session->order_id
                ];
                $this->Order_model->createInput($input_data);
            }
            redirect('/Functionary_controller', 'refresh');
        }
    }
?>