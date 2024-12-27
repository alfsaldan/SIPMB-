<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
         $this->load->model('User_Model','userrole');
        // $this->load->model('Prodi_model');
    }

    public function index()
    {
        $this->load->view("layout/auth_header");
        $this->load->view("auth/login");
        $this->load->view("layout/auth_footer");
   
    }
    public function registrasi()
    {
        $this->load->view("layout/auth_header");
        $this->load->view("auth/registrasi");
        $this->load->view("layout/auth_footer");
   
    }

    function cek_regis(){
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama',true)),
            'email' => htmlspecialchars($this->input->post('email',true)),
            'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
            'role' => "User",

        ];
        $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets2/assets/img/avatar/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
        $this->userrole->insert($data, $upload_image);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
        Selamat Akunmu telah berhasil terdaftar, Silahkan Login!</div>');
        redirect('Auth');
    }
    public function cek_login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user',['email' => $email])->row_array();
        if($user){
            if (password_verify($password,$user['password'])){
                $data =[
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'id' => $user['id'],
                ];
                $this->session->set_userdata($data);
                if($user['role']=='Admin'){
                    redirect('admin');
                }else{
                    redirect('landing');
                }
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('Auth');
            }
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger" role= "alert" >Email Belum Terdaftar! </div>');
            redirect('Auth');
        }
    }
    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message','<div class="alert alert-primary" role="alert">Berhasil Logout!</div>');
        redirect('Auth');
    }

}