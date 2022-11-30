<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_model extends CI_Model
{
    public function tambahPasien()
    {
        $data = [
            "no_identitas" => $this->input->post('no_identitas', true),
            "kd_dokter" => $this->input->post('kd_dokter', true),
            "nama_pasien" => $this->input->post('nama_pasien', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "kelompok_pasien" => $this->input->post('kelompok_pasien', true),
            "tgl_registrasi" => $this->input->post('tgl_registrasi', true),
            "kd_ruangan" => $this->input->post('kd_ruangan', true),
            "diaknosis" => $this->input->post('diaknosis', true)
        ];

        $this->db->insert('pasien', $data);

        $data2 = [
            "jumlah_pasien_perdokter" => $this->input->post('jumlah_pasien_perdokter', true),
        ];

        $this->db->where('kd_dokter', $this->input->post('kd_dokter'));
        $this->db->update('dokter', $data2);

        $data3 = [
            "jumlah_pasien_peruangan" => $this->input->post('jumlah_pasien_peruangan', true),
        ];

        $this->db->where('kd_ruangan', $this->input->post('kd_ruangan'));
        $this->db->update('ruangan', $data3);
    }
}