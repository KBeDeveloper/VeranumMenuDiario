<?php 
DEFINED('BASEPATH') OR EXIT('No direct script access allowed');

class Order_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();        
    }
    //CRUD
    public function create($order){
        return $this->db->insert('PEDIDO', $order);
    }
    public function read($order_user_run){
        $this->db->where('PEDIDO_USUARIO_RUN', $order_user_run);
        return $this->db->get('PEDIDO')->result_array();
    }
    public function update($order_id, $order_data){
        $this->db->where('PEDIDO_ID', $order_id);
        return $this->db->update('PEDIDO', $order_data);
    }
    public function delete($order_id){
        $this->db->where('PEDIDO_ID',$order_id);
        return $this->db->delete('PEDIDO');
    }
    public function getAll(){
        return $this->db->get('PEDIDO')->result_array();
    }  
    public function getStock(){
        return $this->db->get('STOCK')->result_array();
    }
    public function getInputsByMealId($meal_id){
        $this->db->where('INSUMO_COMIDA_COMIDA_ID', $meal_id);
        return $this->db->get('INSUMO_COMIDA')->result_array();
    }
    public function getInputFromStock($input_id){
        $this->db->where('STOCK_ID', $input_id);
        return $this->db->get('STOCK')->result_array();
    }
    public function getInputsDisponibility($meal_id){
        $returnMessage = null;
        $input_list['input_list'] = getInputByMealId($meal_id);
        foreach($input_list as $key => $il){
            $stock = getInputFromStock($il['INSUMO_COMIDA_ID']);
            if($stock['STOCK_CANT_DISPONIBLE']<=0){
                $returnMessage .= 'Falta el insumo de ID ['.$sl["STOCK_ID"].' ('.$sl["STOCK_NOMBRE"].')]\n';
            }            
        }
        return $returnMessage;
    }
}
?>