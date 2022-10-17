<?php

class kontak extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("header");
        $this->load->view("admin/user/kontak/kontak");
        $this->load->view("footer");
    }
}
