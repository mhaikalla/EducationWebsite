<?php

class Tarian_Model extends CI_Model
{
    public function getTarian($pulau = '')
    {
        $this->db->query("SET sql_mode = '' ");
        if ($pulau == '') {
            return $this->db->get("Provinsi")->result_array();
        } else {
            return $this->db->query("SELECT * FROM provinsi WHERE Pulau LIKE '%$pulau%'")->result_array();
        }
    }
    public function SearchTarian()
    {
        $this->db->query("SET sql_mode = '' ");
        $cari = $this->input->GET('keyword', TRUE);
        return $this->db->query("SELECT * FROM provinsi 
                                WHERE Nama LIKE '%$cari%' 
                                OR Tarian LIKE '%$cari%'
                                OR Ibukota LIKE '%$cari%'")->result_array();
    }
    public function showDetail($nama)
    {
        $this->db->query("SET sql_mode = '' ");
        return $this->db->query("SELECT provinsi.ID_Provinsi,
                                        provinsi.nama,
                                        provinsi.Ibukota, 
                                        provinsi.Tarian,
                                        provinsi.Foto_Tarian, 
                                        tarian.Deskripsi,
                                        tarian.gerakan,
                                        tarian.Penjelasan_Detail, 
                                        tarian.Link_Video 
                                FROM tarian, provinsi 
                                WHERE provinsi.ID_Provinsi=tarian.ID_Provinsi 
                                AND provinsi.ID_Provinsi = '$nama'")->row_array();
    }
}
