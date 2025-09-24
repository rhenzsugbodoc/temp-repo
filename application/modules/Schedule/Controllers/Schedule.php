<?php

class Schedule extends MX_Controller{
    public function index(){
        $this->load->view('common/head');
        $this->load->view('common/menu');
        $this->load->view('Schedule_page');
        $this->load->view('common/footer');
    }
}