<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Mahasiswa_model');
        // $this->load->model('Prodi_model');
        $this->load->model('Pendaftar_model');
        $this->load->model('User_model');
        $this->load->model('Konten_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman landing";
        $data['berita'] = $this->Konten_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $this->load->view("layout/header",$data);
        $this->load->view("landing/vw_landing", $data);
        $this->load->view("layout/footer");

    }

    public function formulir()
    {
        $data['judul'] = "Formulir Pendaftaran";
        // $data['jadwal'] = $this->Jadwal_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $this->load->view("layout/header",$data);
        $this->load->view("landing/vw_formulir", $data);
        $this->load->view("layout/footer");

    }


    public function berita()
    {
        $data['judul'] = "Berita & Artikel";
        $data['berita'] = $this->Konten_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $this->load->view("layout/header",$data);
        $this->load->view("landing/vw_berita", $data);
        $this->load->view("layout/footer");

    }

    public function jadwal()
    {
        $data['judul'] = "Jadwal & Biaya";
        // $data['jadwal'] = $this->Jadwal_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $this->load->view("layout/header",$data);
        $this->load->view("landing/vw_jadwal", $data);
        $this->load->view("layout/footer");

    }

    public function prodi()
    {
        $data['judul'] = "Program Studi";
        // $data['jadwal'] = $this->Jadwal_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $this->load->view("layout/header",$data);
        $this->load->view("landing/vw_prodi", $data);
        $this->load->view("layout/footer");

    }


    public function form()
    {
        $data['judul'] = "Form Pendaftaran";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $this->load->view("layout/header",$data);
        $this->load->view("landing/form", $data);
        $this->load->view("layout/footer");

    }

    public function daftar($id)
    {
        $data['judul'] = "Halaman Formulir Pendaftaran";
        $data['user'] = $this->User_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('nisn', 'Nisn', 'required', [
            'required' => 'Nisn Wajib di isi'
        ]);
        $this->form_validation->set_rules('nik', 'Nik', 'required', [
            'required' => 'Nik Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'No HP', 'required', [
            'required' => 'No HP Wajib di isi'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', [
            'required' => 'Tempat Lahir Wajib di isi'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', [
            'required' => 'Tanggal Lahir Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Wajib di isi'
        ]);
        $this->form_validation->set_rules('kabupaten_tinggal', 'Kabupaten Tinggal', 'required', [
            'required' => 'Kabupaten Tinggal Wajib di isi'
        ]);
        $this->form_validation->set_rules('kabupaten_sekolah', 'Kabupaten Sekolah', 'required', [
            'required' => 'Kabupaten Sekolah Wajib di isi'
        ]);
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
            'required' => 'Jurusan Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun_lulus', 'Tahun', 'required', [
            'required' => 'Tahun Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_pendaftar', 'Jenis Pendaftar', 'required', [
            'required' => 'Jenis Pendaftar Wajib di isi'
        ]);
    
        // Check if form validation is successful
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("landing/form", $data);
            $this->load->view("layout/footer");
        } else {
            // If validation is successful, you can handle the data as needed
            $data = [
                'nama' => $this->input->post('nama'),
                'nisn' => $this->input->post('nisn'),
                'nik' => $this->input->post('nik'),
                'no_hp' => $this->input->post('no_hp'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'kabupaten_tinggal' => $this->input->post('kabupaten_tinggal'),
                'kabupaten_sekolah' => $this->input->post('kabupaten_sekolah'),
                'jurusan' => $this->input->post('jurusan'),
                'tahun_lulus' => $this->input->post('tahun_lulus'),
                'jenis_pendaftar' => $this->input->post('jenis_pendaftar'),
            ];
            
        $upload_image = $_FILES['gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/pendaftar/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $old_image = $data['pendaftar']['gambar'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/pendaftar/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->User_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Proses pendaftaran berhasil!</div>');
            redirect('Landing/riwayat');
        }
    }

    public function editPendaftar($id)
{
    $data['judul'] = "Halaman Verifikasi";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['user'] = $this->User_model->getById($id);

  
    $this->form_validation->set_rules('status_pembayaran', 'status_pembayaran', 'required', [
        'required' => 'status_pembayaran Wajib di isi'
    ]);
    $this->form_validation->set_rules('status_berkas', 'status_berkas', 'required', [
        'required' => 'status_berkas Wajib di isi'
    ]);
    $this->form_validation->set_rules('status_kelulusan', 'status_kelulusan', 'required', [
        'required' => 'status_kelulusan Wajib di isi'
    ]);

    if ($this->form_validation->run() == false) {
        $this->load->view("layout_admin/header", $data);
        $this->load->view("admin/vw_ubah_pendaftar", $data);
        $this->load->view("layout_admin/footer");
    } else {
        $data = [
            'status_pembayaran' => $this->input->post('status_pembayaran'),
            'status_berkas' => $this->input->post('status_berkas'),
            'status_kelulusan' => $this->input->post('status_kelulusan'),
        ];

        $this->User_model->update(['id' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pendaftar berhasil Diubah!</div>');
        redirect('Admin/pendaftaran');
    }
}

    public function hapusPendaftar($id)
    {
        $this->User_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
        fas fa-info-circle"></i>Data Berita tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
        class="icon fas fa-check-circle"></i>Data Berita Berhasil Dihapus!</div>');
        }
        redirect('Admin/pendaftaran');
    }

    public function detailPendaftar($id)
    {
        $data['judul'] = "Halaman Detail Pendaftar";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->User_model->getById($id);
        $this->load->view("layout_admin/header", $data);
        $this->load->view("Admin/vw_detail_pendaftar", $data);
        $this->load->view("layout_admin/footer", $data);
    }

    public function riwayat()
    {
        $data['judul'] = "Riwayat Pendaftaran";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        // $data['pendaftar'] = $this->User_model->();
        $this->load->view("layout/header",$data);
        $this->load->view("landing/vw_riwayatpendaftaran", $data);
        $this->load->view("layout/footer");

    }

    public function prodidetailmesin()
    {
        $data['judul'] = "Prodi detail";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $this->load->view("layout/header",$data);
        $this->load->view("landing/vw_prodidetailmesin", $data);
        $this->load->view("layout/footer");

    }

    public function prodidetaillistrik()
    {
        $data['judul'] = "Prodi detail";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $this->load->view("layout/header",$data);
        $this->load->view("landing/vw_prodidetaillistrik", $data);
        $this->load->view("layout/footer");

    }
    
    public function prodidetailmeka()
    {
        $data['judul'] = "Prodi detail";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $this->load->view("layout/header",$data);
        $this->load->view("landing/vw_prodidetailmeka", $data);
        $this->load->view("layout/footer");

    }



}