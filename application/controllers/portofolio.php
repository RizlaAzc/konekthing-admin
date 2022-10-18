<?php

class portofolio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_portofolio');
    }

    public function index()
    {
        $queryAllportofolio = $this->model_portofolio->getDataportofolio();
        $DATA = array('queryAllPrdk' => $queryAllportofolio);
        $title['title'] = 'Portofolio - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/portofolio/portofolio', $DATA);
        $this->load->view('footer');
    }

    public function tambah_portofolio()
    {
        $title['title'] = 'Tambah Portofolio - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/portofolio/tambah_portofolio');
        $this->load->view('footer');
    }

    public function edit_portofolio($id)
    {
        $queryportofolioDetail = $this->model_portofolio->getDataPortofolioDetail($id);
        $DATA = array('queryPrdkDetail' => $queryportofolioDetail);
        $title['title'] = 'Edit Portofolio - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/portofolio/edit_portofolio', $DATA);
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

        $this->model_portofolio->insertDataportofolio($ArrInsert);
        redirect(base_url('portofolio'));
    }

    public function fungsi_edit()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $ArrUpdate = array(
            'nama' => $nama
        );

        $this->model_portofolio->updateDataportofolio($id, $ArrUpdate);
        redirect(base_url('portofolio'));
    }

    public function fungsi_hapus($id)
    {
        $this->model_portofolio->hapusDataPortofolio($id);
        redirect(base_url('portofolio'));
    }
}
