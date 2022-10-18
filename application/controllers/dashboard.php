<?php

class dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $title['title'] = 'Dashboard - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/dashboard');
        $this->load->view('footer');
    }
}
