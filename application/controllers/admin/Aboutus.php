<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {
    
    
    public function __construct()
    {
        parent::__construct();
   //     $this->load->model('admin/Aboutus_model', 'AboutusModel');        
    }
    

    public function index()
    {
        $title['title'] = ['header'=>'About Us', 'dash'=>'Aboutus'];
        //$data['data'] = $this->AboutusModel->select();
        $this->load->view('admin/template/header', $title);
        $this->load->view('admin/aboutus');
        $this->load->view('admin/template/footer', $title);
    }

}