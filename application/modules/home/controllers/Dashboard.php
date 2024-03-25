<?php class Dashboard extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('home/v_main', $data);
    }
}
