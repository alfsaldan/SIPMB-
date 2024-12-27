<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwal_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['judul'] = "Kelola Jadwal";
        $data['jadwal'] = $this->Jadwal_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $this->load->view("layout_admin/header", $data);
        $this->load->view("admin/vw_admin_jadwal", $data);
        $this->load->view("layout_admin/footer", $data);
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Jadwal";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        
        $this->form_validation->set_rules('tempat', 'Tempat', 'required', [
            'required' => 'Tempat Wajib di isi'
        ]);
        $this->form_validation->set_rules('subjalur', 'Subjalur', 'required', [
            'required' => 'Subjalur Wajib di isi'
        ]);
    
        $this->form_validation->set_rules('jenis', 'Jenis', 'required', [
            'required' => 'Jenis Wajib di isi'
        ]);
        $this->form_validation->set_rules('tgl_awal', 'Tgl_awal', 'required', [
            'required' => 'Tanggal Awal Wajib di isi'
        ]);
        $this->form_validation->set_rules('tgl_akhir', 'Tgl_akhir', 'required', [
            'required' => 'Tanggal Akhir Wajib di isi'
        ]);
        $this->form_validation->set_rules('akhir_upload', 'Akhir_upload', 'required', [
            'required' => 'Akhir Upload Awal Wajib di isi'
        ]);
        $this->form_validation->set_rules('akhir_regis', 'Akhir_regis', 'required', [
            'required' => 'Akhir Regis Akhir Wajib di isi'
        ]);
    
        if ($this->form_validation->run() == false) {
            $this->load->view("layout_admin/header", $data);
            $this->load->view("admin/vw_tambah_jadwal", $data);
            $this->load->view("layout_admin/footer");
        } else {
            $data = [
                'tempat' => $this->input->post('tempat'),
                'subjalur' => $this->input->post('subjalur'),
                'jenis' => $this->input->post('jenis'),
                'tgl_awal' => $this->input->post('tgl_awal'),
                'tgl_akhir' => $this->input->post('tgl_akhir'),
                'akhir_upload' => $this->input->post('akhir_upload'),
                'akhir_regis' => $this->input->post('akhir_regis'),
            ];
    
            $this->Jadwal_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jadwal berhasil Ditambah!</div>');
            redirect('Jadwal');
        }
    }
    

  public function edit($id)
{
    $data['judul'] = "Halaman Edit Jadwal";
    $data['jadwal'] = $this->Jadwal_model->getById($id);
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 

    $this->form_validation->set_rules('tempat', 'Tempat', 'required', [
        'required' => 'Tempat Wajib di isi'
    ]);
    $this->form_validation->set_rules('subjalur', 'Subjalur', 'required', [
        'required' => 'Subjalur Wajib di isi'
    ]);

    $this->form_validation->set_rules('jenis', 'Jenis', 'required', [
        'required' => 'Jenis Wajib di isi'
    ]);
    $this->form_validation->set_rules('tgl_awal', 'Tgl_awal', 'required', [
        'required' => 'Tanggal Awal Wajib di isi'
    ]);
    $this->form_validation->set_rules('tgl_akhir', 'Tgl_akhir', 'required', [
        'required' => 'Tanggal Akhir Wajib di isi'
    ]);
    $this->form_validation->set_rules('akhir_upload', 'Akhir_upload', 'required', [
        'required' => 'Akhir Upload Awal Wajib di isi'
    ]);
    $this->form_validation->set_rules('akhir_regis', 'Akhir_regis', 'required', [
        'required' => 'Akhir Regis Akhir Wajib di isi'
    ]);

    if ($this->form_validation->run() == false) {
        $this->load->view("layout_admin/header", $data);
        $this->load->view("admin/vw_ubah_jadwal", $data); // Sesuaikan dengan file view edit jadwal Anda
        $this->load->view("layout_admin/footer");
    } else {
        $data = [
            'tempat' => $this->input->post('tempat'),
            'subjalur' => $this->input->post('subjalur'),
            'jenis' => $this->input->post('jenis'),
            'tgl_awal' => $this->input->post('tgl_awal'),
            'tgl_akhir' => $this->input->post('tgl_akhir'),
            'akhir_upload' => $this->input->post('akhir_upload'),
            'akhir_regis' => $this->input->post('akhir_regis'),
        ];
        
        $this->Jadwal_model->update(['jadwal_id' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jadwal berhasil Diubah!</div>');
        redirect('Jadwal');
    }

}

function hapus($id)
{
    $this->Jadwal_model->delete($id);
    $error = $this->db->error();
    if ($error['code'] != 0) {
    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
    fas fa-info-circle"></i>Data Jadwal tidak dapat dihapus (sudah berelasi)!</div>');
    } else { 
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
    class="icon fas fa-check-circle"></i>Data Jadwal Berhasil Dihapus!</div>');
    }
    redirect('Jadwal');
}
}