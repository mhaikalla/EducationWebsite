<?php

class Rumah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Backend/Rumah_Model');
    }
    public function inputData()
    {
        $this->Rumah_Model->InputData();
        redirect('Backend/Rumah');
    }
    public function deleteData($id)
    {
        $this->Rumah_Model->deleteData($id);
        redirect('Backend/Rumah');
    }
    public function updateData($id)
    {
        $this->Rumah_Model->updateData($id);
        redirect('Backend/Rumah');
    }
    public function index()
    {
        $data['judul'] = "Rumah Adat";
        $data['listRumah'] = $this->Rumah_Model->showList();
        $this->load->view('Backend/Header', $data);
        $this->load->view('Backend/Rumah/index', $data);
        $this->load->view('Backend/Footer', $data);
    }
    public function showForm($kode = "")
    {
        $data['Judul'] = "Detail Data";
        if ($kode != "") {
            $data['Rumah'] = $this->Rumah_Model->showData($kode);
            $this->load->view('Backend/Header', $data);
            $this->load->view('Backend/Rumah/Update', $data);
            $this->load->view('Backend/Footer');
        } elseif ($kode == "") {
            $this->load->view('Backend/Header', $data);
            $this->load->view('Backend/Rumah/Insert', $data);
            $this->load->view('Backend/Footer');
        }
    }
}
