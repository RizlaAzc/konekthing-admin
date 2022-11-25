<?php

class sosial_media extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_sosial_media');

        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">please login!</div>');
            redirect('forms');
        }
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryAllSosialMedia = $this->model_sosial_media->getDatasosial_media();
        $DATA['queryAllSosialMedia'] = $queryAllSosialMedia;
        $title['title'] = 'Sosial Media - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/sosial_media/sosial_media', $DATA);
        $this->load->view('footer');
    }

    public function edit_portofolio($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryportofolioDetail = $this->model_portofolio->getDataPortofolioDetail($id);
        $querymasterportofolioDetail = $this->model_master_kategori_portofolio->getDatakategori_Portofolio($id);
        $querykategoriportofolioDetail = $this->model_kategori_portofolio->getDatakategori_PortofolioDetail($id);
        $DATA['queryPrdkDetail'] = $queryportofolioDetail;
        $DATA['querymasterportofolioDetail'] = $querymasterportofolioDetail;
        $DATA['querykategoriportofolioDetail'] = $querykategoriportofolioDetail;
        $title['title'] = 'Edit Portofolio - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/portofolio/edit_portofolio', $DATA);
        $this->load->view('footer');
    }

    public function detail_portofolio($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryportofolioDetail = $this->model_portofolio->getDataPortofolioDetail($id);
        $querymasterportofolioDetail = $this->model_master_kategori_portofolio->getDatakategori_Portofolio($id);
        $querykategoriportofolioDetail = $this->model_kategori_portofolio->getDatakategori_PortofolioDetail($id);
        $DATA['queryPrdkDetail'] = $queryportofolioDetail;
        $DATA['querymasterportofolioDetail'] = $querymasterportofolioDetail;
        $DATA['querykategoriportofolioDetail'] = $querykategoriportofolioDetail;
        $title['title'] = 'Detail Portofolio - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/portofolio/detail_portofolio', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $nama = $this->input->post('nama');
        $url = $this->input->post('url');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/gambar/sosial_media';
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
            'nama' => $nama,
            'url' => $url,
            'gambar' => $gambar
        );

        $this->model_sosial_media->insertDatasosial_media($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fungsi_edit()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
            $ArrUpdate = array(
                'id' => $id,
                'judul' => $judul,
                'deskripsi' => $deskripsi
            );
        } else {
            $config['upload_path'] = 'assets/gambar/portofolio';
            $config['allowed_types'] = 'jpg|png|gif|jpeg|svg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $ArrUpdate = array(
                    'id' => $id,
                    'judul' => $judul,
                    'deskripsi' => $deskripsi
                );
            } else {
                $gambar = $this->upload->data('file_name');
                $ArrUpdate = array(
                    'id' => $id,
                    'judul' => $judul,
                    'deskripsi' => $deskripsi,
                    'gambar' => $gambar
                );
            }
        }

        $this->model_portofolio->updateDataPortofolio($id, $ArrUpdate);
        $hapus_kategori = $this->model_kategori_portofolio->hapusDatakategori_Portofolio($id);
        $id_kategori = $this->input->post('id_kategori');
        if ($hapus_kategori) {
            for ($i = 0; $i < count($id_kategori); $i++) {
                $kategori_id = $id_kategori[$i];
                $ArrUpdateKategori = array(
                    'id_portofolio' => $id,
                    'id_kategori' => $kategori_id
                );
                $this->model_kategori_portofolio->insertDatakategori_portofolio($ArrUpdateKategori);
            }
        } else {
            echo "Gagal Hapus";
        }

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('portofolio'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_portofolio->hapusDataPortofolio($id);
        $this->model_kategori_portofolio->hapusDatakategori_Portofolio($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
