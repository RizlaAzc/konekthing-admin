<?php

class kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_kontak');

        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">please login!</div>');
            redirect('forms');
        }
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $c = $this->model_kontak->getDatakontak();
        $DATA = array('queryAllPrdk' => $c);
        $title['title'] = 'Kontak - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/kontak/kontak', $DATA);
        $this->load->view('footer');
    }

    public function tambah_kontak()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $title['title'] = 'Tambah Kontak - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/kontak/tambah_kontak');
        $this->load->view('footer');
    }

    public function edit_kontak($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $querykontakDetail = $this->model_kontak->getDatakontakDetail($id);
        $DATA = array('queryPrdkDetail' => $querykontakDetail);
        $title['title'] = 'Edit Kontak - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/kontak/edit_kontak', $DATA);
        $this->load->view('footer');
    }

    public function detail_kontak($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $querykontakDetail = $this->model_kontak->getDatakontakDetail($id);
        $DATA = array('queryPrdkDetail' => $querykontakDetail);
        $title['title'] = 'Detail Kontak - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/kontak/detail_kontak', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $telepon = $this->input->post('telepon');
        $email = $this->input->post('email');
        $lokasi = $this->input->post('lokasi');
        $deskripsi = $this->input->post('deskripsi');
        $ArrInsert = array(
            'id' => $id,
            'telepon' => $telepon,
            'email' => $email,
            'lokasi' => $lokasi,
            'deskripsi' => $deskripsi
        );

        $this->model_kontak->insertDatakontak($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect(base_url('kontak'));
    }

    public function fungsi_edit()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $telepon = $this->input->post('telepon');
        $email = $this->input->post('email');
        $lokasi = $this->input->post('lokasi');
        $deskripsi = $this->input->post('deskripsi');
        $ArrUpdate = array(
            'id' => $id,
            'telepon' => $telepon,
            'email' => $email,
            'lokasi' => $lokasi,
            'deskripsi' => $deskripsi
        );

        $this->model_kontak->updateDatakontak($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('kontak'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_kontak->hapusDatakontak($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect(base_url('kontak'));
    }

    public function excel()
    {
        $baris = 2;
        $no = 1;
        $filename = "Data Kontak" . '.xlsx';
        $queryAllKontak = $this->model_kontak->getDataKontak();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("PT Konekthing");
        $object->getProperties()->setLastModifiedBy("PT Konekthing");
        $object->getProperties()->setTitle("Data Kontak");
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nomor Telepon');
        $object->getActiveSheet()->setCellValue('C1', 'Email');
        $object->getActiveSheet()->setCellValue('D1', 'Lokasi');
        $object->getActiveSheet()->setCellValue('E1', 'Deskripsi');
        $object->getActiveSheet()->setTitle("Data Kontak");

        foreach ($queryAllKontak as $datakontak) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $datakontak->telepon);
            $object->getActiveSheet()->setCellValue('C' . $baris, $datakontak->email);
            $object->getActiveSheet()->setCellValue('D' . $baris, $datakontak->lokasi);
            $object->getActiveSheet()->setCellValue('E' . $baris, $datakontak->deskripsi);

            $baris++;
        }

        for ($col = 'A'; $col !== 'E'; $col++) {
            $object->getActiveSheet()
                ->getColumnDimension($col)
                ->setAutoSize(true);
        }

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }

    public function pdf()
    {
        $queryAllKontak = $this->model_kontak->getDataKontak();
        $DATA['queryAllPrdk'] = $queryAllKontak;
        $this->load->library('dompdf_gen');
        $this->load->view('admin/user/kontak/pdf', $DATA);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Data Kontak.pdf', array('Attachment' => 0));
    }
}
