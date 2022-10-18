<?php

class visitor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $title['title'] = 'Visitor - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/visitor');
        $this->load->view('footer');
    }
}
