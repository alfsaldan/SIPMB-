<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Mahasiswa_model');
        // $this->load->model('Prodi_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Pendaftar";
        $this->load->view("layout/header");
        $this->load->view("pendaftar/vw_pendaftar", $data);
        $this->load->view("layout/footer");

    }
}