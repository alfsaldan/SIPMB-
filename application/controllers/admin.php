<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Pendaftar_model');
        $this->load->model('User_model');
        $this->load->model('Konten_model');
        $this->load->model('Jadwal_model');
    }

    public function index()
    {
        $data['judul'] = "Dashboard";
        $data['pendaftar_data'] = $this->User_model->get();
        $data['berita'] = $this->Konten_model->get();
        $data['berita2'] = $this->Konten_model->getTotalBarang();
        $data['jadwal2'] = $this->Jadwal_model->getTotalJadwal();
        $data['user2'] = $this->User_model->getTotalUser();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $this->load->view("layout_admin/header", $data);
        $this->load->view("admin/vw_admin", $data);
        $this->load->view("layout_admin/footer", $data);

    }

    // public function jadwal()
    // {
    //     $data['judul'] = "Jadwal Pendaftaran";
    //     $this->load->view("layout_admin/header");
    //     $this->load->view("admin/vw_admin_jadwal", $data);
    //     $this->load->view("layout_admin/footer");

    // }

    // public function konten()
    // {
    //     $data['judul'] = "Konten Berita";

    //     $this->load->view("layout_admin/header");
    //     $this->load->view("admin/vw_admin_konten", $data);
    //     $this->load->view("layout_admin/footer");

    // }

    public function akunpendaftar()
    {
        $data['judul'] = "Akun Pendaftar";
        $this->load->view("layout_admin/header", $data);
        $this->load->view("admin/vw_admin_akunpendaftar", $data);
        $this->load->view("layout_admin/footer", $data);

    }
    public function aktivasi()
    {
        $data['judul'] = "Manajemen Aktivasi";
        $this->load->view("layout_admin/header", $data);
        $this->load->view("admin/vw_admin_aktivasi", $data);
        $this->load->view("layout_admin/footer", $data);

    }

    public function account()
    {
        $data['judul'] = "Manajemen Akun Admin";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $this->load->view("layout_admin/header", $data);
        $this->load->view("admin/vw_admin_account", $data);
        $this->load->view("layout_admin/footer", $data);

    }

    public function editAccount($id)
    {
        $data['judul'] = "Halaman Edit User";
        $data['user'] = $this->User_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
            'required' => 'Email Wajib di isi',
            'valid_email' => 'Format email tidak valid'
        ]);
        $this->form_validation->set_rules('no_hp', 'No HP', 'required', [
            'required' => 'No HP Wajib di isi'
        ]);
    
        if ($this->form_validation->run() == false) {
            $this->load->view("layout_admin/header", $data);
            $this->load->view("admin/vw_account", $data);
            $this->load->view("layout_admin/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'no_hp' => $this->input->post('no_hp'),
            ];
    
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets2/assets/img/avatars/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['user']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets2/assets/img/avatars/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
    
            $this->User_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User berhasil Diubah!</div>');
            redirect('admin');
        }
    }

    public function pendaftaran()
    {
        $data['judul'] = "Manajemen Pendaftaran";
        $data['pendaftar_data'] = $this->User_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $this->load->view("layout_admin/header", $data);
        $this->load->view("admin/vw_admin_pendaftaran", $data);
        $this->load->view("layout_admin/footer", $data);

    }
    
}