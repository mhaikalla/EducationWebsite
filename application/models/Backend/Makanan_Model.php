<?php

class Makanan_Model extends CI_Model
{

    public function inputData()
    {
        $link_video = str_replace("watch?v=", "embed/", $this->input->post('Link_Video', true));
        $data = [
            "ID_Provinsi" => $this->input->post('id_provinsi', true),
            "Nama" => $this->input->post('nama', true),
            "Deskripsi" => $this->input->post('Deskripsi', true),
            "Pembuatan" => $this->input->post('Pembuatan', true),
            "Penjelasan_Detail" => $this->input->post('PenjelasanDetail', true),
            "Link_Video" => $link_video

        ];
        $this->db->insert("makanan", $data);
    }
    public function updateData($id)
    {
        $link_video = $this->input->post('Link_Video', true);
        if ($link_video != "") :
            $link_video = str_replace("watch?v=", "embed/", $link_video);
        endif;
        $data = [
            "ID_Provinsi" => $this->input->post('id_provinsi', true),
            "Nama" => $this->input->post('nama', true),
            "Deskripsi" => $this->input->post('Deskripsi', true),
            "Pembuatan" => $this->input->post('Pembuatan', true),
            "Penjelasan_Detail" => $this->input->post('PenjelasanDetail', true),
            "Link_Video" => $link_video
        ];
        $this->db->update('makanan', $data, array('ID_Provinsi' => $id));
    }
    public function deleteData($id)
    {
        $this->db->delete('makanan', array('ID_Provinsi' => $id));
    }
    public function showList()
    {
        return $this->db->query("select * from Makanan")->result_array();
    }
    public function showData($id)
    {
        return $this->db->query("SELECT * FROM Makanan WHERE ID_provinsi='$id'")->row_array();
    }
    public function showProvinsi()
    {
        $key = $this->input->post('key', true);
        return $this->db->query("SELECT ID_Provinsi, nama, Makanan FROM Provinsi WHERE nama LIKE '$key%' or Ibukota LIKE '$key%'")->row_array();
    }
}
