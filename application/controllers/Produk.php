<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('logged_in'))
        {
            redirect('login');
        }

        if($this->session->userdata('role') != 'admin')
        {
            show_error('Akses ditolak',403);
        }

        $this->load->model('Produk_model');
    }

    public function index()
    {
        $data['title'] = 'Master Produk';
        $data['produk'] = $this->Produk_model->get_all();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('produk/index',$data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Produk';

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('produk/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'kode_produk' => $this->input->post('kode_produk'),
            'nama_produk' => $this->input->post('nama_produk'),
            'harga'       => $this->input->post('harga'),
            'stok'        => $this->input->post('stok'),
            'satuan'      => $this->input->post('satuan'),
            'deskripsi'   => $this->input->post('deskripsi'),
            'status'      => $this->input->post('status'),
            'created_at'  => date('Y-m-d H:i:s')
        ];

        $this->Produk_model->insert($data);

        redirect('produk');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Produk';
        $data['produk'] = $this->Produk_model->get_by_id($id);

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('produk/edit',$data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data = [
            'kode_produk' => $this->input->post('kode_produk'),
            'nama_produk' => $this->input->post('nama_produk'),
            'harga'       => $this->input->post('harga'),
            'stok'        => $this->input->post('stok'),
            'satuan'      => $this->input->post('satuan'),
            'deskripsi'   => $this->input->post('deskripsi'),
            'status'      => $this->input->post('status'),
            'updated_at'  => date('Y-m-d H:i:s')
        ];

        $this->Produk_model->update($id,$data);

        redirect('produk');
    }

    public function hapus($id)
    {
        $this->Produk_model->delete($id);

        redirect('produk');
    }
}