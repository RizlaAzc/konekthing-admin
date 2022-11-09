<?php

class kategori_produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_kategori_produk');
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $p = $this->model_kategori_produk->getDataKategori();
        $DATA = array('queryAllKategori' => $p);
        $title['title'] = 'Kategori Produk - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/master/kategori_produk/produk', $DATA);
        $this->load->view('footer');
    }

    public function edit_produk($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $p = $this->model_kategori_produk->getDataKategoriDetail($id);
        $DATA = array('queryKategoriDetail' => $p);
        $title['title'] = 'Edit Kategori Produk - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/master/kategori_produk/edit_produk', $DATA);
        $this->load->view('footer');
    }

    public function detail_produk($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryKategoriDetail = $this->model_kategori_produk->getDataKategoriDetail($id);
        $DATA = array('queryKategoriDetail' => $queryKategoriDetail);
        $title['title'] = 'Detail Kategori Produk - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/master/kategori_produk/detail_produk', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $kategori_produk = $this->input->post('kategori_produk');

        $ArrInsert = array(
            'kategori_produk' => $kategori_produk
        );

        $this->model_kategori_produk->insertDataKategori($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect(base_url('kategori_produk'));
    }

    public function fungsi_edit()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $kategori_produk = $this->input->post('kategori_produk');


        $ArrUpdate = array(
            'kategori_produk' => $kategori_produk,

        );

        $this->model_kategori_produk->updateDataKategori($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('kategori_produk'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_kategori_produk->hapusDataKategori($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect(base_url('kategori_produk'));
    }
}
