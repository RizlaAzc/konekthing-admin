<?php

class blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_blog');
        $this->load->model('model_blogfitur');

        if(!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">please login!</div>');
            redirect('forms');
                   
            }

    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryAllBlog = $this->model_blog->getDataBlog();
        $DATA = array('queryAllBlg' => $queryAllBlog);
        $title['title'] = 'Blog - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/blog/blog', $DATA);
        $this->load->view('footer');
    }

    public function tambah_blog()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $title['title'] = 'Tambah Blog - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/blog/tambah-blog');
        $this->load->view('footer');
    }

    public function edit_blog($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryBlogDetail = $this->model_blog->getDataBlogDetail($id);
        $DATA = array('queryBlgDetail' => $queryBlogDetail);
        $title['title'] = 'Edit Blog - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/blog/edit-blog', $DATA);
        $this->load->view('footer');
    }

    public function detail_blog($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryBlogDetail = $this->model_blog->getDataBlogDetail($id);
        $DATA = array('queryBlgDetail' => $queryBlogDetail);
        $title['title'] = 'Detail Blog - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/blog/detail-blog', $DATA);
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
        redirect($_SERVER['HTTP_REFERER']);
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
            $ArrUpdate = array(
                'id' => $id,
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'url' => $url
            );
        } else {
            $config['upload_path'] = 'assets/gambar/blog';
            $config['allowed_types'] = 'jpg|png|gif|jpeg|svg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $ArrUpdate = array(
                    'id' => $id,
                    'judul' => $judul,
                    'deskripsi' => $deskripsi,
                    'url' => $url
                );
            } else {
                $gambar = $this->upload->data('file_name');
                $ArrUpdate = array(
                    'id' => $id,
                    'judul' => $judul,
                    'deskripsi' => $deskripsi,
                    'url' => $url,
                    'gambar' => $gambar
                );
            }
        }

        $this->model_blog->updateDataBlog($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('blog'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_blog->hapusDataBlog($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    /*
    Produk_Fitur Section
    */

    public function fitur($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryBlogDetail = $this->model_blog->getDataBlogDetail($id);
        $queryAllFitur = $this->model_blogfitur->getDataFitur($id);
        $DATA['id_blog'] = $id;
        $DATA['queryBlogDetail'] = $queryBlogDetail;
        $DATA['queryAllFitur'] = $queryAllFitur;
        $title['title'] = 'Fitur Blog - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/blog/fitur/fitur', $DATA);
        $this->load->view('footer');
    }

    public function edit_fitur($id, $id_blog)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryFiturDetail = $this->model_blogfitur->getDataFiturDetail($id);
        $DATA['id_blog'] = $id_blog;
        $DATA['queryFiturDetail'] = $queryFiturDetail;
        $title['title'] = 'Edit Fitur - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/blog/fitur/edit-fitur', $DATA);
        $this->load->view('footer');
    }

    public function detail_fitur($id, $id_blog)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryFiturDetail = $this->model_blogfitur->getDataFiturDetail($id);
        $DATA['id_blog'] = $id_blog;
        $DATA['queryFiturDetail'] = $queryFiturDetail;
        $title['title'] = 'Detail Fitur - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/blog/fitur/detail-fitur', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambahfitur()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id_blog = $this->input->post('id_blog');
        $nama_fitur = $this->input->post('nama_fitur');
        $deskripsi_fitur = $this->input->post('deskripsi_fitur');
        $gambar_fitur = $_FILES['gambar_fitur'];

        if ($gambar_fitur = '') {
        } else {
            $config['upload_path'] = 'assets/gambar/blog/fitur';
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
            'id_blog' => $id_blog,
            'nama_fitur' => $nama_fitur,
            'deskripsi_fitur' => $deskripsi_fitur,
            'gambar_fitur' => $gambar_fitur
        );

        $this->model_blogfitur->insertDataFitur($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fungsi_editfitur()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $id_blog = $this->input->post('id_blog');
        $nama_fitur = $this->input->post('nama_fitur');
        $deskripsi_fitur = $this->input->post('deskripsi_fitur');
        $gambar_fitur = $_FILES['gambar_fitur'];

        if ($gambar_fitur = '') {
            $ArrUpdate = array(
                'id' => $id,
                'id_blog' => $id_blog,
                'nama_fitur' => $nama_fitur,
                'deskripsi_fitur' => $deskripsi_fitur,
            );
        } else {
            $config['upload_path'] = 'assets/gambar/blog/fitur';
            $config['allowed_types'] = 'jpg|png|gif|jpeg|svg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $ArrUpdate = array(
                    'id' => $id,
                    'id_blog' => $id_blog,
                    'nama_fitur' => $nama_fitur,
                    'deskripsi_fitur' => $deskripsi_fitur,
                );
            } else {
                $gambar_fitur = $this->upload->data('file_name');
                $ArrUpdate = array(
                    'id' => $id,
                    'id_blog' => $id_blog,
                    'nama_fitur' => $nama_fitur,
                    'deskripsi_fitur' => $deskripsi_fitur,
                    'gambar_fitur' => $gambar_fitur
                );
            }
        }

        $this->model_blogfitur->updateDataFitur($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('blog/fitur/' . $id_blog));
    }

    public function fungsi_hapusfitur($id)
    {
        $id_blog = $this->input->post('id_blog');
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_blogfitur->hapusDataFitur($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
