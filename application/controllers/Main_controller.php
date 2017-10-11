<?php

class main_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('form');
        }

    function ajouter(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nbPersonnes', 'nbPersonnes', 'required');
        
}
}

?>