<?php
class Mobil extends CI_Controller
{
    private $user = 'admin';
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kendaraan_model', 'kendaraan');
    }
    public function index()
    {
        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/ci3app-latihan/mobil/index/';

        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
            $config['total_rows'] = $this->kendaraan->countPencarian($data['keyword']);
        } else {
            if (empty($this->session->userdata('keyword'))) {
                $data['keyword'] = $this->session->userdata('keyword');
                $config['total_rows'] = $this->kendaraan->countKendaraan();
            } else {
                $data['keyword'] = $this->session->userdata('keyword');
                $config['total_rows'] = $this->kendaraan->countPencarian($this->session->userdata('keyword'));
            }
        }

        $config['per_page'] = 8;
        $data['start'] = $this->uri->segment(3);

        // Inisialisasi pagination
        $this->pagination->initialize($config);

        $data['kategori'] = $this->kendaraan->getKategori();
        $data['user'] = $this->user;
        $data['judul'] = 'List of Peoples';
        $data['total_data'] = $config['total_rows'];
        $data['judulHalaman'] = 'Data Kendaraan';
        $data['mobil'] = $this->kendaraan->cariMobil($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/Data_Mobil', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // $config['upload_path']          = FCPATH . '/uploads';
            // $config['allowed_types']        = 'gif|jpg|png';
            // $config['max_size']             = 100;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            // $this->load->library('upload', $config);

            // if (!$this->upload->do_upload('fotoMobil')) {
            //     echo $this->upload->display_errors();
            //     die(var_dump(is_dir($config['upload_path'])));
            // } else {
            $data['judul'] = 'Form Tambah Mobil';
            $data['kategori'] = $this->kendaraan->getKategori();
            $data['judulHalaman'] = 'Data Kendaraan';

            $this->form_validation->set_rules('nomor_plat', 'No. Plat', 'required');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('tahun', 'tahun', 'required|numeric');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header');
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/navbar', $data);
                $this->load->view('admin/Data_Mobil', $data);
                $this->load->view('templates/footer');
            } else {
                $this->kendaraan->tambahDataMobil($_POST);
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('mobil');
            }
        }
    }

    public function hapus($id)
    {
        $this->kendaraan->hapusDataMobil($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mobil');
    }

    public function ubah()
    {
        echo json_encode($this->kendaraan->getKendaraan($_POST['id']));
    }

    public function ubahData($id)
    {
        $this->kendaraan->ubahData($id);
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('mobil');
    }
}
