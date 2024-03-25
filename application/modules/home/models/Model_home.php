<?php class Model_home extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function registrasi($id_shadow, $nama, $no_ktp, $no_hp, $jenis_kelamin, $alamat, $password)
    {
        $data =  array(

            'id_shadow' => $id_shadow,
            'nama' => $nama,
            'no_ktp' => $no_ktp,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'password' => $password,
            'status' => 'Pending'
        );
        if ($data) {
            $this->db->insert('pendaftar', $data);
            return TRUE;
        } else {
            return FALSE;
        }
    }
    function allLayanan()
    {
        $queryGetAllLayanan = $this->db->get('layanan');
        return $queryGetAllLayanan;
    }
}
