<?php

class Pelanggan extends CI_Controller
{

    private $user = 'admin';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pelanggan_model', 'customers');
    }

    public function index()
    {
        $data['user'] = $this->user;
        $data['judulHalaman'] = 'Data Pelanggan';
        $data['pelanggan'] = $this->customers->getAllCustomers();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/Data_Pelanggan');
        $this->load->view('templates/footer');
    }
}
