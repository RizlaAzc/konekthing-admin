<?php

class kategori_produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_master_kategori_produk');

        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">please login!</div>');
            redirect('forms');
        }
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $p = $this->model_master_kategori_produk->getDatakategori_Produk();
        $DATA = array('queryAllPrdk' => $p);
        $title['title'] = 'Kategori Produk - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/master/kategori_produk/produk', $DATA);
        $this->load->view('footer');
    }

    public function edit_produk($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $produkDetail = $this->model_master_kategori_produk->getDatakategori_ProdukDetail($id);
        $DATA = array('queryPrdkDetail' => $produkDetail);
        $title['title'] = 'Edit Kategori Produk - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/master/kategori_produk/edit_produk', $DATA);
        $this->load->view('footer');
    }

    public function detail_produk($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $produkDetail = $this->model_master_kategori_produk->getDatakategori_ProdukDetail($id);
        $DATA = array('queryPrdkDetail' => $produkDetail);
        $title['title'] = 'Detail Kategori Produk - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/master/kategori_produk/detail_produk', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $kategori_produk = $this->input->post('kategori_produk');

        $ArrInsert = array(
            'kategori_produk' => $kategori_produk,
        );

        $this->model_master_kategori_produk->insertDatakategori_Produk($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fungsi_edit()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $kategori_produk = $this->input->post('kategori_produk');

        $ArrUpdate = array(
            'kategori_produk' => $kategori_produk,
        );

        $this->model_master_kategori_produk->updateDatakategori_Produk($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('kategori_produk'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_master_kategori_produk->hapusDatakategori_Produk($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function excel()
    {
        $baris = 2;
        $no = 1;
        $filename = "Data Kategori Produk" . '.xlsx';
        $queryAllKategori = $this->model_master_kategori_produk->getDatakategori_produk();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("PT Konekthing");
        $object->getProperties()->setLastModifiedBy("PT Konekthing");
        $object->getProperties()->setTitle("Data Kategori Produk");
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Kategori');
        $object->getActiveSheet()->setTitle("Data Kategori Produk");

        foreach ($queryAllKategori as $datakategori) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $datakategori->kategori_produk);

            $baris++;
        }

        for ($col = 'A'; $col !== 'B'; $col++) {
            $object->getActiveSheet()
                ->getColumnDimension($col)
                ->setAutoSize(true);
        }

        $styleArrayFirstRow = [
            'font' => [
                'bold' => true,
            ]
        ];

        $highestColumn = $object->getActiveSheet()->getHighestColumn();
        $object->getActiveSheet()->getStyle('A1:' . $highestColumn . '1')->applyFromArray($styleArrayFirstRow);

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }

    public function pdf()
    {
        $queryAllKategori = $this->model_master_kategori_produk->getDatakategori_produk();
        $DATA['queryAllPrdk'] = $queryAllKategori;
        $this->load->library('dompdf_gen');
        $this->load->view('admin/master/kategori_produk/pdf', $DATA);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Data Kategori Produk.pdf', array('Attachment' => 0));
    }
}
