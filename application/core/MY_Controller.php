<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('logged_in'))
        {
            redirect('login');
        }
    }

    protected function cek_role($roles = [])
    {
        $role = $this->session->userdata('role');

        if(!in_array($role, $roles))
        {
            show_error('Akses ditolak', 403);
        }
    }
}