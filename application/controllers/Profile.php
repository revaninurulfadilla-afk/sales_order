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
        
        $data['title'] = 'My Profile';

        $data['user'] = $this->db
            ->get_where(
                'users',
                ['id' => $this->session->userdata('user_id')]
            )
            ->row();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('profile/index', $data);
        $this->load->view('templates/footer');
    }
    public function edit()
    {
        $data['title'] = 'Edit Profile';

        $user_id = $this->session->userdata('user_id');

        $data['user'] = $this->db
            ->get_where('users', ['id' => $user_id])
            ->row();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('profile/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update()
{
    $user_id = $this->session->userdata('user_id');

    $data = [
        'nama'     => $this->input->post('nama'),
        'username' => $this->input->post('username'),
        'email'    => $this->input->post('email')
    ];

    if (!empty($_FILES['foto']['name'])) {

        $config['upload_path']   = './assets/images/user/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['max_size']      = 2048;
        $config['encrypt_name']  = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {

            $user = $this->db
                ->get_where('users', ['id' => $user_id])
                ->row();

            // hapus foto lama
            if (!empty($user->foto) && file_exists('./assets/images/user/' . $user->foto)) {
                unlink('./assets/images/user/' . $user->foto);
            }

            $upload = $this->upload->data();

            $data['foto'] = $upload['file_name'];

        } else {

            echo $this->upload->display_errors();
            return;
        }
    }

    $this->db->where('id', $user_id);
    $this->db->update('users', $data);

    $this->session->set_flashdata(
        'success',
        'Profile berhasil diperbarui'
    );

    redirect('profile');
}
}