<?php

class Makanan_Model extends CI_Model
{
    public function getMakanan($pulau = '')
    {
        $this->db->query("SET sql_mode = '' ");
        if ($pulau == '') {
            $this->db->get("provinsi")->result_array();
        } else {
            //return $this->db->query("SELECT * FROM provinsi WHERE Pulau LIKE '%$pulau%';")->result_array();

            $this->db->like("Pulau", $pulau);
            return $this->db->get("provinsi")->result_array();
        }
    }
    public function SearchMakanan()
    {
        $this->db->query("SET sql_mode = '' ");
        $cari = $this->input->GET('keyword', TRUE);
        return $this->db->query("SELECT * FROM provinsi 
                                WHERE Nama LIKE '%$cari%' 
                                OR Makanan LIKE '%$cari%'
                                OR Ibukota LIKE '%$cari%'")->result_array();
    }

    public function showDetail($id)
    {
        $this->db->query("SET sql_mode = '' ");
        return $this->db->query("SELECT provinsi.ID_Provinsi,
                                        provinsi.Nama,
                                        provinsi.Ibukota,
                                        provinsi.Logo, 
                                        provinsi.Makanan,
                                        provinsi.Foto_Makanan, 
                                        makanan.Deskripsi,
                                        makanan.Pembuatan,
                                        makanan.Penjelasan_Detail, 
                                        makanan.Link_Video 
                                FROM makanan, provinsi 
                                WHERE provinsi.ID_Provinsi=makanan.ID_Provinsi 
                                AND provinsi.ID_provinsi = '$id'")->row_array();
    }
}
