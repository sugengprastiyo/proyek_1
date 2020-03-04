<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Sistem Informasi Masjid';
        $this->load->view('template/header_user', $data);
        $this->load->view('home/index');
        $this->load->view('template/footer_user');
    }
}
