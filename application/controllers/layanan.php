<?php

class layanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_layanan');
        $this->load->model('model_layananfitur');

        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">please login!</div>');
            redirect('forms');
        }
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryAllLayanan = $this->model_layanan->getDataLayanan();
        $DATA = array('queryAllLayanan' => $queryAllLayanan);
        $title['title'] = 'Layanan - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/layanan/layanan', $DATA);
        $this->load->view('footer');
    }

    public function tambah_layanan()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $title['title'] = 'Tambah Layanan - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/layanan/tambah-layanan');
        $this->load->view('footer');
    }

    public function edit_layanan($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryLayananDetail = $this->model_layanan->getDataLayananDetail($id);
        $DATA = array('queryLynDetail' => $queryLayananDetail);
        $title['title'] = 'Edit Layanan - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/layanan/edit-layanan', $DATA);
        $this->load->view('footer');
    }

    public function detail_layanan($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryLayananDetail = $this->model_layanan->getDataLayananDetail($id);
        $DATA = array('queryLynDetail' => $queryLayananDetail);
        $title['title'] = 'Detail Layanan - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/layanan/detail-layanan', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $nama = $this->input->post('nama');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $sub_deskripsi = $this->input->post('sub_deskripsi');

        $ArrInsert = array(
            'nama' => $nama,
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'sub_deskripsi' => $sub_deskripsi
        );

        $this->model_layanan->insertDataLayanan($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fungsi_edit()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $sub_deskripsi = $this->input->post('sub_deskripsi');

        $ArrUpdate = array(
            'id' => $id,
            'nama' => $nama,
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'sub_deskripsi' => $sub_deskripsi
        );

        $this->model_layanan->updateDataLayanan($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('layanan'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_layanan->hapusDataLayanan($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    /*
    Layanan_Fitur Section
    */

    public function fitur($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryLayananDetail = $this->model_layanan->getDataLayananDetail($id);
        $queryAllFitur = $this->model_layananfitur->getDataFitur($id);
        $DATA['id_layanan'] = $id;
        $DATA['queryLayananDetail'] = $queryLayananDetail;
        $DATA['queryAllFitur'] = $queryAllFitur;
        $title['title'] = 'Fitur Layanan - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/layanan/fitur/fitur', $DATA);
        $this->load->view('footer');
    }

    public function edit_fitur($id, $id_layanan)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryFiturDetail = $this->model_layananfitur->getDataFiturDetail($id);
        $DATA['id_layanan'] = $id_layanan;
        $DATA['queryFiturDetail'] = $queryFiturDetail;
        $title['title'] = 'Edit Fitur Layanan - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/layanan/fitur/edit-fitur', $DATA);
        $this->load->view('footer');
    }

    public function detail_fitur($id, $id_layanan)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryFiturDetail = $this->model_layananfitur->getDataFiturDetail($id);
        $DATA['id_layanan'] = $id_layanan;
        $DATA['queryFiturDetail'] = $queryFiturDetail;
        $title['title'] = 'Detail Fitur Layanan - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/layanan/fitur/detail-fitur', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambahfitur()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id_layanan = $this->input->post('id_layanan');
        $nama_fitur = $this->input->post('nama_fitur');
        $deskripsi_fitur = $this->input->post('deskripsi_fitur');
        $gambar_fitur = $_FILES['gambar_fitur'];

        if ($gambar_fitur = '') {
        } else {
            $config['upload_path'] = 'assets/gambar/layanan/fitur';
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
            'id_layanan' => $id_layanan,
            'nama_fitur' => $nama_fitur,
            'deskripsi_fitur' => $deskripsi_fitur,
            'gambar_fitur' => $gambar_fitur
        );

        $this->model_layananfitur->insertDataFitur($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fungsi_editfitur()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $id_layanan = $this->input->post('id_layanan');
        $nama_fitur = $this->input->post('nama_fitur');
        $deskripsi_fitur = $this->input->post('deskripsi_fitur');
        $gambar_fitur = $_FILES['gambar_fitur'];

        if ($gambar_fitur = '') {
            $ArrUpdate = array(
                'id' => $id,
                'id_layanan' => $id_layanan,
                'nama_fitur' => $nama_fitur,
                'deskripsi_fitur' => $deskripsi_fitur
            );
        } else {
            $config['upload_path'] = 'assets/gambar/layanan/fitur';
            $config['allowed_types'] = 'jpg|png|gif|jpeg|svg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $ArrUpdate = array(
                    'id' => $id,
                    'id_layanan' => $id_layanan,
                    'nama_fitur' => $nama_fitur,
                    'deskripsi_fitur' => $deskripsi_fitur
                );
            } else {
                $gambar_fitur = $this->upload->data('file_name');
                $ArrUpdate = array(
                    'id' => $id,
                    'id_layanan' => $id_layanan,
                    'nama_fitur' => $nama_fitur,
                    'deskripsi_fitur' => $deskripsi_fitur,
                    'gambar_fitur' => $gambar_fitur
                );
            }
        }

        $this->model_layananfitur->updateDataFitur($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('layanan/fitur/' . $id_layanan));
    }

    public function fungsi_hapusfitur($id)
    {
        $id_layanan = $this->input->post('id_layanan');
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_layananfitur->hapusDataFitur($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function excel()
    {
        $baris = 2;
        $no = 1;
        $filename = "Data Layanan" . '.xlsx';
        $queryAllLayanan = $this->model_layanan->getDataLayanan();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("PT Konekthing");
        $object->getProperties()->setLastModifiedBy("PT Konekthing");
        $object->getProperties()->setTitle("Data Layanan");
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama');
        $object->getActiveSheet()->setCellValue('C1', 'Judul');
        $object->getActiveSheet()->setCellValue('D1', 'Deskripsi');
        $object->getActiveSheet()->setCellValue('E1', 'Sub Deskripsi');
        $object->getActiveSheet()->setTitle("Data Layanan");

        foreach ($queryAllLayanan as $datalayanan) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $datalayanan->nama);
            $object->getActiveSheet()->setCellValue('C' . $baris, $datalayanan->judul);
            $object->getActiveSheet()->setCellValue('D' . $baris, $datalayanan->deskripsi);
            $object->getActiveSheet()->setCellValue('E' . $baris, $datalayanan->sub_deskripsi);

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
        $queryAllLayanan = $this->model_layanan->getDataLayanan();
        $DATA['queryAllPrdk'] = $queryAllLayanan;
        $this->load->library('dompdf_gen');
        $this->load->view('admin/user/layanan/pdf', $DATA);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Data Layanan.pdf', array('Attachment' => 0));
    }

    public function excel_fitur($id)
    {
        $baris = 2;
        $no = 1;
        $filename = "Data Fitur Layanan" . '.xlsx';
        $queryAllFiturLayanan = $this->model_layananfitur->getDataFitur($id);

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("PT Konekthing");
        $object->getProperties()->setLastModifiedBy("PT Konekthing");
        $object->getProperties()->setTitle("Data Fitur Layanan");
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Fitur');
        $object->getActiveSheet()->setCellValue('C1', 'Deskripsi Fitur');
        $object->getActiveSheet()->setTitle("Data Fitur Layanan");

        foreach ($queryAllFiturLayanan as $datafitur) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $datafitur->nama_fitur);
            $object->getActiveSheet()->setCellValue('C' . $baris, $datafitur->deskripsi_fitur);

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

    public function pdf_fitur($id)
    {
        $queryAllFiturLayanan = $this->model_layananfitur->getDataFitur($id);
        $DATA['queryAllPrdk'] = $queryAllFiturLayanan;
        $this->load->library('dompdf_gen');
        $this->load->view('admin/user/layanan/fitur/pdf', $DATA);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Data Fitur Layanan.pdf', array('Attachment' => 0));
    }
}
