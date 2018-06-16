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
            $user_data = [
                "USUARIO_RUN"         => $this->input->post('input-run'),
                "USUARIO_DV"          => $_POST['select-dv'],
                "USUARIO_NOMBRE"      => $this->input->post('input-name'),
                "USUARIO_TELEFONO"    => $this->input->post('input-phone'),
                "USUARIO_CORREO"      => $this->input->post('input-email')               
            ];            
            $order_data = [
                "RESERVA_COMENSALES"  => $_POST['select-commensals'],
                "RESERVA_FECHA"       => $this->input->post('input-date'),
                "RESERVA_HORA"        => $_POST['select-hour'],
                "RESERVA_CLIENTE_RUN" => $this->input->post('input-run')
            ]; 
        }
?>