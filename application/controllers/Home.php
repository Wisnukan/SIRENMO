<?php

class Home extends CI_Controller
{
    public function index($nama = 'Mahesa')
    {
        $this->load->view('home/index');
    }

    public function login($nama = 'Mahesa')
    {
        $data['judul'] = 'Login Page';
        $this->load->view('auth/login');
    }

    public function logout($nama = 'Mahesa')
    {
        $this->load->view('home/index');
    }

    public function daftar($nama = 'Mahesa')
    {
        $data['judul'] = 'Login Page';
        $this->load->view('auth/daftar');
    }

    public function masuk($nama = 'Mahesa')
    {
        $data['user'] = $this->input->post('username');
        $data['pass'] = $this->input->post('password');
        $data['judulHalaman'] = $data['user'];
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('dashboard/index');
        $this->load->view('templates/footer');
    }
}
