<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller
{
    public function index()
    {
        $data['title'] = 'My Profile';

        $user_id = $this->session->userdata('user_id');

        $data['user'] = $this->db
            ->get_where('users', ['id' => $user_id])
            ->row();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('profile/index', $data);
        $this->load->view('templates/footer');
    }
}