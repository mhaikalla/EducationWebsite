<?php

class Makanan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Makanan_Model');
    
    }
    public function index()
    {
        $data['Judul'] = 'Makanan Khas';
        $data['Makanan_Sumatera'] = $this->Makanan_Model->getMakanan('Sumatera');
        $data['Makanan_Kalimantan'] = $this->Makanan_Model->getMakanan('Kalimantan');
        $data['Makanan_Jawa'] = $this->Makanan_Model->getMakanan('Jawa');
        $data['Makanan_Sulawesi'] = $this->Makanan_Model->getMakanan('Sulawesi');
        $data['Makanan_KepNusa'] = $this->Makanan_Model->getMakanan('Kepulauan Nusa Tenggara');
        $data['Makanan_KepMaluku'] = $this->Makanan_Model->getMakanan('Kepulauan Maluku');
        $data['Makanan_Papua'] = $this->Makanan_Model->getMakanan('Papua');

        $this->load->view('Templates/Header', $data);
        $this->load->view('Makanan/index', $data);
        $this->load->view('Templates/Footer');
    }

    public function cariMakanan()
    {
        $data['Judul'] = 'Search Makanan Khas - "' . $this->input->GET('keyword', TRUE) . '"';

        if ($this->input->GET('keyword', TRUE) != null) :
            $data['Pencarian'] = $this->Makanan_Model->SearchMakanan();
            $this->load->view('Templates/Header', $data);
            $this->load->view('Makanan/Search', $data);
            $this->load->view('Templates/Footer');
        else :
            $this->index();
        endif;
    }
    public function Detail($id)
    {
        $data['Judul'] = "Detail Makanan";
        $data['Details'] = $this->Makanan_Model->showDetail($id);

        $this->load->view('Templates/header', $data);
        $this->load->view('Makanan/Details', $data);
        $this->load->view('Templates/Footer');
    }

    public function refresh()
    {
        $this->index();
    }
}
