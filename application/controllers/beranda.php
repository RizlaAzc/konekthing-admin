<?php

class beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_beranda');

        // agar user tidak sembarangan masuk ke halaman tanpa login
         // if(!$this->session->userdata('email')) {
         //    reditect('forms'); }

 }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryAllBeranda = $this->model_beranda->getDataBeranda();
        $DATA = array('queryAllBrnd' => $queryAllBeranda);
        $title['title'] = 'Beranda - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/beranda/beranda', $DATA);
        $this->load->view('footer');
    }

    public function tambah_beranda()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $title['title'] = 'Tambah Beranda - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/beranda/tambah-beranda');
        $this->load->view('footer');
    }

    public function edit_beranda($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryBerandaDetail = $this->model_beranda->getDataBerandaDetail($id);
        $DATA = array('queryBrndDetail' => $queryBerandaDetail);
        $title['title'] = 'Edit Beranda - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/beranda/edit-beranda', $DATA);
        $this->load->view('footer');
    }

    public function detail_beranda($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryBerandaDetail = $this->model_beranda->getDataBerandaDetail($id);
        $DATA = array('queryBrndDetail' => $queryBerandaDetail);
        $title['title'] = 'Detail Beranda - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/beranda/detail-beranda', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $url = $this->input->post('url');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/gambar/beranda';
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
            'url' => $url,
            'gambar' => $gambar
        );

        $this->model_beranda->insertDataBeranda($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect(base_url('beranda'));
    }

    public function fungsi_edit()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $url = $this->input->post('url');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/gambar/beranda';
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
            'gambar' => $gambar,
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'url' => $url
        );

        $this->model_beranda->updateDataBeranda($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('beranda'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_beranda->hapusDataBeranda($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect(base_url('beranda'));
    }
}
