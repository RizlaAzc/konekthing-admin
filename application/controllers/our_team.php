<?php

class our_team extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_our_team');
        $this->load->model('model_our_team_fitur');
        $this->load->model('model_ourteam_subfitur');
     
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
            'gambar' => $gambar
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
    our_team_Fitur Section
    */

    public function fitur($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryour_teamDetail = $this->model_our_team->getData_our_teamDetail($id);
        $queryAllFitur = $this->model_our_team_fitur->getDataFitur($id);
        $DATA['id_our_team'] = $id;
        $DATA['queryour_teamDetail'] = $queryour_teamDetail;
        $DATA['queryAllFitur'] = $queryAllFitur;
        $title['title'] = 'Fitur our team - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/fitur/fitur', $DATA);
        $this->load->view('footer');
    }

    public function edit_fitur($id, $id_our_team)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryFiturDetail = $this->model_our_team_fitur->getDataFiturDetail($id);
        $DATA['queryFiturDetail'] = $queryFiturDetail; 
        $DATA['id_our_team'] = $id_our_team; 
        $title['title'] = 'Edit our team Fitur - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/fitur/edit-fitur', $DATA);
        $this->load->view('footer');
    }

    public function detail_fitur($id, $id_our_team)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryFiturDetail = $this->model_our_team_fitur->getDataFiturDetail($id);
        $DATA['queryFiturDetail'] =  $queryFiturDetail;
        $DATA['id_our_team'] = $id_our_team;
        $title['title'] = 'Detail our team Fitur - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/fitur/detail-fitur', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambahfitur()
    {

        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id_our_team = $this->input->post('id_our_team');
        $nama = $this->input->post('nama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tempat_tanggal_lahir = $this->input->post('tempat_tanggal_lahir');
        $kebangsaan = $this->input->post('kebangsaan');
        $status = $this->input->post('status');
        $agama = $this->input->post('agama');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $email = $this->input->post('email');


        $ArrInsert = array( 
            'id_our_team' => $id_our_team,
            'nama' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'tempat_tanggal_lahir' => $tempat_tanggal_lahir,
            'kebangsaan' => $kebangsaan,
            'status' => $status,
            'agama' => $agama,
            'alamat' => $alamat,
            'telepon' => $telepon,
            'email' => $email

        );


        $this->model_our_team_fitur->insertDataFitur($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }



    // public function fungsi_tambahfiturriwayat()
    // {
  
    //     $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
    //     $tk = $this->input->post('tk');
    //     $sd = $this->input->post('sd');
    //     $smp = $this->input->post('smp');
    //     $sma = $this->input->post('sma');
    //     $perguruan_tinggi = $this->input->post('perguruan_tinggi');

      
    //         $ArrInsert = array(
    //         'tk' => $tk,
    //         'sd' => $sd,
    //         'smp' => $smp,
    //         'sma' => $sma,
    //         'perguruan_tinggi' => $perguruan_tinggi

    //     );
    //         $this->model_our_team_fitur->insertDataFitur($ArrInsert);
    //         $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
    //         redirect($_SERVER['HTTP_REFERER']);
    // }


    public function fungsi_editfitur()
    {
   
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $id_our_team = $this->input->post('id_our_team');
        $nama = $this->input->post('nama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tempat_tanggal_lahir = $this->input->post('tempat_tanggal_lahir');
        $kebangsaan = $this->input->post('kebangsaan');
        $status = $this->input->post('status');
        $agama = $this->input->post('agama');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $email = $this->input->post('email');


        $ArrUpdate = array(
            'id' => $id,
            'id_our_team' => $id_our_team,
            'nama' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'tempat_tanggal_lahir' => $tempat_tanggal_lahir,
            'kebangsaan' => $kebangsaan,
            'status' => $status,
            'agama' => $agama,
            'alamat' => $alamat,
            'telepon' => $telepon,
            'email' => $email

        );


        $this->model_our_team_fitur->updateDataFitur($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('our_team/fitur/' . $id_our_team));
    }


    //   public function fungsi_editfiturriwayat()
    // {
        
    //     $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
    //     $id_our_team = $this->input->post('id_our_team');
    //     $tk = $this->input->post('tk');
    //     $sd = $this->input->post('sd');
    //     $smp = $this->input->post('smp');
    //     $sma = $this->input->post('sma');
    //     $perguruan_tinggi = $this->input->post('perguruan_tinggi');


    //     $ArrInsert = array(
    //         'id_our_team' => $id_our_team,
    //         'tk' => $tk,
    //         'sd' => $sd,
    //         'smp' => $smp,
    //         'sma' => $sma,
    //         'perguruan_tinggi' => $perguruan_tinggi
    //     );

    //     $this->model_our_team_fitur->insertDataFitur($ArrInsert);
    //     $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
    //     redirect($_SERVER['HTTP_REFERER']);
    // }


    public function fungsi_hapusfitur($id)
    {
        $id_our_team = $this->input->post('id_our_team');
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_our_team_fitur->hapusDataour_teamFitur($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
         redirect($_SERVER['HTTP_REFERER']);
    }

      /*
    our_team_SubFitur Section
    */

    public function subfitur($id, $id_our_team)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryFiturDetail = $this->model_our_team_fitur->getDataFiturDetail($id);
        $queryAllSubFitur = $this->model_ourteam_subfitur->getDataSubFitur($id);
        $DATA['id_our_team'] = $id_our_team;
        $DATA['id_fitur'] = $id_our_team;
        $DATA['queryFiturDetail'] = $queryFiturDetail;
        $DATA['queryAllSubFitur'] = $queryAllSubFitur;
        $title['title'] = 'SubFitur our team - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/fitur/subfitur/subfitur_ourteam', $DATA);
        $this->load->view('footer');
    }

    public function edit_subfitur($id, $id_our_team, $id_fitur)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $querySubFiturDetail = $this->model_ourteam_subfitur->getDataSubFiturDetail($id);
        $DATA['querySubFiturDetail'] = $querySubFiturDetail;
        $DATA['id_our_team'] = $id_our_team;
        $DATA['id_fitur'] = $id_fitur;
        $title['title'] = 'Edit SubFitur - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/fitur/subfitur/edit-subfitur_ourteam', $DATA);
        $this->load->view('footer');
    }

    public function detail_subfitur($id, $id_our_team)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $querySubFiturDetail = $this->model_ourteam_subfitur->getDataSubFiturDetail($id);
        $DATA = array('querySubFiturDetail' => $querySubFiturDetail);
        $DATA['id_our_team'] = $id_our_team;
        $DATA['id_fitur'] = $id_our_team;
        $title['title'] = 'Detail SubFitur - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_team/fitur/subfitur/detail-subfitur_ourteam', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambahsubfitur()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id_fitur = $this->input->post('id_fitur');
        $tk = $this->input->post('tk');
        $sd = $this->input->post('sd');
        $smp = $this->input->post('smp');
        $sma = $this->input->post('sma');
        $perguruan_tinggi = $this->input->post('perguruan_tinggi');
        $pengalaman = $this->input->post('pengalaman');

        $ArrInsert = array(
            'id_fitur' => $id_fitur,
            'tk' => $tk,
            'sd' => $sd,
            'smp' => $smp,
            'sma' => $sma,
            'perguruan_tinggi' => $perguruan_tinggi,
            'pengalaman' => $pengalaman
        );

        $this->model_ourteam_subfitur->insertDataSubFitur($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fungsi_editsubfitur()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $id_fitur = $this->input->post('id_fitur');
        $tk = $this->input->post('tk');
        $sd = $this->input->post('sd');
        $smp = $this->input->post('smp');
        $sma = $this->input->post('sma');
        $perguruan_tinggi = $this->input->post('perguruan_tinggi');
        $pengalaman = $this->input->post('pengalaman');

        $ArrUpdate = array(
            'id' => $id,
            'id_fitur' => $id_fitur,
            'tk' => $tk,
            'sd' => $sd,
            'smp' => $smp,
            'sma' => $sma,
            'perguruan_tinggi' => $perguruan_tinggi,
            'pengalaman' => $pengalaman
        );

        $this->model_ourteam_subfitur->updateDataSubFitur($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('our_team/subfitur/' . $id_our_team));
    }

    public function fungsi_hapussubfitur($id)
    {
        $id_our_team = $this->input->post('id_our_team');
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_ourteam_subfitur->hapusDataSubFitur($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
       redirect($_SERVER['HTTP_REFERER']);
    }
}
