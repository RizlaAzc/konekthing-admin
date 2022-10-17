<?php

class blog extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('admin/user/blog/blog');
        $this->load->view('footer');
    }
}
