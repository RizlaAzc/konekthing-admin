<?php

class beranda extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('admin/user/beranda/beranda');
        $this->load->view('footer');
    }
}
