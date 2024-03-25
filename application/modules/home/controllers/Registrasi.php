<?php class Registrasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Model_home');
    }
    function index()
    {
        $data['title'] = 'Form Pendaftaran - Klinik Baloi';
        $this->load->view('v_pendaftaran', $data);
    }
    function submit()
    {

        $id_shadow = bin2hex(random_bytes('8'));
        $nama = $this->input->post('nama');
        $no_ktp =   $this->input->post('no_ktp');
        $no_hp = $this->input->post('no_hp');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $password = md5($this->input->post('password'));
        // echo $nama, " " . $id_shadow, " " . $no_ktp, " " . $alamat .  " " . $no_hp, " " . $password;
        $queryRegistrasi = $this->Model_home->registrasi($id_shadow, $nama, $no_ktp, $no_hp, $jenis_kelamin,  $alamat, $password);
        if ($queryRegistrasi) {
            $this->session->set_flashdata('flash', 'berhasil');
            redirect('registrasi');
        } else {
            echo "Ada yang error";
        }
    }
}
