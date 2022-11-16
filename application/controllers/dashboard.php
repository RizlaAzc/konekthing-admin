<?php

class dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

         is_logged_in();

        // if (!$this->session->userdata('email')) {
        //     redirect('forms');
        // }
       
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $title['title'] = 'Dashboard - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/dashboard');
        $this->load->view('footer');
    }
}
