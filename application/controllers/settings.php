<?php

class settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">please login!</div>');
            redirect('forms');
                   
            }
 }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $title['title'] = 'Settings - Konekthing Admin';
        $this->load->view('header',$title);
        $this->load->view('admin/settings');
        $this->load->view('footer');
    }
}
