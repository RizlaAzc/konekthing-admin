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
        $p = $this->model_portofolio->getDataportofolio();
        $DATA = array('queryAllPrdk' => $p);
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

    public function detail_portofolio($id)
    {
        $queryportofolioDetail = $this->model_portofolio->getDataPortofolioDetail($id);
        $DATA = array('queryPrdkDetail' => $queryportofolioDetail);
        $title['title'] = 'Detail Portofolio - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/portofolio/detail_portofolio', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/gambar/portofolio';
            $config['allowed_types'] = 'jpg|png|gif|jpeg|svg';
            
            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Upload Gagal";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }


        $ArrInsert = array(
            'id' => $id,
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar
        );

        $this->model_portofolio->insertDataportofolio($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect(base_url('portofolio'));
    }

    public function fungsi_edit()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/gambar/portofolio';
            $config['allowed_types'] = 'jpg|png|gif|jpeg|svg';
           
            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Upload Gagal";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $ArrUpdate = array(
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar
        );

        $this->model_portofolio->updateDataportofolio($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('portofolio'));
    }

    public function fungsi_hapus($id)
    {
        $this->model_portofolio->hapusDataPortofolio($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect(base_url('portofolio'));
    }
}
