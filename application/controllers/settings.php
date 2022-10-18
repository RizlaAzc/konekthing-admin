<?php

class settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $title['title'] = 'Settings - Konekthing Admin';
        $this->load->view('header',$title);
        $this->load->view('admin/settings');
        $this->load->view('footer');
    }
}
