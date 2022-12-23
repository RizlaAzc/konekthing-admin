<?php

class portofolio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_portofolio');
        $this->load->model('model_kategori_portofolio');
        $this->load->model('model_master_kategori_portofolio');

        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">please login!</div>');
            redirect('forms');
        }
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $kategori = $this->model_kategori_portofolio->getDatakategori_portofolio();
        $kategori = $this->model_master_kategori_portofolio->getDatakategori_portofolio();
        $p = $this->model_portofolio->getDataportofolio();
        $DATA['queryAllPrdk'] = $p;
        $DATA['queryAllKategori'] = $kategori;
        $DATA['queryAllMasterKategori'] = $kategori;
        $title['title'] = 'Portofolio - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/portofolio/portofolio', $DATA);
        $this->load->view('footer');
    }

    public function tambah_portofolio()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $title['title'] = 'Tambah Portofolio - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/portofolio/tambah_portofolio');
        $this->load->view('footer');
    }

    public function edit_portofolio($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryportofolioDetail = $this->model_portofolio->getDataPortofolioDetail($id);
        $querymasterportofolioDetail = $this->model_master_kategori_portofolio->getDatakategori_Portofolio($id);
        $querykategoriportofolioDetail = $this->model_kategori_portofolio->getDatakategori_PortofolioDetail($id);
        $DATA['queryPrdkDetail'] = $queryportofolioDetail;
        $DATA['querymasterportofolioDetail'] = $querymasterportofolioDetail;
        $DATA['querykategoriportofolioDetail'] = $querykategoriportofolioDetail;
        $title['title'] = 'Edit Portofolio - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/portofolio/edit_portofolio', $DATA);
        $this->load->view('footer');
    }

    public function detail_portofolio($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryportofolioDetail = $this->model_portofolio->getDataPortofolioDetail($id);
        $querymasterportofolioDetail = $this->model_master_kategori_portofolio->getDatakategori_Portofolio($id);
        $querykategoriportofolioDetail = $this->model_kategori_portofolio->getDatakategori_PortofolioDetail($id);
        $DATA['queryPrdkDetail'] = $queryportofolioDetail;
        $DATA['querymasterportofolioDetail'] = $querymasterportofolioDetail;
        $DATA['querykategoriportofolioDetail'] = $querykategoriportofolioDetail;
        $title['title'] = 'Detail Portofolio - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/portofolio/detail_portofolio', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/gambar/portofolio';
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
            'gambar' => $gambar
        );

        $this->model_portofolio->insertDataportofolio($ArrInsert);
        $id_portofolio = $this->db->insert_id();
        $id_kategori = $this->input->post('id_kategori');
        for ($i = 0; $i < count($id_kategori); $i++) {
            $kategori_id = $id_kategori[$i];
            $ArrInsertKategori = array(
                'id_portofolio' => $id_portofolio,
                'id_kategori' => $kategori_id
            );
            $this->model_kategori_portofolio->insertDatakategori_portofolio($ArrInsertKategori);
        }

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fungsi_edit()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
            $ArrUpdate = array(
                'id' => $id,
                'judul' => $judul,
                'deskripsi' => $deskripsi
            );
        } else {
            $config['upload_path'] = 'assets/gambar/portofolio';
            $config['allowed_types'] = 'jpg|png|gif|jpeg|svg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $ArrUpdate = array(
                    'id' => $id,
                    'judul' => $judul,
                    'deskripsi' => $deskripsi
                );
            } else {
                $gambar = $this->upload->data('file_name');
                $ArrUpdate = array(
                    'id' => $id,
                    'judul' => $judul,
                    'deskripsi' => $deskripsi,
                    'gambar' => $gambar
                );
            }
        }

        $this->model_portofolio->updateDataPortofolio($id, $ArrUpdate);
        $hapus_kategori = $this->model_kategori_portofolio->hapusDatakategori_Portofolio($id);
        $id_kategori = $this->input->post('id_kategori');
        if ($hapus_kategori) {
            for ($i = 0; $i < count($id_kategori); $i++) {
                $kategori_id = $id_kategori[$i];
                $ArrUpdateKategori = array(
                    'id_portofolio' => $id,
                    'id_kategori' => $kategori_id
                );
                $this->model_kategori_portofolio->insertDatakategori_portofolio($ArrUpdateKategori);
            }
        } else {
            echo "Gagal Hapus";
        }

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('portofolio'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_portofolio->hapusDataPortofolio($id);
        $this->model_kategori_portofolio->hapusDatakategori_Portofolio($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function excel()
    {
        $baris = 2;
        $no = 1;
        $filename = "Data Portofolio" . '.xlsx';
        $queryAllPortofolio = $this->model_portofolio->getDataportofolio();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("PT Konekthing");
        $object->getProperties()->setLastModifiedBy("PT Konekthing");
        $object->getProperties()->setTitle("Data Portofolio");
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Judul');
        $object->getActiveSheet()->setCellValue('C1', 'Deskripsi');
        $object->getActiveSheet()->setTitle("Data Portofolio");

        foreach ($queryAllPortofolio as $dataportofolio) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $dataportofolio->judul);
            $object->getActiveSheet()->setCellValue('C' . $baris, $dataportofolio->deskripsi);

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
        $queryAllPortofolio = $this->model_portofolio->getDataPortofolio();
        $DATA['queryAllPrdk'] = $queryAllPortofolio;
        $this->load->library('dompdf_gen');
        $this->load->view('admin/user/portofolio/pdf', $DATA);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Data Portofolio.pdf', array('Attachment' => 0));
    }
}
