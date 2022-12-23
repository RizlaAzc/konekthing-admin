<?php

class kategori_portofolio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_master_kategori_portofolio');

        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">please login!</div>');
            redirect('forms');
        }
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $p = $this->model_master_kategori_portofolio->getDatakategori_portofolio();
        $DATA = array('queryAllPrdk' => $p);
        $title['title'] = 'Kategori Portofolio - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/master/kategori_portofolio/portofolio', $DATA);
        $this->load->view('footer');
    }

    public function edit_portofolio($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $portofolioDetail = $this->model_master_kategori_portofolio->getDatakategori_PortofolioDetail($id);
        $DATA = array('queryPrdkDetail' => $portofolioDetail);
        $title['title'] = 'Edit Kategori Portofolio - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/master/kategori_portofolio/edit_portofolio', $DATA);
        $this->load->view('footer');
    }

    public function detail_portofolio($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $portofolioDetail = $this->model_master_kategori_portofolio->getDatakategori_PortofolioDetail($id);
        $DATA = array('queryPrdkDetail' => $portofolioDetail);
        $title['title'] = 'Detail Kategori Portofolio - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/master/kategori_portofolio/detail_portofolio', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $kategori_portofolio = $this->input->post('kategori_portofolio');
        $deskripsi = $this->input->post('deskripsi');

        $ArrInsert = array(
            'kategori_portofolio' => $kategori_portofolio,
            'deskripsi' => $deskripsi
        );

        $this->model_master_kategori_portofolio->insertDatakategori_portofolio($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fungsi_edit()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $kategori_portofolio = $this->input->post('kategori_portofolio');
        $deskripsi = $this->input->post('deskripsi');

        $ArrUpdate = array(
            'kategori_portofolio' => $kategori_portofolio,
            'deskripsi' => $deskripsi,
        );

        $this->model_master_kategori_portofolio->updateDatakategori_Portofolio($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('kategori_portofolio'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_master_kategori_portofolio->hapusDatakategori_Portofolio($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function excel()
    {
        $baris = 2;
        $no = 1;
        $filename = "Data Kategori Portofolio" . '.xlsx';
        $queryAllKategori = $this->model_master_kategori_portofolio->getDatakategori_portofolio();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("PT Konekthing");
        $object->getProperties()->setLastModifiedBy("PT Konekthing");
        $object->getProperties()->setTitle("Data Kategori Portofolio");
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Kategori');
        $object->getActiveSheet()->setCellValue('C1', 'Deskripsi Kategori');
        $object->getActiveSheet()->setTitle("Data Kategori Portofolio");

        foreach ($queryAllKategori as $datakategori) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $datakategori->kategori_portofolio);
            $object->getActiveSheet()->setCellValue('C' . $baris, $datakategori->deskripsi);

            $baris++;
        }

        for ($col = 'A'; $col !== 'C'; $col++) {
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
        $queryAllKategori = $this->model_master_kategori_portofolio->getDatakategori_portofolio();
        $DATA['queryAllPrdk'] = $queryAllKategori;
        $this->load->library('dompdf_gen');
        $this->load->view('admin/master/kategori_portofolio/pdf', $DATA);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Data Kategori Portofolio.pdf', array('Attachment' => 0));
    }
}
