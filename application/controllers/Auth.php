<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    /**
     * Form Login
     */
    public function index()
    {
        // Jika sudah login
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        }

        $this->load->view('auth/login');
    }

    /**
     * Proses Login
     */
    public function login()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim'
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim'
        );

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('auth/login');

        } else {

            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);

            $user = $this->User_model->cek_login($username);

            if ($user) {

                 if(md5($password) == $user->password) {

                    $session = [
                        'user_id'   => $user->id,
                        'username'  => $user->username,
                        'nama'      => $user->nama,
                        'role'      => $user->role,
                        'logged_in' => TRUE
                    ];

                    $this->session->set_userdata($session);

                    redirect('dashboard');

                } else {

                    $this->session->set_flashdata(
                        'error',
                        'Password salah!'
                    );

                    redirect('login');
                }

            } else {

                $this->session->set_flashdata(
                    'error',
                    'Username tidak ditemukan!'
                );

                redirect('login');
            }
        }
    }

    /**
     * Logout
     */
    public function logout()
    {
        $this->session->sess_destroy();

        redirect('login');
    }
}