<?php

class kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_kontak');
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $c = $this->model_kontak->getDatakontak();
        $DATA = array('queryAllPrdk' => $c);
        $title['title'] = 'Kontak - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/kontak/kontak', $DATA);
        $this->load->view('footer');
    }

    public function tambah_kontak()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $title['title'] = 'Tambah kontak - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/kontak/tambah_kontak');
        $this->load->view('footer');
    }

    public function edit_kontak($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $querykontakDetail = $this->model_kontak->getDatakontakDetail($id);
        $DATA = array('queryPrdkDetail' => $querykontakDetail);
        $title['title'] = 'Edit kontak - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/kontak/edit_kontak', $DATA);
        $this->load->view('footer');
    }

    public function detail_kontak($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $querykontakDetail = $this->model_kontak->getDatakontakDetail($id);
        $DATA = array('queryPrdkDetail' => $querykontakDetail);
        $title['title'] = 'Detail Kontak - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/kontak/detail_kontak', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $telepon = $this->input->post('telepon');
        $email = $this->input->post('email');
        $lokasi = $this->input->post('lokasi');
        $deskripsi = $this->input->post('deskripsi');
        $ArrInsert = array(
            'id' => $id,
            'telepon' => $telepon,
            'email' => $email,
            'lokasi' => $lokasi,
            'deskripsi' => $deskripsi
        );

        $this->model_kontak->insertDatakontak($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect(base_url('kontak'));
    }

    public function fungsi_edit()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $telepon = $this->input->post('telepon');
        $email = $this->input->post('email');
        $lokasi = $this->input->post('lokasi');
        $deskripsi = $this->input->post('deskripsi');
        $ArrUpdate = array(
            'id' => $id,
            'telepon' => $telepon,
            'email' => $email,
            'lokasi' => $lokasi,
            'deskripsi' => $deskripsi
        );

        $this->model_kontak->updateDatakontak($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('kontak'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_kontak->hapusDatakontak($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect(base_url('kontak'));
    }
}
