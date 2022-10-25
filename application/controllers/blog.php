<?php

class blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_blog');
    }

    public function index()
    {
        $queryAllBlog = $this->model_blog->getDataBlog();
        $DATA = array('queryAllBlg' => $queryAllBlog);
        $title['title'] = 'Blog - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/blog/blog', $DATA);
        $this->load->view('footer');
    }

    public function tambah_blog()
    {
        $title['title'] = 'Tambah Blog - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/blog/tambah-blog');
        $this->load->view('footer');
    }

    public function edit_blog($id)
    {
        $queryBlogDetail = $this->model_blog->getDataBlogDetail($id);
        $DATA = array('queryBlgDetail' => $queryBlogDetail);
        $title['title'] = 'Edit Blog - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/blog/edit-blog', $DATA);
        $this->load->view('footer');
    }

    public function detail_blog($id)
    {
        $queryBlogDetail = $this->model_blog->getDataBlogDetail($id);
        $DATA = array('queryBlgDetail' => $queryBlogDetail);
        $title['title'] = 'Detail Blog - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/blog/detail-blog', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $url = $this->input->post('url');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/gambar/blog';
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

        $this->model_blog->insertDataBlog($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect(base_url('blog'));
    }

    public function fungsi_edit()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $url = $this->input->post('url');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/gambar/blog';
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

        $this->model_blog->updateDataBlog($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('blog'));
    }

    public function fungsi_hapus($id)
    {
        $this->model_blog->hapusDataBlog($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect(base_url('blog'));
    }
}
