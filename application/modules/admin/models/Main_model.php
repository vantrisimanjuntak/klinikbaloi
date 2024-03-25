<?php class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $sess = array(
                    'username' => $row['username'],
                    'nama' => $row['nama']
                );
            }
            $this->session->set_userdata($sess);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // Model For Dokter

    // Add Dokter
    function addDokter($nama, $hari_pelayanan, $jam_pelayanan, $jabatan)
    {
        $data = array(
            'nama' => $nama,
            'tgl_pelayanan' => $hari_pelayanan,
            'jam_pelayanan' => $jam_pelayanan,
            'jabatan' => $jabatan
        );
        if ($data) {
            $this->db->insert('dokter', $data);
            return TRUE;
        } else {
            return FALSE;
        }
    }
    // End Add Dokter

    function getAllDokter()
    {
        $queryGetAllDokter = $this->db->get('dokter');
        return $queryGetAllDokter->result_array();
    }

    function getAllPendaftar()
    {
        $queryGetAllPendaftar = $this->db->get('pendaftar');
        return $queryGetAllPendaftar->result_array();
    }
    function deletePendaftar($id_shadow)
    {
        $this->db->where('id_shadow', $id_shadow);
        $queryDeletePendaftar = $this->db->get('pendaftar');
        if ($queryDeletePendaftar->num_rows() > 0) {
            $this->db->where('id_shadow', $id_shadow);
            $this->db->delete('pendaftar');
            return TRUE;
        } else {
            return FALSE;
        }
    }
    function confirmPendaftar($id_shadow)
    {
        $this->db->where('id_shadow', $id_shadow);
        $queryConfirmPendaftar = $this->db->get('pendaftar');
        if ($queryConfirmPendaftar->num_rows() > 0) {

            foreach ($queryConfirmPendaftar->result_array() as $row) {
                $moveData = array(
                    'nama' => $row['nama'],
                    'no_ktp' => $row['no_ktp'],
                    'alamat' => $row['alamat'],
                    'jenis_kelamin' => $row['jenis_kelamin'],
                    'no_hp' => $row['no_hp'],
                    'password' => $row['password'],
                    'status' => 'Aktif'
                );
            }
            $this->db->insert('user', $moveData);

            $this->db->set('status', 'Aktif');
            $this->db->where('id_shadow', $id_shadow);
            $this->db->update('pendaftar');
            return TRUE;
        } else {
            return FALSE;
        }
    }
    function getAllRekamMedis()
    {
        $this->db->select('a.no_rekammedis, n.nama AS nama_pasien, n.no_ktp AS no_ktp, n.no_hp, n.jenis_kelamin, l.title_layanan, b.tgl_kontrol, a.antrian_pemeriksaan, a.no_kwitansi, x.nama, a.catatan');
        $this->db->from('rekam_medis a');
        $this->db->join('daftar_pemeriksaan b', 'a.antrian_pemeriksaan = b.antrian');
        $this->db->join('user n', 'b.pasien = n.no_ktp');
        $this->db->join('layanan l', 'b.layanan = l.id_layanan');
        $this->db->join('dokter x', 'a.dokter_pemeriksa = x.id');
        $query = $this->db->get();
        return $query->result_array();
    }
    function spesific_rekam_medis($no_rekammedis)
    {


        $this->db->where('no_rekammedis', $no_rekammedis);
        $query = $this->db->get('rekam_medis');

        if ($query->num_rows() > 0) {

            $this->db->select('a.no_rekammedis, n.nama AS nama_pasien, n.no_ktp AS no_ktp, n.no_hp, n.jenis_kelamin, l.title_layanan, b.tgl_kontrol, a.antrian_pemeriksaan, a.no_kwitansi, x.nama, a.catatan');
            $this->db->from('rekam_medis a');
            $this->db->join('daftar_pemeriksaan b', 'a.antrian_pemeriksaan = b.antrian');
            $this->db->join('user n', 'b.pasien = n.no_ktp');
            $this->db->join('layanan l', 'b.layanan = l.id_layanan');
            $this->db->join('dokter x', 'a.dokter_pemeriksa = x.id');

            $this->db->where('no_rekammedis', $no_rekammedis);
            return $this->db->get();
        } else {
            echo "Data tidak ada";
        }
    }


    // Model for Pasien

    function getAllPasien()
    {
        $this->db->select('a.antrian, b.nama, a.tgl_kontrol, c.title_layanan');
        $this->db->from('daftar_pemeriksaan a');
        $this->db->join('user b', 'a.pasien = b.no_ktp');
        $this->db->join('layanan c', 'a.layanan = c.id_layanan');
        $query = $this->db->get();
        return $query->result_array();
    }

    function getAllDaftarPemeriksaan()
    {
        $query = $this->db->get('daftar_pemeriksaan');
        return $query->result_array();
    }

    function addRekamMedis($no_rekammedis, $no_antrian, $dokter_pemeriksa, $catatan)
    {
        $data = array(
            'no_rekammedis' => $no_rekammedis,
            'antrian_pemeriksaan' => $no_antrian,
            'dokter_pemeriksa' => $dokter_pemeriksa,
            'catatan' => $catatan
        );
        if ($data) {
            $this->db->insert('rekam_medis', $data);
            return TRUE;
        }
    }
}
