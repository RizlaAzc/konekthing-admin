<?php

class portofolio extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("header");
        $this->load->view("admin/user/portofolio/portofolio");
        $this->load->view("footer");
    }
}
