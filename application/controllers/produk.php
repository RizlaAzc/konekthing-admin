<?php

class produk extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("header");
        $this->load->view("admin/user/produk");
        $this->load->view("footer");
    }
}
