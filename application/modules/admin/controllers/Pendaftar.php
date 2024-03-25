<?php class Pendaftar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Main_model');
    }
    function index()
    {
        if ($this->session->userdata('username')) {
            $data['title'] = 'Pendaftar - Panel Admin Klinik Baloi';
            $data['allPendaftar'] = $this->Main_model->getAllPendaftar();
            $this->load->view('v_pendaftar', $data);
        } else {
            redirect('admin/login');
        }
    }
    function deletePendaftar($id_shadow)
    {
        $queryDeletePendaftar = $this->Main_model->deletePendaftar($id_shadow);
        if ($queryDeletePendaftar) {
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin/pendaftar');
        } else {
            redirect('admin/pendaftar');
        }
    }
    function confirmPendaftar($id_shadow)
    {
        $queryConfirmPendaftar = $this->Main_model->confirmPendaftar($id_shadow);
        if ($queryConfirmPendaftar) {
            $this->session->set_flashdata('flash', 'aktif');
            redirect('admin/pendaftar');
        } else {
            redirect('admin/pendaftar');
        }
    }
}
