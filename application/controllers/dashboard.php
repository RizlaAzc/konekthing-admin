<?php

class dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_dashboard');
        date_default_timezone_set('Asia/Jakarta');

        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">masuk elit, login sulit</div>');
            redirect('forms');
        }
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $title['title'] = 'Dashboard - Konekthing Admin';

        // Visitor Chart Section
        $date_start = $this->input->get('dateStart');
        $date_end = $this->input->get('dateEnd');

        if ($date_start) {
            $chart = $this->model_dashboard->getChartPengunjungfiltered($date_start, $date_end);
        } else {
            $chart = $this->model_dashboard->getChartPengunjung();
        }

        $data['chart_value'] = json_encode($chart['data_values']);
        $data['chart_date'] = json_encode($chart['date_visitor']);

        // Visitor Statistic Section
        $date_today = date('Y-m-d');
        $date_yesterday = date('Y-m-d', strtotime('-1 day', strtotime($date_today)));
        $current_month = date('m');
        $current_year = date('Y');
        $bataswaktu = date('s', strtotime('-300 second'));
        // var_dump($bataswaktu);
        // die;

        $pengunjunghariini = $this->db->query("SELECT * FROM visitor WHERE date='$date_today'")->num_rows();
        $pengunjungkemarin = $this->db->query("SELECT * FROM visitor WHERE date='$date_yesterday'")->num_rows();
        $pengunjungbulanini = $this->db->query("SELECT * FROM visitor WHERE Year(date) = '$current_year' AND MONTH(date) = '$current_month'")->num_rows();
        $pengunjungtahunini = $this->db->query("SELECT * FROM visitor WHERE Year(date) = '$current_year'")->num_rows();
        $pengunjungonline = $this->db->query("SELECT * FROM visitor WHERE date_created > '$bataswaktu'")->num_rows();
        $pengunjung = $this->db->query("SELECT COUNT(id) as id FROM visitor")->row();
        $totalpengunjung = isset($pengunjung->id) ? ($pengunjung->id) : 0;

        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['pengunjungkemarin'] = $pengunjungkemarin;
        $data['pengunjungbulanini'] = $pengunjungbulanini;
        $data['pengunjungtahunini'] = $pengunjungtahunini;
        $data['pengunjungonline'] = $pengunjungonline;
        $data['totalpengunjung'] = $totalpengunjung;

        $this->load->view('header', $title);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('footer');
    }
}
