<?php

class Rumah_Model extends CI_Model
{

    public function getRumah($pulau = '')
    {
        $this->db->query("SET sql_mode = '' ");
        if ($pulau == '') {
            return $this->db->get("provinsi")->result_array();
        } else {
            return $this->db->query("SELECT * FROM provinsi WHERE Pulau LIKE '%$pulau%'")->result_array();
        }
    }
    public function SearchRumah()
    {
        $this->db->query("SET sql_mode = '' ");
        $cari = $this->input->GET('keyword', TRUE);
        return $this->db->query("SELECT * FROM provinsi 
                                WHERE Nama LIKE '%$cari%' 
                                OR Rumah_Adat LIKE '%$cari%'
                                OR Ibukota LIKE '%$cari%'")->result_array();
    }
    public function showDetail($kode)
    {
        $this->db->query("SET sql_mode = '' ");
        return $this->db->query("SELECT provinsi.ID_Provinsi,
                                        provinsi.nama,
                                        provinsi.Ibukota, 
                                        provinsi.Rumah_Adat,
                                        provinsi.Foto_Rumah_Adat, 
                                        rumah.Deskripsi,
                                        rumah.Arsitektur,
                                        rumah.Penjelasan_Detail 
                                FROM rumah, provinsi 
                                WHERE provinsi.ID_Provinsi=rumah.ID_Provinsi 
                                AND provinsi.ID_Provinsi = '$kode'")->row_array();
    }
}
