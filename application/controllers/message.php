<?php

class message extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_message');

        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">please login!</div>');
            redirect('forms');
        }
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryAllmessage = $this->model_message->getDatamessage();
        $DATA['queryAllmessage'] = $queryAllmessage;
        $title['title'] = 'Message - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/message/message', $DATA);
        $this->load->view('footer');
    }

    public function message_detail($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryAllmessageDetail = $this->model_message->getDatamessageDetail($id);
        $DATA['queryAllmessageDetail'] = $queryAllmessageDetail;
        $title['title'] = 'Detail Message - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/message/detail_message', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_message->hapusDatamessage($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Pesan Berhasil Dihapus!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
