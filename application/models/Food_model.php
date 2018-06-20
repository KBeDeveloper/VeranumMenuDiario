<?php 
DEFINED('BASEPATH') OR EXIT('No direct script access allowed');

class User_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();        
    }
    //CRUD
    public function create($food){
        return $this->db->insert('COMIDA', $food);
    }
    public function read($food_id){
        $this->db->where('COMIDA_ID', $food_id);
        return $this->db->get('COMIDA')->result_array();
    }
    public function update($food_id, $food_data){
        $this->db->where('COMIDA_ID', $food_id);
        return $this->db->update('COMIDA', $food_data);
    }
    
    public function delete($food_id){
        $this->db->where('COMIDA_ID',$food_id);
        return $this->db->delete('COMIDA');
    }
    public function getAll(){
        return $this->db->get('COMIDA')->result_array();
    }

    public function getAllByType($food_type){
        $this->db->where('COMIDA_TIPO',$food_type);
        return $this->db->get('COMIDA')->result_array();
    }
}
?>