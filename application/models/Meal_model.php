<?php 
DEFINED('BASEPATH') OR EXIT('No direct script access allowed');

class Meal_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();        
    }
    //CRUD
    public function create($meal){
        return $this->db->insert('COMIDA', $meal);
    }
    public function read($meal_id){
        $this->db->where('COMIDA_ID', $meal_id);
        return $this->db->get('COMIDA')->result_array();
    }
    public function update($meal_id, $meal_data){
        $this->db->where('COMIDA_ID', $meal_id);
        return $this->db->update('COMIDA', $meal_data);
    }
    
    public function delete($meal_id){
        $this->db->where('COMIDA_ID',$meal_id);
        return $this->db->delete('COMIDA');
    }
    public function getAll(){
        return $this->db->get('COMIDA')->result_array();
    }

    public function getAllByType($meal_type){
        $this->db->where('COMIDA_TIPO',$meal_type);
        return $this->db->get('COMIDA')->result_array();
    }

    public function getInputsByMealId($meal_id){
        $this->db->where('INSUMO_COMIDA_COMIDA_ID', $meal_id);
        return $this->db->get('INSUMO_COMIDA')->result_array();
    }

    public function getInputFromStock($input_id){
        $this->db->where('STOCK_ID', $input_id);
        return $this->db->get('STOCK')->result_array();
    }
}
?>