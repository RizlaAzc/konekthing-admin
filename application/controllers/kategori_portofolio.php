<?php

class kategori_portofolio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_kategori_portofolio');
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $p = $this->model_kategori_portofolio->getDatakategori_portofolio();
        $DATA = array('queryAllPrdk' => $p);
        $title['title'] = 'Kategori Portofolio - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/master/kategori_portofolio/portofolio', $DATA);
        $this->load->view('footer');
    }

    public function edit_portofolio($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $portofolioDetail = $this->model_kategori_portofolio->getDatakategori_PortofolioDetail($id);
        $DATA = array('queryPrdkDetail' => $portofolioDetail);
        $title['title'] = 'Edit Kategori Portofolio - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/master/kategori_portofolio/edit_portofolio', $DATA);
        $this->load->view('footer');
    }

    public function detail_portofolio($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $portofolioDetail = $this->model_kategori_portofolio->getDatakategori_PortofolioDetail($id);
        $DATA = array('queryPrdkDetail' => $portofolioDetail);
        $title['title'] = 'Detail Kategori Portofolio - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/master/kategori_portofolio/detail_portofolio', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $kategori_portofolio = $this->input->post('kategori_portofolio');


        $ArrInsert = array(
            'id' => $id,
            'kategori_portofolio' => $kategori_portofolio,

        );

        $this->model_kategori_portofolio->insertDatakategori_portofolio($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect(base_url('kategori_portofolio'));
    }

    public function fungsi_edit()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $kategori_portofolio = $this->input->post('kategori_portofolio');


        $ArrUpdate = array(
            'kategori_portofolio' => $kategori_portofolio,

        );

        $this->model_kategori_portofolio->updateDatakategori_Portofolio($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('kategori_portofolio'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_kategori_portofolio->hapusDatakategori_Portofolio($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect(base_url('kategori_portofolio'));
    }
}
