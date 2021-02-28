<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {
        $data['Judul'] = 'Tentang Web';
        $this->load->view('Templates/Header', $data);
        $this->load->view('About', $data);
        $this->load->view('Templates/Footer');
    }
}
