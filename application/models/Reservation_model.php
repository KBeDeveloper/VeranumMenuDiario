<?php 
DEFINED('BASEPATH') OR EXIT('No direct script access allowed');

class User_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();        
    }
    //CRUD
    public function create($reservation){
        return $this->db->insert('RESERVA', $reservation);
    }
    public function read($reservation_user_run){
        $this->db->where('PEDIDO_USUARIO_RUN', $reservation_user_run);
        return $this->db->get('RESERVA')->result_array();
    }
    public function readHour($reservation_user_run,$reservation_hour, $reservation_date){
        $this->db->where('RESERVA_CLIENTE_RUN', $reservation_user_run);
        $this->db->where('RESERVA_HORA', $reservation_hour);
        $this->db->where('RESERVA_FECHA', $reservation_date);
        return $this->db->get('RESERVA')->result_array();
    }
    public function update($reservation_id, $reservation_data){
        $this->db->where('PEDIDO_ID', $reservation_id);
        return $this->db->update('RESERVA', $reservation_data);
    }
    public function delete($reservation_id){
        $this->db->where('PEDIDO_ID',$reservation_id);
        return $this->db->delete('RESERVA');
    }
    public function getAll(){
        return $this->db->get('RESERVA')->result_array();
    }
}
?>