<?php
    DEFINED('BASEPATH') OR EXIT('No direct script access allowed');

    class User_controller extends CI_Controller { 
        public function __construct(){
            parent::__construct();
        }   
        public function index(){            
            $this->load->model('User_model');
            $this->load->model('Reservation_model');          
            $msj = "";
            $url = '/Welcome';
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
                "RESERVA_FECHA"       => DateTime::createFromFormat('d/m/Y', $this->input->post('input-date'))->format('Y-m-d'),
                "RESERVA_HORA"        => DateTime::createFromFormat('H:i', $_POST['select-hour'])->format('H:i:s'),
                "RESERVA_CLIENTE_RUN" => $this->input->post('input-run')
            ];            
            if(count($this->Reservation_model->readHour($reservation_data['RESERVA_CLIENTE_RUN'],$reservation_data['RESERVA_HORA'],$reservation_data['RESERVA_FECHA']))>0){            
                $msj = "No se pudo agregar la reserva, ya existe una registrada para esta hora";
            }else{
                if (count($this->User_model->read($user_data['USUARIO_RUN']))>0){
                    $this->Reservation_model->create($reservation_data);                    
                }else{
                    $this->User_model->create($user_data);
                    $this->Reservation_model->create($reservation_data);
                }
                $msj = "Reserva agregada exitosamente!";
            }
            $this->session->set_flashdata('msj',$msj);
            if($this->input->post('input-reservation-view') != null){
                redirect('/Order_controller','refresh');
            }else{          
            redirect('/Welcome','refresh');
            }
        }
    }
?>