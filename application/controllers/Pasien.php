<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function index()
    {
        $data['dataPasien'] = $this->db->query("SELECT * FROM `pasien` ORDER BY `nama_pasien` ASC")->result_array();

        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('pasien/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['dataDokter'] = $this->db->get('dokter')->result_array();
        $data['dataRuangan'] = $this->db->get('ruangan')->result_array();

        $this->form_validation->set_rules('no_identitas', 'No Identitas', 'required', [
            'required' => 'No Identitas belum di isi!',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('pasien/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->Pasien_model->tambahPasien();
            $this->session->set_flashdata('message', '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                                                        Pasien baru sukses ditambahkan
                                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>');
            redirect('pasien');
        }
    }
}