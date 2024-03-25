<?php class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function checkLogin($no_hp, $password)
    {
        $this->db->where('no_hp', $no_hp);
        $this->db->where('password', $password);
        $query = $this->db->get('pendaftar');
        return $query;
    }
    function requestPemeriksaan($nama, $no_ktp, $jenis_kelamin, $tanggal_kontrol, $layanan)
    {
        $data = array(
            'pasien' => $no_ktp,
            'jenis_kelamin' => $jenis_kelamin,
            'tgl_kontrol' => $tanggal_kontrol,
            'layanan' => $layanan
        );
        if ($data) {
            $this->db->insert('daftar_pemeriksaan', $data);
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
