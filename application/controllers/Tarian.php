<?php

class Tarian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tarian_Model');
    }
    public function index()
    {
        $data['Judul'] = 'Tari Adat';
        $data['Tarian_Sumatera'] = $this->Tarian_Model->getTarian('Sumatera');
        $data['Tarian_Kalimantan'] = $this->Tarian_Model->getTarian('Kalimantan');
        $data['Tarian_Jawa'] = $this->Tarian_Model->getTarian('Jawa');
        $data['Tarian_Sulawesi'] = $this->Tarian_Model->getTarian('Sulawesi');
        $data['Tarian_KepNusa'] = $this->Tarian_Model->getTarian('Kepulauan Nusa Tenggara');
        $data['Tarian_KepMaluku'] = $this->Tarian_Model->getTarian('Kepulauan Maluku');
        $data['Tarian_Papua'] = $this->Tarian_Model->getTarian('Papua');

        $this->load->view('Templates/Header', $data);
        $this->load->view('Tarian/index', $data);
        $this->load->view('Templates/Footer');
    }

    public function cariTarian()
    {
        $data['Judul'] = 'Search Tari Adat - "' . $this->input->GET('keyword', TRUE) . '"';

        if ($this->input->GET('keyword', TRUE) != null) :
            $data['Pencarian'] = $this->Tarian_Model->SearchTarian();
            $this->load->view('Templates/Header', $data);
            $this->load->view('Tarian/Search', $data);
            $this->load->view('Templates/Footer');
        else :
            $this->index();
        endif;
    }
    public function Detail($id)
    {
        $data['Judul'] = "Detail Tarian";
        $data['Details'] = $this->Tarian_Model->showDetail($id);

        $this->load->view('Templates/header', $data);
        $this->load->view('Tarian/Details', $data);
        $this->load->view('Templates/Footer');
    }

    public function refresh()
    {
        $this->index();
    }
}
