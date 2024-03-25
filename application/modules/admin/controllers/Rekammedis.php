<?php class Rekammedis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }
    function index()
    {
        if ($this->session->userdata('nama')) {
            $data['allDaftarPemeriksaan'] = $this->Main_model->getAllDaftarPemeriksaan();
            $data['allRekamMedis'] = $this->Main_model->getAllRekamMedis();
            $data['title'] = 'Rekam Medis - Panel Admin Klinik Baloi';
            $this->load->view('v_rekammedis', $data);
        } else {
            redirect('admin/login');
        }
    }
    function generate($no_rekammedis)
    {

        $checkDataRekamMedis = $this->Main_model->spesific_rekam_medis($no_rekammedis);

        if ($checkDataRekamMedis) {
            foreach ($checkDataRekamMedis->result_array() as $row) {

                $this->load->library('pdfgenerator');
                $data['title'] = "RM" . $row['no_rekammedis'];
                $data['nama_pasien'] = $row['nama_pasien'];
                $data['dokter'] = $row['nama'];
                $data['no_ktp'] = $row['no_ktp'];
                $data['jenis_kelamin'] = $row['jenis_kelamin'];
                $data['tanggal_kontrol'] = $row['tgl_kontrol'];
                $data['catatan'] = $row['catatan'];
                $file_pdf = $data['title'];
                $paper = 'A4';
                $orientation = "landscape";
                $html = $this->load->view('v_test_data', $data, true);
                // $this->dompdf->render();
                $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
            }
        }
    }
}
