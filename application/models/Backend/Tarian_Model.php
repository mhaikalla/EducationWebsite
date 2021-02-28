<?php

class Tarian_Model extends CI_Model
{
    public function InputData()
    {
        $link_video = $this->input->post('Link_Video', true);
        if ($link_video != "") :
            $link_video = str_replace("watch?v=", "embed/", $link_video);
        endif;
        $data = [
            "ID_Provinsi" => $this->input->post('id_provinsi', true),
            "Nama" => $this->input->post('nama', true),
            "Deskripsi" => $this->input->post('Deskripsi', true),
            "Gerakan" => $this->input->post('Gerakan', true),
            "Penjelasan_Detail" => $this->input->post('PenjelasanDetail', true),
            "Link_Video" => $link_video

        ];
        $this->db->insert("tarian", $data);
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
            "Gerakan" => $this->input->post('Gerakan', true),
            "Penjelasan_Detail" => $this->input->post('PenjelasanDetail', true),
            "Link_Video" => $link_video
        ];
        $this->db->update('Tarian', $data, array('ID_Provinsi' => $id));
    }
    public function deleteData($id)
    {
        $this->db->delete('tarian', array('ID_Provinsi' => $id));
    }
    public function showData($id)
    {
        return $this->db->query("SELECT * FROM Tarian WHERE ID_provinsi='$id'")->row_array();
    }
    public function showList()
    {
        return $this->db->query("select * from Tarian")->result_array();
    }
}
