<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
    }

    function index()
    {
        if ($this->session->userdata('email')) {
            redirect('MahasiswaController');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib Diisi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password Wajib Diisi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Login';
            $this->load->view('layouts/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('layouts/auth_footer');
        } else {
            $this->cek_login();
        }
    }

    function registrasi()
    {
        if ($this->session->userdata('email')) {
            redirect('MahasiswaController');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
            'required' => 'Nama Wajib Diisi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar',
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib Diisi'
        ]);
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[5]|matches[password_ulang]',
            [
                'matches' => 'Password Tidak Sama',
                'min_length' => 'Password Terlalu Pendek',
                'require' => 'Password harus diisi bre..'
            ]
        );

        $this->form_validation->set_rules('password_ulang', 'Password', 'trim|required|matches[password]');
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi';
            $this->load->view('layouts/auth_header', $data);
            $this->load->view('auth/registrasi', $data);
            $this->load->view('layouts/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'gambar' => 'default.jpg',
                'role' => "User",
                'date_created' => time()
            ];
            $this->userrole->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil daftar, Silahkan Login!</div>');
            redirect('Auth');
        }
    }

    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'id' => $user['id'],
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 'Admin') {
                    redirect('MahasiswaController');
                } else {
                    redirect('Profil');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar</div>');
            redirect('Auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berhasil Logout!</div>');
        redirect('Auth');
    }
}
