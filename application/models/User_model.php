<?php 
DEFINED('BASEPATH') OR EXIT('No direct script access allowed');

class User_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();        
    }
    //CRUD
    public function create($user){
        
    }
}
?>