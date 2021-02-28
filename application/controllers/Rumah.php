<?php

class Rumah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Rumah_Model');
    }
    public function index()
    {
        $data['Judul'] = 'Rumah Adat';
        $data['Rumah_Sumatera'] = $this->Rumah_Model->getRumah('Sumatera');
        $data['Rumah_Kalimantan'] = $this->Rumah_Model->getRumah('Kalimantan');
        $data['Rumah_Jawa'] = $this->Rumah_Model->getRumah('Jawa');
        $data['Rumah_Sulawesi'] = $this->Rumah_Model->getRumah('Sulawesi');
        $data['Rumah_KepNusa'] = $this->Rumah_Model->getRumah('Kepulauan Nusa Tenggara');
        $data['Rumah_KepMaluku'] = $this->Rumah_Model->getRumah('Kepulauan Maluku');
        $data['Rumah_Papua'] = $this->Rumah_Model->getRumah('Papua');

        $this->load->view('Templates/Header', $data);
        $this->load->view('Rumah/index', $data);
        $this->load->view('Templates/Footer');
    }

    public function cariRumah()
    {
        $data['Judul'] = 'Search Rumah Adat - "' . $this->input->GET('keyword', TRUE) . '"';
        if ($this->input->GET('keyword', TRUE) != null) :
            $data['Pencarian'] = $this->Rumah_Model->SearchRumah();
            $this->load->view('Templates/Header', $data);
            $this->load->view('Rumah/Search', $data);
            $this->load->view('Templates/Footer');
        else :
            $this->index();
        endif;
    }
    public function Detail($id)
    {
        $data['Judul'] = "Detail Rumah";
        $data['Details'] = $this->Rumah_Model->showDetail($id);

        $this->load->view('Templates/header', $data);
        $this->load->view('Rumah/Details', $data);
        $this->load->view('Templates/Footer');
    }
    public function refresh()
    {
        $this->index();
    }
}
