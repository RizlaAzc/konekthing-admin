<?php

class kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $title['title'] = 'Kontak - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/kontak/kontak');
        $this->load->view('footer');
    }
}
