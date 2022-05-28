<?php

class Pelanggan_model extends CI_model {
    public function getAllPelanggan()
    {
        return $this->db->get('pelanggan')->result_array();
        
    }

    public function tambahDataPelanggan()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "tgl_checkin" => $this->input->post('tgl_checkin', true),
            "email" => $this->input->post('email', true),
            "jenis_kamar" => $this->input->post('jenis_kamar', true)
        ];
        $this->db->insert('pelanggan', $data);
    }

    public function hapusDataPelanggan($id)
    {
        //$this->db->where('id', $id);
        $this->db->delete('pelanggan', ['id' => $id]);
    }

    public function getPelangganById($id)
    {
        return $this->db->get_where('pelanggan', ['id' => $id])->row_array();
    }

    public function ubahDataPelanggan()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "tgl_checkin" => $this->input->post('tgl_checkin', true),
            "email" => $this->input->post('email', true),
            "jenis_kamar" => $this->input->post('jenis_kamar', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pelanggan', $data);
    }

    public function cariDataPelanggan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jenis_kamar', $keyword);
        $this->db->or_like('tgl_checkin', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('pelanggan')->result_array();
    }
}