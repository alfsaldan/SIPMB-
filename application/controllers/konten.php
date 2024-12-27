<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Konten extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Konten_model');
        $this->load->model('User_model');

    }

    public function index()
    {
        $data['judul'] = "Konten Berita";
        $data['berita'] = $this->Konten_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $this->load->view("layout_admin/header", $data);
        $this->load->view("admin/vw_admin_konten", $data);
        $this->load->view("layout_admin/footer", $data);

    }
    
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Berita";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	    $this->form_validation->set_rules('judul', 'Judul', 'required', [
            'required' => 'Judul Wajib di isi'
        ]);
        $this->form_validation->set_rules('isi', 'Isi', 'required', [
            'required' => 'Isi Wajib di isi'
        ]);
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', [
            'required' => 'Tanggal Wajib di isi'
        ]); 
      
        if ($this->form_validation->run() == false) {
            $this->load->view("layout_admin/header", $data);
            $this->load->view("admin/vw_tambah_berita", $data);
            $this->load->view("layout_admin/footer", $data);
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'tanggal' => $this->input->post('tanggal'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/berita/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $upload_file = $_FILES['file']['name'];
            if ($upload_file) {
                $config['allowed_types'] = "pdf|xls|csv";
                $config['max_size'] = '2048';
                $config['encrypt_name'] = TRUE;
                $config['upload_path'] = './assets/file/berita/'; // Sesuaikan dengan folder penyimpanan file
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('file')) {
                    $new_file = $this->upload->data('file_name');
                    $data['file'] = $new_file;
                } else {
                    echo $this->upload->display_errors();
                }
            }       
            $this->Konten_model->insert($data, $upload_image, $upload_file);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
            Berita berhasil Ditambah!</div>');
            redirect('konten');
        }
    }

    public function edit($id)
{
    $data['judul'] = "Halaman Edit Berita";
    $data['berita'] = $this->Konten_model->getById($id);
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('judul', 'Judul', 'required', [
        'required' => 'Judul Wajib di isi'
    ]);
    $this->form_validation->set_rules('isi', 'Isi', 'required', [
        'required' => 'Isi Wajib di isi'
    ]);
    $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', [
        'required' => 'Tanggal Wajib di isi'
    ]);

    if ($this->form_validation->run() == false) {
        $this->load->view("layout_admin/header", $data);
        $this->load->view("admin/vw_ubah_berita", $data);
        $this->load->view("layout_admin/footer", $data);
    } else {
        $data = [
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'tanggal' => $this->input->post('tanggal'),
        ];
        $upload_image = $_FILES['gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/berita/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $old_image = $data['berita']['gambar'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/berita/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $upload_file = $_FILES['file']['name'];
        if ($upload_file) {
            $config['allowed_types'] = 'pdf|xls|xlsx';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/files/berita/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                $old_file = $data['berita']['file'];
                if ($old_file != 'default.pdf') {
                    unlink(FCPATH . 'assets/files/berita/' . $old_file);
                }
                $new_file = $this->upload->data('file_name');
                $this->db->set('file', $new_file);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->Konten_model->update(['berita_id' => $id], $data, $upload_image, $upload_file);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berita berhasil Diubah!</div>');
        redirect('Konten');
    }
}

    public function hapus($id)
    {
        $this->Konten_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
        fas fa-info-circle"></i>Data Berita tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
        class="icon fas fa-check-circle"></i>Data Berita Berhasil Dihapus!</div>');
        }
        redirect('Konten');
    }

    public function detailBerita($id)
    {
        $data['judul'] = "Halaman Detail Berita";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->Konten_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("Landing/vw_berita", $data);
        $this->load->view("layout/footer", $data);
    }

}