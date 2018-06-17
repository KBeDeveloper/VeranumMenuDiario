<?php
    DEFINED('BASEPATH') OR EXIT('No direct script access allowed');

    class User_controller extends CI_Controller {    
        public function index()
        {
            $this->load->model('User_model');
            $this->load->model('Order_model');
            $user_data = [
                "USUARIO_RUN"         => $this->input->post('input-run'),
                "USUARIO_DV"          => $_POST['select-dv'],
                "USUARIO_NOMBRE"      => $this->input->post('input-name'),
                "USUARIO_TELEFONO"    => $this->input->post('input-phone'),
                "USUARIO_CORREO"      => $this->input->post('input-email'),
                "USUARIO_TIPO"        => 2             
            ];
            $order_data = [
                "RESERVA_COMENSALES"  => (int)$_POST['select-commensals'],
                "RESERVA_FECHA"       => DateTime::createFromFormat('d/m/Y',$this->input->post('input-date')),
                "RESERVA_HORA"        => DateTime::createFromFormat("'t'? HH:MM",$_POST['select-hour'],
                "RESERVA_CLIENTE_RUN" => $this->input->post('input-run')
            ]; 
            if (count($this->User_model->read($user_data[0]['USUARIO_RUN']))>0){
                $this->Order_model->create($order_data);
            }else{
                $this->User_model->create($user_data);
                $this->Order_model->create($order_data);
            }
        }
    }
?>