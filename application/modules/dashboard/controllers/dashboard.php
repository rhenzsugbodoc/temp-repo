<?php

class Dashboard extends MX_Controller{
    public function index(){
        $this->load->view('common/head');
        $this->load->view('common/menu');
        $this->load->view('dashboard_page');
        $this->load->view('common/footer');
    }
}