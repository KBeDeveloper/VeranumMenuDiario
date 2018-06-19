<?php 
DEFINED('BASEPATH') OR EXIT('No direct script access allowed');

class User_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();        
    }
    //CRUD
    public function create($user){
        return $this->db->insert('USUARIO', $user);
    }
    public function read($user_run){
        $this->db->where('USUARIO_RUN', $user_run);
        return $this->db->get('USUARIO')->result_array();
    }
    public function update($user_run, $user_data){
        $this->db->where('USUARIO_RUN', $user_run);
        return $this->db->update('USUARIO', $user_data);
    }
    public function delete($user_run){
        $this->db->where('USUARIO_RUN',$user_run);
        return $this->db->delete('USUARIO');
    }
    public function getAll(){
        return $this->db->get('USUARIO')->result_array();
    }
    //revisar. (lo hizo el seba XD)
    public  function readByType($user_type){
        $this->db->where('USUARIO_TIPO',$user_type);
        return $this->db->get('USUARIO')->result_array();
    }
}


?>