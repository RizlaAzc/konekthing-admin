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
        $queryAllProduk = $this->model_produk->getDataProduk();
        $DATA = array('queryAllPrdk' => $queryAllProduk);
        $this->load->view('header');
        $this->load->view('admin/user/produk/produk', $DATA);
        $this->load->view('footer');
    }

    public function tambah_produk()
    {
        $this->load->view('header');
        $this->load->view('admin/user/produk/tambah-produk');
        $this->load->view('footer');
    }

    public function edit_produk($id)
    {
        $queryProdukDetail = $this->model_produk->getDataProdukDetail($id);
        $DATA = array('queryPrdkDetail' => $queryProdukDetail);
        $this->load->view('header');
        $this->load->view('admin/user/produk/edit-produk', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
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
        $this->model_produk->hapusDataProduk($id);
        redirect(base_url('produk'));
    }
}
