<?php class Dashboard extends CI_Controller
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
            $data['title'] = 'Dashboard - Klinik Baloi';
            $this->load->view('v_dashboard', $data);
        } else {
            redirect('admin/login');
        }
    }
}
