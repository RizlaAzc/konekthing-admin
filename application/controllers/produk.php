<?php

class produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_produk');
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryAllProduk = $this->model_produk->getDataProduk();
        $DATA = array('queryAllPrdk' => $queryAllProduk);
        $title['title'] = 'Produk - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/produk/produk', $DATA);
        $this->load->view('footer');
    }

    public function tambah_produk()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $title['title'] = 'Tambah Produk - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/produk/tambah-produk');
        $this->load->view('footer');
    }

    public function edit_produk($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryProdukDetail = $this->model_produk->getDataProdukDetail($id);
        $DATA = array('queryPrdkDetail' => $queryProdukDetail);
        $title['title'] = 'Edit Produk - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/produk/edit-produk', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $ArrInsert = array(
            'id' => $id,
            'nama' => $nama
        );

        $this->model_produk->insertDataProduk($ArrInsert);
        redirect(base_url('produk'));
    }

    public function fungsi_edit()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $ArrUpdate = array(
            'nama' => $nama
        );

        $this->model_produk->updateDataProduk($id, $ArrUpdate);
        redirect(base_url('produk'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_produk->hapusDataProduk($id);
        redirect(base_url('produk'));
    }
}
