<?php

class Kategori extends CI_Controller
{

    private $user = 'admin';
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model', 'kategori');
    }

    public function index()
    {
        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/ci3app-latihan/kategori/index/';

        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
            $config['total_rows'] = $this->kategori->countPencarian($data['keyword']);
        } else {
            if (empty($this->session->userdata('keyword'))) {
                $data['keyword'] = $this->session->userdata('keyword');
                $config['total_rows'] = $this->kategori->countKategori();
            } else {
                $data['keyword'] = $this->session->userdata('keyword');
                $config['total_rows'] = $this->kategori->countPencarian($this->session->userdata('keyword'));
            }
        }

        $config['per_page'] = 8;
        $data['start'] = $this->uri->segment(3);

        // Inisialisasi pagination
        $this->pagination->initialize($config);
        $data['user'] = $this->user;

        $data['total_data'] = $config['total_rows'];
        $data['judulHalaman'] = 'Data kategori';
        $data['kategori'] = $this->kategori->cariData($config['per_page'], $data['start'], $data['keyword']);

        $data['judulHalaman'] = 'Data Kategori';
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/Data_Kategori', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data['judulHalaman'] = 'Data Kategori';
            $this->kategori->tambahDataKategori($_POST);
            $this->session->set_flashdata('flashData', 'Ditambahkan');
            redirect('kategori');
        }
    }

    public function getData()
    {
        echo json_encode($this->kategori->getData($_POST['id']));
    }

    public function ubahData($id)
    {
        $this->kategori->ubahData($id);
        $this->session->set_flashdata('flashData', 'Diubah');
        redirect('kategori');
    }

    public function hapus($id)
    {
        $this->kategori->hapusDataKategori($id);
        $this->session->set_flashdata('flashData', 'Dihapus');
        redirect('kategori');
    }
}
