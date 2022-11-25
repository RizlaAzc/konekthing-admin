<?php

class produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_produk');
        $this->load->model('model_produkfitur');
        $this->load->model('model_produksubfitur');
        $this->load->model('model_kategori_produk');
        $this->load->model('model_master_kategori_produk');

        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">please login!</div>');
            redirect('forms');
        }
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $kategori = $this->model_kategori_produk->getDatakategori_Produk();
        $kategori = $this->model_master_kategori_produk->getDatakategori_Produk();
        $queryAllProduk = $this->model_produk->getDataProduk();
        $DATA['queryAllKategori'] = $kategori;
        $DATA['queryAllMasterKategori'] = $kategori;
        $DATA['queryAllPrdk'] = $queryAllProduk;
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
        $querymasterprodukDetail = $this->model_master_kategori_produk->getDatakategori_Produk($id);
        $querykategoriprodukDetail = $this->model_kategori_produk->getDatakategori_ProdukDetail($id);
        $DATA['querymasterprodukDetail'] = $querymasterprodukDetail;
        $DATA['querykategoriprodukDetail'] = $querykategoriprodukDetail;
        $DATA['queryPrdkDetail'] = $queryProdukDetail;
        $title['title'] = 'Edit Produk - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/produk/edit-produk', $DATA);
        $this->load->view('footer');
    }

    public function detail_produk($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryProdukDetail = $this->model_produk->getDataProdukDetail($id);
        $querymasterprodukDetail = $this->model_master_kategori_produk->getDatakategori_Produk($id);
        $querykategoriprodukDetail = $this->model_kategori_produk->getDatakategori_ProdukDetail($id);
        $DATA['querymasterprodukDetail'] = $querymasterprodukDetail;
        $DATA['querykategoriprodukDetail'] = $querykategoriprodukDetail;
        $DATA['queryPrdkDetail'] = $queryProdukDetail;
        $title['title'] = 'Detail Produk - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/produk/detail-produk', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $nama = $this->input->post('nama');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $url = $this->input->post('url');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/gambar/produk';
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
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'url' => $url,
            'gambar' => $gambar
        );

        $this->model_produk->insertDataProduk($ArrInsert);
        $id_produk = $this->db->insert_id();
        $id_kategori = $this->input->post('id_kategori');
        for ($i = 0; $i < count($id_kategori); $i++) {
            $kategori_id = $id_kategori[$i];
            $ArrInsertKategori = array(
                'id_produk' => $id_produk,
                'id_kategori' => $kategori_id
            );
            $this->model_kategori_produk->insertDatakategori_Produk($ArrInsertKategori);
        }

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fungsi_edit()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $url = $this->input->post('url');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
            $ArrUpdate = array(
                'id' => $id,
                'nama' => $nama,
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'url' => $url
            );
        } else {
            $config['upload_path'] = 'assets/gambar/produk';
            $config['allowed_types'] = 'jpg|png|gif|jpeg|svg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $ArrUpdate = array(
                    'id' => $id,
                    'nama' => $nama,
                    'judul' => $judul,
                    'deskripsi' => $deskripsi,
                    'url' => $url
                );
            } else {
                $gambar = $this->upload->data('file_name');
                $ArrUpdate = array(
                    'id' => $id,
                    'nama' => $nama,
                    'judul' => $judul,
                    'deskripsi' => $deskripsi,
                    'url' => $url,
                    'gambar' => $gambar
                );
            }
        }

        $this->model_produk->updateDataProduk($id, $ArrUpdate);
        $hapus_kategori = $this->model_kategori_produk->hapusDatakategori_Produk($id);
        $id_kategori = $this->input->post('id_kategori');
        if ($hapus_kategori) {
            for ($i = 0; $i < count($id_kategori); $i++) {
                $kategori_id = $id_kategori[$i];
                $ArrUpdateKategori = array(
                    'id_produk' => $id,
                    'id_kategori' => $kategori_id
                );
                $this->model_kategori_produk->insertDatakategori_Produk($ArrUpdateKategori);
            }
        } else {
            echo "Gagal Hapus";
        }

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('produk'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_produk->hapusDataProduk($id);
        $this->model_kategori_produk->hapusDatakategori_Produk($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    /*
    Produk_Fitur Section
    */

    public function fitur($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryProdukDetail = $this->model_produk->getDataProdukDetail($id);
        $queryAllFitur = $this->model_produkfitur->getDataFitur($id);
        $DATA['id_produk'] = $id;
        $DATA['queryPrdkDetail'] = $queryProdukDetail;
        $DATA['queryAllFitur'] = $queryAllFitur;
        $title['title'] = 'Fitur Produk - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/produk/fitur/fitur', $DATA);
        $this->load->view('footer');
    }

    public function edit_fitur($id, $id_produk)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryFiturDetail = $this->model_produkfitur->getDataFiturDetail($id);
        $DATA['queryFiturDetail'] = $queryFiturDetail;
        $DATA['id_produk'] = $id_produk;
        $title['title'] = 'Edit Fitur Produk - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/produk/fitur/edit-fitur', $DATA);
        $this->load->view('footer');
    }

    public function detail_fitur($id, $id_produk)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryFiturDetail = $this->model_produkfitur->getDataFiturDetail($id);
        $DATA = array('queryFiturDetail' => $queryFiturDetail);
        $DATA['id_produk'] = $id_produk;
        $title['title'] = 'Detail Fitur Produk - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/produk/fitur/detail-fitur', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambahfitur()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
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
        $ArrInsert = array(
            'id_produk' => $id_produk,
            'nama_fitur' => $nama_fitur,
            'deskripsi_fitur' => $deskripsi_fitur,
            'gambar_fitur' => $gambar_fitur
        );

        $this->model_produkfitur->insertDataFitur($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect($_SERVER['HTTP_REFERER']);
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
            $ArrUpdate = array(
                'id' => $id,
                'id_produk' => $id_produk,
                'nama_fitur' => $nama_fitur,
                'deskripsi_fitur' => $deskripsi_fitur
            );
        } else {
            $config['upload_path'] = 'assets/gambar/produk/fitur';
            $config['allowed_types'] = 'jpg|png|gif|jpeg|svg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $ArrUpdate = array(
                    'id' => $id,
                    'id_produk' => $id_produk,
                    'nama_fitur' => $nama_fitur,
                    'deskripsi_fitur' => $deskripsi_fitur
                );
            } else {
                $gambar_fitur = $this->upload->data('file_name');
                $ArrUpdate = array(
                    'id' => $id,
                    'id_produk' => $id_produk,
                    'nama_fitur' => $nama_fitur,
                    'deskripsi_fitur' => $deskripsi_fitur,
                    'gambar_fitur' => $gambar_fitur
                );
            }
        }

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
        redirect($_SERVER['HTTP_REFERER']);
    }

    /*
    Produk_SubFitur Section
    */

    public function subfitur($id, $id_produk)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryFiturDetail = $this->model_produkfitur->getDataFiturDetail($id);
        $queryAllSubFitur = $this->model_produksubfitur->getDataSubFitur($id);
        $DATA['id_produk'] = $id_produk;
        $DATA['id_fitur'] = $id;
        $DATA['queryFiturDetail'] = $queryFiturDetail;
        $DATA['queryAllSubFitur'] = $queryAllSubFitur;
        $title['title'] = 'SubFitur Produk - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/produk/fitur/subfitur/subfitur', $DATA);
        $this->load->view('footer');
    }

    public function edit_subfitur($id, $id_produk, $id_fitur)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $querySubFiturDetail = $this->model_produksubfitur->getDataSubFiturDetail($id);
        $DATA['querySubFiturDetail'] = $querySubFiturDetail;
        $DATA['id_produk'] = $id_produk;
        $DATA['id_fitur'] = $id_fitur;
        $title['title'] = 'Edit SubFitur Produk - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/produk/fitur/subfitur/edit-subfitur', $DATA);
        $this->load->view('footer');
    }

    public function detail_subfitur($id, $id_produk)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $querySubFiturDetail = $this->model_produksubfitur->getDataSubFiturDetail($id);
        $DATA = array('querySubFiturDetail' => $querySubFiturDetail);
        $DATA['id_produk'] = $id_produk;
        $DATA['id_fitur'] = $id_produk;
        $title['title'] = 'Detail SubFitur Produk - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/produk/fitur/subfitur/detail-subfitur', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambahsubfitur()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id_fitur = $this->input->post('id_fitur');
        $nama_subfitur = $this->input->post('nama_subfitur');

        $ArrInsert = array(
            'id_fitur' => $id_fitur,
            'nama_subfitur' => $nama_subfitur
        );

        $this->model_produksubfitur->insertDataSubFitur($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fungsi_editsubfitur($id_produk)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $id_fitur = $this->input->post('id_fitur');
        $nama_subfitur = $this->input->post('nama_subfitur');

        $ArrUpdate = array(
            'id' => $id,
            'id_fitur' => $id_fitur,
            'nama_subfitur' => $nama_subfitur
        );

        $this->model_produksubfitur->updateDataSubFitur($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('produk/subfitur/' . $id_fitur . '/' . $id_produk));
    }

    public function fungsi_hapussubfitur($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_produksubfitur->hapusDataSubFitur($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
