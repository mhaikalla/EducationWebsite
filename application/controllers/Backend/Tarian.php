<?php

class Tarian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Backend/Tarian_Model');
    }
    public function inputData()
    {
        $this->Tarian_Model->InputData();
        redirect('Backend/Tarian');
    }
    public function deleteData($id)
    {
        $this->Tarian_Model->deleteData($id);
        redirect('Backend/Tarian');
    }
    public function updateData($id)
    {
        $this->Tarian_Model->updateData($id);
        redirect('Backend/Tarian');
    }
    public function index()
    {
        $data['judul'] = "Tarian";
        $data['listTarian'] = $this->Tarian_Model->showList();
        $this->load->view('Backend/Header', $data);
        $this->load->view('Backend/Tarian/index', $data);
        $this->load->view('Backend/Footer');
    }
    public function showForm($kode = "")
    {
        $data['Judul'] = "Detail Data";
        if ($kode != "") {
            $data['Tarian'] = $this->Tarian_Model->showData($kode);
            $this->load->view('Backend/Header', $data);
            $this->load->view('Backend/Tarian/Update', $data);
            $this->load->view('Backend/Footer');
        } elseif ($kode == "") {
            $this->load->view('Backend/Header', $data);
            $this->load->view('Backend/Tarian/Insert', $data);
            $this->load->view('Backend/Footer');
        }
    }
}
