<?php

class Admin extends CI_Controller
{
    private $user = 'admin';
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kendaraan_model');
    }

    public function index()
    {
        $data['user'] = $this->user;
        $data['judulHalaman'] = 'Dashboard';
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('dashboard/index');
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $data['user'] = $this->user;
        $data['judulHalaman'] = 'Profile';
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/profile');
        $this->load->view('templates/footer');
    }

    public function dataPelanggan()
    {
        $data['user'] = $this->user;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar');
        $this->load->view('admin/Data_Pelanggan');
        $this->load->view('templates/footer');
    }
}
