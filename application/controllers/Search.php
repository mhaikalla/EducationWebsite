<?php

class Search extends CI_Controller
{
    public function searchData()
    {
        $data['Judul'] = 'Pencarian Data';
        $this->load->view('Search', $data);
    }
}
