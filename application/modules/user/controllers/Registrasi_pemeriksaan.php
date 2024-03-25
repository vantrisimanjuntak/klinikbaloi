<?php class Registrasi_pemeriksaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('home/Model_home');
        $this->load->model('Main_model');
    }
    function index()
    {
        if ($this->session->userdata('nama')) {
            $data['allLayanan'] = $this->Model_home->allLayanan();
            $data['title'] = 'Registrasi Pemeriksaan';
            $this->load->view('v_registrasi_pemeriksaan', $data);
        } else {
            redirect('user/login');
        }
    }
    function submit()
    {
        $nama = $this->session->userdata('nama');
        $no_ktp = $this->session->userdata('no_ktp');
        $jenis_kelamin = $this->session->userdata('jenis_kelamin');
        $tanggal_kontrol = $this->input->post('tanggal_kontrol');
        $layanan = $this->input->post('layanan');

        $queryRequestPemeriksaan = $this->Main_model->requestPemeriksaan($nama, $no_ktp, $jenis_kelamin, $tanggal_kontrol, $layanan);
        if ($queryRequestPemeriksaan) {
            $this->session->set_flashdata('flash', 'submit');
            redirect('user/registrasi_pemeriksaan');
        } else {
            echo "Error";
        }
    }
}
