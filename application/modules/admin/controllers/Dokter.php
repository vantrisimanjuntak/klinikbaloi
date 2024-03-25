<?php class Dokter extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }
    function index()
    {
        $data['title'] = 'Dokter - Panel Admin Klinik Baloi';
        $data['allDokter'] = $this->Main_model->getAllDokter();
        $this->load->view('v_dokter', $data);
    }
    function addDokter()
    {
        $nama = $this->input->post('nama');
        $hari_pelayanan = $this->input->post('tanggal_pelayanan');
        $jam_pelayanan = $this->input->post('jam_pelayanan');
        $jabatan = $this->input->post('jabatan');

        $queryaddDokter = $this->Main_model->addDokter($nama, $hari_pelayanan, $jam_pelayanan, $jabatan);
        if ($queryaddDokter) {
            redirect('admin/dokter');
        } else {
            echo "Ada yang error";
        }
    }
    function getAllDokter()
    {
    }
}
