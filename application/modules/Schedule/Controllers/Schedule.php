<?php

class Schedule extends MX_Controller{
    public function index(){
        $this->load->view('common/head');
        $this->load->view('common/menu');
        $this->load->view('template_pages/calendar');
        $this->load->view('common/footer');
    }
}