<?php class Logout extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }
    function index()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
