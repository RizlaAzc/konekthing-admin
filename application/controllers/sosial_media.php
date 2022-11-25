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

    public function edit_sosial_media($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $querysosial_mediaDetail = $this->model_sosial_media->getDatasosial_mediaDetail($id);
        $DATA['querySosialMediaDetail'] = $querysosial_mediaDetail;
        $title['title'] = 'Edit Sosial Media - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/sosial_media/edit_sosial_media', $DATA);
        $this->load->view('footer');
    }

    public function detail_sosial_media($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $querysosial_mediaDetail = $this->model_sosial_media->getDatasosial_mediaDetail($id);
        $DATA['querySosialMediaDetail'] = $querysosial_mediaDetail;
        $title['title'] = 'Detail Sosial Media - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/sosial_media/detail_sosial_media', $DATA);
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
        $nama = $this->input->post('nama');
        $url = $this->input->post('url');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
            $ArrUpdate = array(
                'id' => $id,
                'nama' => $nama,
                'url' => $url
            );
        } else {
            $config['upload_path'] = 'assets/gambar/sosial_media';
            $config['allowed_types'] = 'jpg|png|gif|jpeg|svg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $ArrUpdate = array(
                    'id' => $id,
                    'nama' => $nama,
                    'url' => $url
                );
            } else {
                $gambar = $this->upload->data('file_name');
                $ArrUpdate = array(
                    'id' => $id,
                    'nama' => $nama,
                    'url' => $url,
                    'gambar' => $gambar
                );
            }
        }

        $this->model_sosial_media->updateDatasosial_media($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('sosial_media'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_sosial_media->hapusDatasosial_media($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
