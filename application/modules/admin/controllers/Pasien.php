<?php class Pasien extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }
    function index()
    {
        if ($this->session->userdata('username')) {
            $data['allPasien'] = $this->Main_model->getAllPasien();
            $data['allDokter'] = $this->Main_model->getAllDokter();
            $data['title'] = 'Pasien - Panel Admin Klinik Baloi';
            $this->load->view('v_pasien', $data);
        } else {
            redirect('admin/login');
        }
    }
    function konfirm_pemeriksaan($no_antrian)
    {
        $this->db->where('antrian', $no_antrian);
        $query = $this->db->get('daftar_pemeriksaan');

        $no_rekammedis = bin2hex(random_bytes('4'));
        $dokter_pemeriksa = $this->input->post('dokter_pemeriksa');
        $catatan = $this->input->post('catatan_pemeriksaan');

        if ($query->num_rows() > 0) {
            $this->Main_model->addRekamMedis($no_rekammedis, $no_antrian, $dokter_pemeriksa, $catatan);
            redirect('admin/pasien');
        } else {
            echo "nomor tidak ada";
        }
    }
}
