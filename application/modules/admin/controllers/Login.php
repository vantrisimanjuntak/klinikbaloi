<?php class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }
    function index()
    {
        $data['title'] = 'Login - Klinik Baloi';
        $this->load->view('v_login', $data);
    }
    function checklogin()
    {
        $username = sha1($this->input->post('username'));
        $password = sha1($this->input->post('password'));

        if ($username == "" && $password == "") {
            echo "Username dan password Kosong";
        } else {
            $checkDataLogin = $this->Main_model->login($username, $password); {
                if ($checkDataLogin) {
                    redirect('admin/dashboard');
                } else {
                    echo "Login gagal";
                }
            }
        }
    }
}
