<?php

class beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $title['title'] = 'Beranda - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/beranda/beranda');
        $this->load->view('footer');
    }
}
