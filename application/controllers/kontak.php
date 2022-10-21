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
        $c= $this->model_kontak->getDatakontak();
        $DATA = array('queryAllPrdk' => $c);
        $title['title'] = 'Kontak - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/kontak/kontak', $DATA);
        $this->load->view('footer');
    }

     public function tambah_kontak()
    {
        $title['title'] = 'Tambah kontak - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/kontak/tambah_kontak');
        $this->load->view('footer');
    }

    public function edit_kontak($id)
    {
        $querykontakDetail = $this->model_kontak->getDatakontakDetail($id);
        $DATA = array('queryPrdkDetail' => $querykontakDetail);
        $title['title'] = 'Edit kontak - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/kontak/edit_kontak', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        
        $id = $this->input->post('id');
        $email = $this->input->post('email');
        $telepon = $this->input->post('telepon');
        $lokasi = $this->input->post('lokasi');
        $deskripsi = $this->input->post('deskripsi');
        $ArrInsert = array(
            'id' => $id,
            'email' => $email,
            'telepon' => $telepon,
            'lokasi' => $lokasi,
            'deskripsi' => $deskripsi
        );

         $this->model_kontak->insertDatakontak($ArrInsert);
        redirect(base_url('kontak'));
    }

    public function fungsi_edit()
    {
        $id = $this->input->post('id');
        $email = $this->input->post('email');
        $telepon = $this->input->post('telepon');
        $lokasi = $this->input->post('lokasi');
        $deskripsi = $this->input->post('deskripsi');
        $ArrUpdate = array(
            'id' => $id,
            'email' => $email,
            'telepon' => $telepon,
            'lokasi' => $lokasi,
            'deskripsi' => $deskripsi
        );

        $this->model_kontak->updateDatakontak($id, $ArrUpdate);
        redirect(base_url('kontak'));
    }

    public function fungsi_hapus($id)
    {
        $this->model_kontak->hapusDatakontak($id);
        redirect(base_url('kontak'));
    }
}




