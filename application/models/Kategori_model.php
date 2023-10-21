<?php

class Kategori_model extends CI_Model
{

    public function tampilData()
    {
        return $this->db->get('tb_kategori')->result_array();
    }

    public function tambahDataKategori($data)
    {
        $data = array(
            'kode_kategori' => $data['kode_kategori'],
            'jenis_kendaraan' => $data['jenis_kendaraan'],
            'merk' => $data['merk'],
            'jumlah' => $this->input->post('jumlah_unit')
        );

        $this->db->insert('tb_kategori', $data);
    }
    public function hapusDataKategori($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_kategori');
    }
    public function getData($id)
    {
        return $this->db->get_where('tb_kategori', array('id' => $id))->row_array();
    }
    public function ubahData($id)
    {
        $data = array(
            'kode_kategori' => $this->input->post('kode_kategori'),
            'jenis_kendaraan' => $this->input->post('jenis_kendaraan'),
            'merk' => $this->input->post('merk'),
            'jumlah' => $this->input->post('jumlah_unit')
        );

        $this->db->where('id', $id);
        $this->db->update('tb_kategori', $data);
    }

    public function cariData($limit, $start, $keyword = null)
    {
        if ($keyword) {
            return $this->db->select('id, kode_kategori, jenis_kendaraan, merk, jumlah')
                ->from('tb_kategori')
                ->like('kode_kategori', $keyword)
                ->or_like('jenis_kendaraan', $keyword)
                ->or_like('merk', $keyword)
                ->or_like('jumlah', $keyword)
                ->limit($limit, $start)
                ->get()
                ->result_array();
        } else {
            return $this->db->select('id, kode_kategori, jenis_kendaraan, merk, jumlah')
                ->from('tb_kategori')
                ->limit($limit, $start)
                ->get()
                ->result_array();
        }
    }
    public function countKategori()
    {
        return $this->db->select('id, kode_kategori, jenis_kendaraan, merk, jumlah')
            ->from('tb_kategori')
            ->get()
            ->num_rows();
    }
    public function countPencarian($keyword)
    {
        return $this->db->select('id, kode_kategori, jenis_kendaraan, merk, jumlah')
            ->from('tb_kategori')
            ->like('kode_kategori', $keyword)
            ->or_like('jenis_kendaraan', $keyword)
            ->or_like('merk', $keyword)
            ->or_like('jumlah', $keyword)
            ->get()
            ->num_rows();
    }
}
