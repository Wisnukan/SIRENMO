<?php

class Kendaraan_model extends CI_Model
{
    public function getAllKendaraan($limit, $start)
    {
        return $this->db->select('tb_kendaraan.id, nomor_plat, nama, tb_kategori.merk as merk, tahun, kode_kategori, tb_kategori.jenis_kendaraan as jenis, status')
            ->from('tb_kendaraan')
            ->join('tb_kategori', 'tb_kategori.kode_kategori = tb_kendaraan.kategori_kode')
            ->limit($limit, $start)
            ->get()
            ->result_array();
    }
    public function getKategori()
    {
        return $this->db->select('id, kode_kategori as kode, jenis_kendaraan as jenis, merk, jumlah')
            ->from('tb_kategori')
            ->get()
            ->result_array();
    }
    public function tambahDataMobil($data)
    {
        $data = array(
            'nomor_plat' => $data['nomor_plat'],
            'nama' => $data['nama'],
            'tahun' => $data['tahun'],
            'status' => $this->input->post('status'),
            'kategori_kode' => $data['kategori'],
            'harga_per_jam' => $data['harga'],
            'harga_dgn_sopir_bbm' => $data['paket'],
            'transmisi' => $data['transmisi'],
            'deskripsi' => $data['deskripsi'],
            'image' => $data['fotoMobil']
        );

        $this->db->insert('tb_kendaraan', $data);
    }
    public function hapusDataMobil($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_kendaraan');
    }
    public function getKendaraan($id)
    {
        return $this->db->select('tb_kendaraan.id, nomor_plat, nama, tahun, tb_kategori.kode_kategori as kategori, tb_kategori.merk as merk, tb_kendaraan.status as status, tb_kendaraan.harga_per_jam as harga, tb_kendaraan.harga_dgn_sopir_bbm as paket, deskripsi, transmisi, image')
            ->from('tb_kendaraan')
            ->join('tb_kategori', 'tb_kategori.kode_kategori = tb_kendaraan.kategori_kode')
            ->where('tb_kendaraan.id', $id)
            ->get()
            ->row_array();
    }
    public function ubahData($id)
    {
        $data = array(
            'nomor_plat' => $this->input->post('nomor_plat', true),
            'nama' =>  $this->input->post('nama', true),
            'tahun' =>  $this->input->post('tahun', true),
            'status' =>  $this->input->post('status', true),
            'kategori_kode' =>  $this->input->post('kategori', true),
            'harga_per_jam' =>  $this->input->post('harga', true),
            'harga_dgn_sopir_bbm' =>  $this->input->post('paket', true),
            'deskripsi' =>  $this->input->post('deskripsi', true),
            'transmisi' =>  $this->input->post('transmisi', true),
            'image' =>  $this->input->post('fotoMobil', true)
        );

        $this->db->where('id', $id);
        $this->db->update('tb_kendaraan', $data);
    }

    public function cariMobil($limit, $start, $keyword = null)
    {
        if ($keyword) {
            return $this->db->select('tb_kendaraan.id, tb_kendaraan.nomor_plat, tb_kendaraan.nama, tb_kendaraan.tahun, tb_kategori.kode_kategori as kategori, tb_kategori.jenis_kendaraan as jenis, tb_kategori.merk as merk, tb_kendaraan.status, tb_kendaraan.harga_per_jam as harga, tb_kendaraan.harga_dgn_sopir_bbm as paket, transmisi')
                ->from('tb_kendaraan')
                ->join('tb_kategori', 'tb_kategori.kode_kategori = tb_kendaraan.kategori_kode')
                ->like('nomor_plat', $keyword)
                ->or_like('nama', $keyword)
                ->or_like('status', $keyword)
                ->or_like('merk', $keyword)
                ->or_like('tahun', $keyword)
                ->or_like('harga_per_jam', $keyword)
                ->or_like('harga_dgn_sopir_bbm', $keyword)
                ->or_like('transmisi', $keyword)
                ->limit($limit, $start)
                ->get()
                ->result_array();
        } else {
            return $this->db->select('tb_kendaraan.id, nomor_plat, nama, tb_kategori.merk as merk, tahun, kode_kategori, tb_kategori.jenis_kendaraan as jenis, status, tb_kendaraan.harga_per_jam as harga, tb_kendaraan.harga_dgn_sopir_bbm as paket, transmisi')
                ->from('tb_kendaraan')
                ->join('tb_kategori', 'tb_kategori.kode_kategori = tb_kendaraan.kategori_kode')
                ->limit($limit, $start)
                ->get()
                ->result_array();
        }
    }
    public function countKendaraan()
    {
        return $this->db->select('tb_kendaraan.id, nomor_plat, nama, tb_kategori.merk as merk, tahun, kode_kategori, tb_kategori.jenis_kendaraan as jenis, status')
            ->from('tb_kendaraan')
            ->join('tb_kategori', 'tb_kategori.kode_kategori = tb_kendaraan.kategori_kode')
            ->get()
            ->num_rows();
    }
    public function countPencarian($keyword)
    {
        return $this->db->select('tb_kendaraan.id, nomor_plat, nama, tb_kategori.merk as merk, tahun, kode_kategori, tb_kategori.jenis_kendaraan as jenis, status')
            ->from('tb_kendaraan')
            ->join('tb_kategori', 'tb_kategori.kode_kategori = tb_kendaraan.kategori_kode')
            ->like('nomor_plat', $keyword)
            ->or_like('nama', $keyword)
            ->or_like('status', $keyword)
            ->or_like('merk', $keyword)
            ->or_like('tahun', $keyword)
            ->get()
            ->num_rows();
    }
}
