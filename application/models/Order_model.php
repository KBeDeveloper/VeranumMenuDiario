<?php 
DEFINED('BASEPATH') OR EXIT('No direct script access allowed');

class User_model extends CI_Model{
    
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
}
?>