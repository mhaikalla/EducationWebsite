<?php

class Makanan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Backend/Makanan_Model');
    }

    public function inputData()
    {
        $this->Makanan_Model->InputData();
        redirect('Backend/Makanan');
    }
    public function deleteData($id)
    {
        $this->Makanan_Model->deleteData($id);
        redirect('Backend/Makanan');
    }
    public function updateData($id)
    {
        $this->Makanan_Model->updateData($id);
        redirect('Backend/Makanan');
    }
    public function showProvinsi()
    {
        $data['Judul'] = "Detail Data";
        $data['Keyword'] = $this->Makanan_Model->showProvinsi();
        $this->load->view('Backend/Header', $data);
        $this->load->view('Backend/Makanan/Insert', $data);
        $this->load->view('Backend/Footer');
    }
    public function showForm($kode = "")
    {
        $data['Judul'] = "Detail Data";
        if ($kode != "") {
            $data['Makanan'] = $this->Makanan_Model->showData($kode);
            $this->load->view('Backend/Header', $data);
            $this->load->view('Backend/Makanan/Update', $data);
            $this->load->view('Backend/Footer');
        } elseif ($kode == "") {
            $this->load->view('Backend/Header', $data);
            $this->load->view('Backend/Makanan/Insert', $data);
            $this->load->view('Backend/Footer');
        }
    }
    public function index()
    {
        $data['judul'] = "Makanan";
        $data['listMakanan'] = $this->Makanan_Model->showList();
        $this->load->view('Backend/Header', $data);
        $this->load->view('Backend/Makanan/index', $data);
        $this->load->view('Backend/Footer');
    }
}
