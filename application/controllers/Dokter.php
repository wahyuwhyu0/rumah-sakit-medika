<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{

    public function index()
    {
        $data['dataDokter'] = $this->db->query("SELECT * FROM `dokter` ORDER BY `nama_dokter` ASC")->result_array();

        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('dokter/index', $data);
        $this->load->view('template/footer');
    }
}