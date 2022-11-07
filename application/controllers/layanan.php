<?php

class layanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_layanan');
        $this->load->model('model_layananfitur');
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryAllLayanan = $this->model_layanan->getDataLayanan();
        $DATA = array('queryAllLayanan' => $queryAllLayanan);
        $title['title'] = 'Layanan - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/layanan/layanan', $DATA);
        $this->load->view('footer');
    }

    public function tambah_layanan()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $title['title'] = 'Tambah Layanan - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/layanan/tambah-layanan');
        $this->load->view('footer');
    }

    public function edit_layanan($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryLayananDetail = $this->model_layanan->getDataLayananDetail($id);
        $DATA = array('queryLynDetail' => $queryLayananDetail);
        $title['title'] = 'Edit Layanan - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/layanan/edit-layanan', $DATA);
        $this->load->view('footer');
    }

    public function detail_layanan($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryLayananDetail = $this->model_layanan->getDataLayananDetail($id);
        $DATA = array('queryLynDetail' => $queryLayananDetail);
        $title['title'] = 'Detail Layanan - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/layanan/detail-layanan', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $nama = $this->input->post('nama');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $ArrInsert = array(
            'nama' => $nama,
            'judul' => $judul,
            'deskripsi' => $deskripsi
        );

        $this->model_layanan->insertDataLayanan($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect(base_url('layanan'));
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
            $config['upload_path'] = 'assets/gambar/layanan';
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

        $this->model_layanan->updateDataLayanan($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('layanan'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_layanan->hapusDataLayanan($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect(base_url('layanan'));
    }

    /*
    Layanan_Fitur Section
    */

    public function fitur($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryLayananDetail = $this->model_layanan->getDataLayananDetail($id);
        $queryAllFitur = $this->model_layananfitur->getDataFitur($id);
        $DATA['id_layanan'] = $id;
        $DATA['queryLayananDetail'] = $queryLayananDetail;
        $DATA['queryAllFitur'] = $queryAllFitur;
        $title['title'] = 'Fitur Layanan - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/layanan/fitur/fitur', $DATA);
        $this->load->view('footer');
    }

    public function edit_fitur($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryFiturDetail = $this->model_produkfitur->getDataFiturDetail($id);
        $DATA['queryFiturDetail'] = $queryFiturDetail;
        $title['title'] = 'Edit Fitur - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/produk/fitur/edit-fitur', $DATA);
        $this->load->view('footer');
    }

    public function detail_fitur($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryFiturDetail = $this->model_layananfitur->getDataFiturDetail($id);
        $DATA = array('queryFiturDetail' => $queryFiturDetail);
        $title['title'] = 'Detail Fitur - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/produk/fitur/detail-fitur', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambahfitur()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id_layanan = $this->input->post('id_layanan');
        $nama_fitur = $this->input->post('nama_fitur');
        $deskripsi_fitur = $this->input->post('deskripsi_fitur');

        $ArrInsert = array(
            'id_layanan' => $id_layanan,
            'nama_fitur' => $nama_fitur,
            'deskripsi_fitur' => $deskripsi_fitur
        );

        $this->model_layananfitur->insertDataFitur($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect(base_url('layanan/fitur/' . $id_layanan));
    }

    public function fungsi_editfitur()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $id_produk = $this->input->post('id_produk');
        $nama_fitur = $this->input->post('nama_fitur');
        $deskripsi_fitur = $this->input->post('deskripsi_fitur');
        $gambar_fitur = $_FILES['gambar_fitur'];

        if ($gambar_fitur = '') {
        } else {
            $config['upload_path'] = 'assets/gambar/produk/fitur';
            $config['allowed_types'] = 'jpg|png|gif|jpeg|svg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar_fitur')) {
                echo "Upload Gagal";
            } else {
                $gambar_fitur = $this->upload->data('file_name');
            }
        }
        $ArrUpdate = array(
            'id' => $id,
            'id_produk' => $id_produk,
            'nama_fitur' => $nama_fitur,
            'deskripsi_fitur' => $deskripsi_fitur,
            'gambar_fitur' => $gambar_fitur
        );

        $this->model_produkfitur->updateDataFitur($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('produk/fitur/' . $id_produk));
    }

    public function fungsi_hapusfitur($id)
    {
        $id_produk = $this->input->post('id_produk');
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_produkfitur->hapusDataFitur($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect(base_url('produk/fitur/' . $id_produk));
    }
}
