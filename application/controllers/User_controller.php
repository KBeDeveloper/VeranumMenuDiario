<?php
    DEFINED('BASEPATH') OR EXIT('No direct script access allowed');

    class User_controller extends CI_Controller {
    
        /**
         * Index Page for this controller.
         *
         * Maps to the following URL
         * 		http://example.com/index.php/welcome
         *	- or -
         * 		http://example.com/index.php/welcome/index
         *	- or -
         * Since this controller is set as the default controller in
         * config/routes.php, it's displayed at http://example.com/
         *
         * So any other public methods not prefixed with an underscore will
         * map to /index.php/welcome/<method_name>
         * @see https://codeigniter.com/user_guide/general/urls.html
         */
        public function index()
        {
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
                "RESERVA_FECHA"       => DateTime::createFromFormat('dd/mm/YYYY',$this->input->post('input-date')),
                "RESERVA_HORA"        => DateTime::createFromFormat('hh:MM',$_POST['select-hour'],
                "RESERVA_CLIENTE_RUN" => $this->input->post('input-run')
            ];
            if(count($this->Reservation_model->readHour($reservation_data[0]['RESERVA_CLIENTE_RUN'],$reservation_data[0]['RESERVA_HORA'],$reservation_data[0]['RESERVA_FECHA']))>0){
            if (count($this->User_model->read($user_data[0]['USUARIO_RUN']))>0){
                $this->Reservation_model->create($reservation_data);
            }else{
                $this->User_model->create($user_data);
                $this->Reservation_model->create($reservation_data);
            }
        }else{
            echo('Hora ya ingresada, intente con otra hora porfavor')
        }
        }
    }
?>