<?php
    DEFINED('BASEPATH') OR EXIT('No direct script access allowed');

    class User_controller extends CI_Controller {    
        public function index(){
            $this->load->model('User_model');
            $this->load->model('Reservation_model');
            $user_data = [
                "USUARIO_RUN"         => $this->input->post('input-run'),
                "USUARIO_DV"          => $_POST['select-dv'],
                "USUARIO_NOMBRE"      => $this->input->post('input-name'),
                "USUARIO_TELEFONO"    => $this->input->post('input-phone'),
                "USUARIO_CORREO"      => $this->input->post('input-email'),
                "USUARIO_TIPO"        => 2             
            ];            
            $reservation_data = [
                "RESERVA_COMENSALES"  => (int)$_POST['select-commensals'],
                "RESERVA_FECHA"       => DateTime::createFromFormat('d/m/Y',$this->input->post('input-date')),
                "RESERVA_HORA"        => DateTime::createFromFormat("'t'? HH:MM",$_POST['select-hour'],
                "RESERVA_CLIENTE_RUN" => $this->input->post('input-run')
            ];
            if(count($this->Reservation_model->readHour($reservation_data[0]['RESERVA_CLIENTE_RUN'],$reservation_data[0]['RESERVA_HORA'],$reservation_data[0]['RESERVA_FECHA']))>0){            

            }else{
                if (count($this->User_model->read($user_data[0]['USUARIO_RUN']))>0){
                    $this->Reservation_model->create($reservation_data);
                    redirect
                }else{
                    $this->User_model->create($user_data);
                    $this->Reservation_model->create($reservation_data);
                }
            } 
        }     
    }
?>