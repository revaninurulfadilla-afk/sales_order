<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
        redirect('auth');

        }

        $this->load->model('Pelanggan_model');
    }

    public function index()
    {
        $data['title'] = 'Data Pelanggan';
        $data['pelanggan'] = $this->Pelanggan_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);

        $this->load->view('pelanggan/index', $data);

        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Pelanggan';

        if ($this->input->post()) {

            $insert = [
                'kode_pelanggan' => $this->input->post('kode_pelanggan'),
                'nama_pelanggan' => $this->input->post('nama_pelanggan'),
                'alamat'         => $this->input->post('alamat'),
                'telepon'        => $this->input->post('telepon'),
                'email'          => $this->input->post('email'),
                'status'         => $this->input->post('status')
            ];

            $this->db->insert('pelanggan', $insert);

            redirect('pelanggan');
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pelanggan/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Pelanggan';

        $data['pelanggan'] = $this->db
            ->get_where('pelanggan', ['id' => $id])
            ->row();

        if ($this->input->post()) {

            $update = [
                'kode_pelanggan' => $this->input->post('kode_pelanggan'),
                'nama_pelanggan' => $this->input->post('nama_pelanggan'),
                'alamat'         => $this->input->post('alamat'),
                'telepon'        => $this->input->post('telepon'),
                'email'          => $this->input->post('email'),
                'status'         => $this->input->post('status')
            ];

            $this->db->where('id', $id);
            $this->db->update('pelanggan', $update);

            redirect('pelanggan');
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pelanggan/edit', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->db->delete('pelanggan', ['id' => $id]);

        redirect('pelanggan');
    }
}