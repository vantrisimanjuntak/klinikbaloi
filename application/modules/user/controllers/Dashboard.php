<?php class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        if ($this->session->userdata('nama')) {
            # code...
            $data['title'] = 'Dashboard';
            $this->load->view('v_dashboard', $data);
        } else {
            redirect('user/login');
        }
    }
}
