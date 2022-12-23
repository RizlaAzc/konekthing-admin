<?php

class beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_beranda');

        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">please login!</div>');
            redirect('forms');
        }
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryAllBeranda = $this->model_beranda->getDataBeranda();
        $DATA = array('queryAllBrnd' => $queryAllBeranda);
        $title['title'] = 'Beranda - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/beranda/beranda', $DATA);
        $this->load->view('footer');
    }

    public function tambah_beranda()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $title['title'] = 'Tambah Beranda - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/beranda/tambah-beranda');
        $this->load->view('footer');
    }

    public function edit_beranda($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryBerandaDetail = $this->model_beranda->getDataBerandaDetail($id);
        $DATA = array('queryBrndDetail' => $queryBerandaDetail);
        $title['title'] = 'Edit Beranda - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/beranda/edit-beranda', $DATA);
        $this->load->view('footer');
    }

    public function detail_beranda($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryBerandaDetail = $this->model_beranda->getDataBerandaDetail($id);
        $DATA = array('queryBrndDetail' => $queryBerandaDetail);
        $title['title'] = 'Detail Beranda - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/beranda/detail-beranda', $DATA);
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
        $button = $this->input->post('button');

        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/gambar/beranda';
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
            'gambar' => $gambar,
            'button' => $button
        );

        $this->model_beranda->insertDataBeranda($ArrInsert);
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
        $button = $this->input->post('button');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
            $ArrUpdate = array(
                'id' => $id,
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'url' => $url,
                'button' => $button,
            );
        } else {
            $config['upload_path'] = 'assets/gambar/beranda';
            $config['allowed_types'] = 'jpg|png|gif|jpeg|svg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $ArrUpdate = array(
                    'id' => $id,
                    'judul' => $judul,
                    'deskripsi' => $deskripsi,
                    'url' => $url,
                    'button' => $button,
                );
            } else {
                $gambar = $this->upload->data('file_name');
                $ArrUpdate = array(
                    'id' => $id,
                    'judul' => $judul,
                    'deskripsi' => $deskripsi,
                    'url' => $url,
                    'button' => $button,
                    'gambar' => $gambar
                );
            }
        }

        $this->model_beranda->updateDataBeranda($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('beranda'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_beranda->hapusDataBeranda($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function excel()
    {
        $baris = 2;
        $no = 1;
        $filename = "Data Beranda" . '.xlsx';
        $queryAllBeranda = $this->model_beranda->getDataBeranda();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("PT Konekthing");
        $object->getProperties()->setLastModifiedBy("PT Konekthing");
        $object->getProperties()->setTitle("Data Beranda");
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Judul');
        $object->getActiveSheet()->setCellValue('C1', 'Deskripsi');
        $object->getActiveSheet()->setTitle("Data Beranda");

        foreach ($queryAllBeranda as $databeranda) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $databeranda->judul);
            $object->getActiveSheet()->setCellValue('C' . $baris, $databeranda->deskripsi);

            $baris++;
        }

        for ($col = 'A'; $col !== 'C'; $col++) {
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
        $queryAllBeranda = $this->model_beranda->getDataBeranda();
        $DATA['queryAllBrnd'] = $queryAllBeranda;
        $this->load->library('dompdf_gen');
        $this->load->view('admin/user/beranda/pdf', $DATA);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Data Beranda.pdf', array('Attachment' => 0));
    }
}
