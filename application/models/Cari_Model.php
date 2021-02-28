<?php

class Cari_Model extends CI_Model
{
    public function cariData($index)
    { 
        $cari = $this->input->GET('keyword', TRUE);
        return $this->db->query("SELECT * FROM provinsi 
                                WHERE Nama LIKE '%$cari%' 
                                OR Makanan LIKE '%$cari%'
                                OR Ibukota LIKE '%$cari%'")->result_array();
    }
}
