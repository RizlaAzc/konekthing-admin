<?php

class our_partners extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_our_partners');

        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">please login!</div>');
            redirect('forms');
        }
    }

    public function index()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryAllPartners = $this->model_our_partners->getDataPartners();
        $DATA['queryAllPartners'] = $queryAllPartners;
        $title['title'] = 'Our Partners - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_partners/our_partners', $DATA);
        $this->load->view('footer');
    }

    public function edit_our_partners($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryAllPartnersDetail = $this->model_our_partners->getDataPartnersDetail($id);
        $DATA['queryPartnersDetail'] = $queryAllPartnersDetail;
        $title['title'] = 'Edit Our Partners - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_partners/edit_our_partners', $DATA);
        $this->load->view('footer');
    }

    public function detail_our_partners($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $queryAllPartnersDetail = $this->model_our_partners->getDataPartnersDetail($id);
        $DATA['queryPartnersDetail'] = $queryAllPartnersDetail;
        $title['title'] = 'Detail Our Partners - Konekthing Admin';
        $this->load->view('header', $title);
        $this->load->view('admin/user/our_partners/detail_our_partners', $DATA);
        $this->load->view('footer');
    }

    public function fungsi_tambah()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $nama = $this->input->post('nama');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = 'assets/gambar/our_partners';
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
            'nama' => $nama,
            'gambar' => $gambar
        );

        $this->model_our_partners->insertDataPartners($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fungsi_edit()
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
            $ArrUpdate = array(
                'id' => $id,
                'nama' => $nama
            );
        } else {
            $config['upload_path'] = 'assets/gambar/our_partners';
            $config['allowed_types'] = 'jpg|png|gif|jpeg|svg';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $ArrUpdate = array(
                    'id' => $id,
                    'nama' => $nama
                );
            } else {
                $gambar = $this->upload->data('file_name');
                $ArrUpdate = array(
                    'id' => $id,
                    'nama' => $nama,
                    'gambar' => $gambar
                );
            }
        }

        $this->model_our_partners->updateDataPartners($id, $ArrUpdate);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect(base_url('our_partners'));
    }

    public function fungsi_hapus($id)
    {
        $title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->model_our_partners->hapusDataPartners($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function excel()
    {
        $baris = 2;
        $no = 1;
        $filename = "Data Our Partners" . '.xlsx';
        $queryAllour_partner = $this->model_our_partners->getDataPartners();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("PT Konekthing");
        $object->getProperties()->setLastModifiedBy("PT Konekthing");
        $object->getProperties()->setTitle("Data Our Partners");
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Partners');
        $object->getActiveSheet()->setTitle("Data Our Partners");

        foreach ($queryAllour_partner as $dataourpartner) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $dataourpartner->nama);

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
        $queryAllour_partner = $this->model_our_partners->getDataPartners();
        $DATA['queryAllPrdk'] = $queryAllour_partner;
        $this->load->library('dompdf_gen');
        $this->load->view('admin/user/our_partners/pdf', $DATA);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Data Our Partners.pdf', array('Attachment' => 0));
    }
}
