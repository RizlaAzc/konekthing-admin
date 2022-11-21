<?php

class our_team extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_our_team');
        $this->load->model('model_our_team_riwayat_pendidikan');
        $this->load->model('model_our_team_pengalaman_kerja');
        $this->load->model('model_our_team_handle_pekerjaan');

         if(!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">lu belum login oon!</div>');
            redirect('forms');
                   
        }

    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryAllour_team = $this->model_our_team->getData_our_team();
        $DATA = array('queryAllBlg' => $queryAllour_team);
        $title['title'] = 'our team - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/our_team', $DATA);
        $this->load->view('footer');
    }

    public function tambah_our_team()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $title['title'] = 'Tambah our_team - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/tambah-our_team');
        $this->load->view('footer');
    }

    public function edit_our_team($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryour_teamDetail = $this->model_our_team->getData_our_teamDetail($id);
        $DATA = array('queryBlgDetail' => $queryour_teamDetail);
        $title['title'] = 'Edit our_team - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/edit-our_team', $DATA);
        $this->load->view('footer');
    }

    public function detail_our_team($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryour_teamDetail = $this->model_our_team->getData_our_teamDetail($id);
        $DATA = array('queryBlgDetail' => $queryour_teamDetail);
        $title['title'] = 'Detail our_team - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/detail-our_team', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar'];
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tempat_tanggal_lahir = $this->input->post('tempat_tanggal_lahir');
        $kebangsaan = $this->input->post('kebangsaan');
        $status = $this->input->post('status');
        $agama = $this->input->post('agama');
        $alamat = $this->input->post('alamat');
        $telpon = $this->input->post('telpon');
        $email = $this->input->post('email');


        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/gambar/our_team';
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
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar,
            'jenis_kelamin' => $jenis_kelamin,
            'tempat_tanggal_lahir' => $tempat_tanggal_lahir,
            'kebangsaan' => $kebangsaan,
            'status' => $status,
            'agama' => $agama,
            'alamat' => $alamat,
            'telpon' => $telpon,
            'email' => $email

        );

        $this->model_our_team->insertData_our_team($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect(base_url('our_team'));
    }

    public function fungsi_edit()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar'];
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tempat_tanggal_lahir = $this->input->post('tempat_tanggal_lahir');
        $kebangsaan = $this->input->post('kebangsaan');
        $status = $this->input->post('status');
        $agama = $this->input->post('agama');
        $alamat = $this->input->post('alamat');
        $telpon = $this->input->post('telpon');
        $email = $this->input->post('email');

        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/gambar/our_team';
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
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'jenis_kelamin' => $jenis_kelamin,
            'tempat_tanggal_lahir' => $tempat_tanggal_lahir,
            'kebangsaan' => $kebangsaan,
            'status' => $status,
            'agama' => $agama,
            'alamat' => $alamat,
            'telpon' => $telpon,
            'email' => $email

        );

        $this->model_our_team->updateData_our_team($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('our_team'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_our_team->hapusData_our_team($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect(base_url('our_team'));
    }







    /*
    riwayat_pendidikan_ourteam Section
    */



    public function riwayat_pendidikan_ourteam($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        
        $queryAllriwayat_pendidikan_ourteam = $this->model_our_team_riwayat_pendidikan->getDatariwayat_pendidikan_ourteam($id);
        $queryour_teamDetail = $this->model_our_team->getData_our_teamDetail($id);
        $DATA['queryour_teamDetail'] = $queryour_teamDetail;
        $DATA['id_our_team'] = $id;
        
        $DATA['queryAllriwayat_pendidikan_ourteam'] = $queryAllriwayat_pendidikan_ourteam;
        $title['title'] = 'riwayat pendidikan ourteam  - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/riwayat_pendidikan_ourteam/riwayat_pendidikan_ourteam', $DATA);
        $this->load->view('footer');
    }

    public function edit_riwayat_pendidikan_ourteam($id, $id_our_team)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryriwayat_pendidikan_ourteamDetail = $this->model_our_team_riwayat_pendidikan->getDatariwayat_pendidikan_ourteamDetail($id);
        $DATA['queryriwayat_pendidikan_ourteamDetail'] = $queryriwayat_pendidikan_ourteamDetail; 
        $DATA['id_our_team'] = $id_our_team; 
        $title['title'] = 'Edit riwayat pendidikan ourteam - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/riwayat_pendidikan_ourteam/edit-riwayat_pendidikan_ourteam', $DATA);
        $this->load->view('footer');
    }

    public function detail_riwayat_pendidikan_ourteam($id, $id_our_team)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryriwayat_pendidikan_ourteamDetail = $this->model_our_team_riwayat_pendidikan->getDatariwayat_pendidikan_ourteamDetail($id);
        $DATA['queryriwayat_pendidikan_ourteamDetail'] =  $queryriwayat_pendidikan_ourteamDetail;
        $DATA['id_our_team'] = $id_our_team;
        $title['title'] = 'Detail riwayat pendidikan ourteam - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/riwayat_pendidikan_ourteam/detail-riwayat_pendidikan_ourteam', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambahriwayat_pendidikan_ourteam()
    {

        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id_our_team = $this->input->post('id_our_team');
        $nama_sekolah = $this->input->post('nama_sekolah');
        $type_sekolah = $this->input->post('type_sekolah');
        $deskripsi = $this->input->post('deskripsi');
        

        $ArrInsert = array( 
            'id_our_team' => $id_our_team,
            'nama_sekolah' => $nama_sekolah,
            'type_sekolah' => $type_sekolah,
            'deskripsi' => $deskripsi
            

    );


        $this->model_our_team_riwayat_pendidikan->insertData_riwayat_pendidikan_ourteam($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }


    public function fungsi_editriwayat_pendidikan_ourteam()
    {
   
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $id_our_team = $this->input->post('id_our_team');
        $nama_sekolah = $this->input->post('nama_sekolah');
        $type_sekolah = $this->input->post('type_sekolah');
        $deskripsi = $this->input->post('deskripsi');
        


        $ArrUpdate = array(
            'id' => $id,
            'id_our_team' => $id_our_team,
            'nama_sekolah' => $nama_sekolah,
            'type_sekolah' => $type_sekolah,
            'deskripsi' => $deskripsi
            
        );


        $this->model_our_team_riwayat_pendidikan->updateDatariwayat_pendidikan_ourteam($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('our_team/riwayat_pendidikan_ourteam/' . $id_our_team));
    }


    public function fungsi_hapusriwayat_pendidikan_ourteam($id)
    {
        $id_our_team = $this->input->post('id_our_team');
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_our_team_riwayat_pendidikan->hapusDataour_teamriwayat_pendidikan($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
         redirect($_SERVER['HTTP_REFERER']);
    }









      /*
    our_team_pengalaman_kerja Section
    */



    public function pengalaman_kerja_ourteam($id)
    {
         $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $queryAllpengalaman_kerja_ourteam = $this->model_our_team_pengalaman_kerja->getDatapengalaman_kerja_ourteam($id);
         $queryour_teamDetail = $this->model_our_team->getData_our_teamDetail($id);
        $DATA['queryour_teamDetail'] = $queryour_teamDetail;
        $DATA['id_our_team'] = $id;
        $DATA['queryAllpengalaman_kerja_ourteam'] = $queryAllpengalaman_kerja_ourteam;
        $title['title'] = 'pengalaman kerja ourteam - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/pengalaman_kerja_ourteam/pengalaman_kerja_ourteam', $DATA);
        $this->load->view('footer');
    }

    public function edit_pengalaman_kerja_ourteam($id, $id_our_team)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $querypengalaman_kerja_ourteamDetail = $this->model_our_team_pengalaman_kerja->getDatapengalaman_kerja_ourteamDetail($id);
        $DATA['querypengalaman_kerja_ourteamDetail'] = $querypengalaman_kerja_ourteamDetail;
        $DATA['id_our_team'] = $id_our_team;
        $DATA['id'] = $id;
        $title['title'] = 'Edit pengalaman kerja ourteam - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/pengalaman_kerja_ourteam/edit-pengalaman_kerja_ourteam', $DATA);
        $this->load->view('footer');
    }

    public function detail_pengalaman_kerja_ourteam($id, $id_our_team)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $querypengalaman_kerja_ourteamDetail = $this->model_our_team_pengalaman_kerja->getDatapengalaman_kerja_ourteamDetail($id);
        $DATA = array('querypengalaman_kerja_ourteamDetail' => $querypengalaman_kerja_ourteamDetail);
        $DATA['id_our_team'] = $id_our_team;
        $DATA['id'] = $id_our_team;
        $title['title'] = 'Detail pengalaman kerja ourteam - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/pengalaman_kerja_ourteam/detail-pengalaman_kerja_ourteam', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah_pengalaman_kerja_ourteam()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id_our_team = $this->input->post('id_our_team');
        $nama_pengalaman = $this->input->post('nama_pengalaman');
        $tahun_dari = $this->input->post('tahun_dari');
        $tahun_sampai = $this->input->post('tahun_sampai');
        $peskripsi = $this->input->post('peskripsi');

        
        $ArrInsert = array(
            'id_our_team' => $id_our_team,
            'nama_pengalaman' => $nama_pengalaman,
            'tahun_dari' => $tahun_dari,
            'tahun_sampai' => $tahun_sampai,
            'peskripsi' => $peskripsi
            
        );

        $this->model_our_team_pengalaman_kerja->insertDatapengalaman_kerja_ourteam($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fungsi_edit_pengalaman_kerja_ourteam()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $id_our_team = $this->input->post('id_our_team');
        $nama_pengalaman = $this->input->post('nama_pengalaman');
        $tahun_dari = $this->input->post('tahun_dari');
        $tahun_sampai = $this->input->post('tahun_sampai');
        $peskripsi = $this->input->post('peskripsi');


        $ArrUpdate = array(
            'id' => $id,
            'id_our_team' => $id_our_team,
            'nama_pengalaman' => $nama_pengalaman,
            'tahun_dari' => $tahun_dari,
            'tahun_sampai' => $tahun_sampai,
            'peskripsi' => $peskripsi

    );

        $this->model_our_team_pengalaman_kerja->updateDatapengalaman_kerja_ourteam($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('our_team/pengalaman_kerja_ourteam/' . $id_our_team));
    }

    public function fungsi_hapuspengalaman_kerja_ourteam($id)
    {
        $id_our_team = $this->input->post('id_our_team');
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_our_team_pengalaman_kerja->hapusDatapengalaman_kerja_ourteam($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
       redirect($_SERVER['HTTP_REFERER']);
    }










   /*
    our_team_handle_pekerjaan_ourteam Section
    */




        public function handle_pekerjaan_ourteam($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
      
        $queryAllhandle_pekerjaan_ourteam = $this->model_our_team_handle_pekerjaan->getData_handle_pekerjaan($id);
        $queryour_teamDetail = $this->model_our_team->getData_our_teamDetail($id);
        $DATA['queryour_teamDetail'] = $queryour_teamDetail;
        $DATA['id_our_team'] = $id;
        $DATA['queryAllhandle_pekerjaan_ourteam'] = $queryAllhandle_pekerjaan_ourteam;
        $title['title'] = 'handle pekerjaan ourteam - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/handle_pekerjaan_ourteam/handle_pekerjaan_ourteam', $DATA);
        $this->load->view('footer');
    }

    public function edit_handle_pekerjaan_ourteam($id, $id_our_team)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $queryhandle_pekerjaan_ourteamDetail = $this->model_our_team_handle_pekerjaan->getData_handle_pekerjaanDetail($id);
        $DATA['queryhandle_pekerjaan_ourteamDetail'] = $queryhandle_pekerjaan_ourteamDetail;
        $DATA['id_our_team'] = $id_our_team;
        $DATA['id'] = $id;
        $title['title'] = 'Edit handle pekerjaan ourteam - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/handle_pekerjaan_ourteam/edit-handle_pekerjaan_ourteam', $DATA);
        $this->load->view('footer');
    }

    public function detail_handle_pekerjaan_ourteam($id, $id_our_team)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $queryhandle_pekerjaan_ourteamDetail = $this->model_our_team_handle_pekerjaan->getData_handle_pekerjaanDetail($id);
        $DATA = array('queryhandle_pekerjaan_ourteamDetail' => $queryhandle_pekerjaan_ourteamDetail);
        $DATA['id_our_team'] = $id_our_team;
        $DATA['id'] = $id_our_team;
        $title['title'] = 'Detail handle pekerjaan ourteam - Konekthing Admin';
        $this->load->view('header', $title);

            $this->load->view('admin/user/our_team/handle_pekerjaan_ourteam/detail-handle_pekerjaan_ourteam', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah_handle_pekerjaan_ourteam()
    {
         $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $id_our_team = $this->input->post('id_our_team');
        $nama_project = $this->input->post('nama_project');
        $tahun_dari = $this->input->post('tahun_dari');
        $tahun_sampai = $this->input->post('tahun_sampai');
        $deskripsi = $this->input->post('deskripsi');
        

        $ArrInsert = array(
            'id_our_team' => $id_our_team,
            'nama_project' => $nama_project,
            'tahun_dari' => $tahun_dari,
            'tahun_sampai' => $tahun_sampai,
            'deskripsi' => $deskripsi
            
        );

        $this->model_our_team_handle_pekerjaan->insertData_handle_pekerjaan($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
      
    public function fungsi_edit_handle_pekerjaan_ourteam()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $id = $this->input->post('id');
        $id_our_team = $this->input->post('id_our_team');
        $nama_project = $this->input->post('nama_project');
        $tahun_dari = $this->input->post('tahun_dari');
        $tahun_sampai = $this->input->post('tahun_sampai');
        $deskripsi = $this->input->post('deskripsi');

        $ArrUpdate = array(
            'id' => $id,
            'id_our_team' => $id_our_team,
            'nama_project' => $nama_project,
            'tahun_dari' => $tahun_dari,
            'tahun_sampai' => $tahun_sampai,
            'deskripsi' => $deskripsi
        );

        $this->model_our_team_handle_pekerjaan->updateData_handle_pekerjaan($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('our_team/handle_pekerjaan_ourteam/' . $id_our_team));
    }

    public function fungsi_hapus_handle_pekerjaan_ourteam($id)
    {
        $id_our_team = $this->input->post('id_our_team');
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $this->model_our_team_handle_pekerjaan->hapusData_handle_pekerjaan($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
       redirect($_SERVER['HTTP_REFERER']);
    }
}
