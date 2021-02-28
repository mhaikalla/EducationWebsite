<?php

class Rumah_Model extends CI_Model
{
    public function InputData()
    {
        $data = [

            "ID_Provinsi" => $this->input->post('id_provinsi', true),
            "Nama" => $this->input->post('nama', true),
            "Deskripsi" => $this->input->post('Deskripsi', true),
            "Arsitektur" => $this->input->post('Arsitektur', true),
            "Penjelasan_Detail" => $this->input->post('PenjelasanDetail', true)
        ];
        $this->db->insert("rumah", $data);
    }
    public function updateData($id)
    {
        $data = [
            "ID_Provinsi" => $this->input->post('id_provinsi', true),
            "Nama" => $this->input->post('nama', true),
            "Deskripsi" => $this->input->post('Deskripsi', true),
            "Arsitektur" => $this->input->post('Arsitektur', true),
            "Penjelasan_Detail" => $this->input->post('PenjelasanDetail', true)
        ];
        $this->db->update('Rumah', $data, array('ID_Provinsi' => $id));
    }
    public function deleteData($id)
    {
        $this->db->delete('rumah', array('ID_Provinsi' => $id));
    }
    public function showList()
    {
        return $this->db->query("Select * from Rumah")->result_array();
    }
    public function showData($id)
    {
        return $this->db->query("SELECT * FROM Rumah WHERE ID_provinsi='$id'")->row_array();
    }
}
