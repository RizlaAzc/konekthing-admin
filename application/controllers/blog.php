<?php

class blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $title['title'] = 'Blog - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/blog/blog');
        $this->load->view('footer');
    }
}
