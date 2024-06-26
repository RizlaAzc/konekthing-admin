<?php

class visitor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_visitor');

        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">please login!</div>');
            redirect('forms');
        }
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryAllvisitor = $this->model_visitor->getDatavisitor();

        $DATA = array('queryvisitor' => $queryAllvisitor);
        $title['title'] = 'Visitor - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/visitor', $DATA);
        $this->load->view('footer');
    }
}
