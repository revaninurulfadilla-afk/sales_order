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
        $data['title'] = 'Data Produk';

        $keyword = $this->input->get('keyword');

        if($keyword)
        {
            $this->db->like('nama_produk', $keyword);
            $this->db->or_like('kode_produk', $keyword);
        }

        $data['produk'] = $this->db->get('produk')->result();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('produk/index',$data);
        $this->load->view('templates/footer');
    }

   public function tambah()
{
    $data['title'] = 'Tambah Produk';

    if ($this->input->post()) {

        $insert = [
            'kode_produk' => $this->input->post('kode_produk'),
            'nama_produk' => $this->input->post('nama_produk'),
            'harga'       => $this->input->post('harga'),
            'stok'        => $this->input->post('stok'),
            'satuan'      => $this->input->post('satuan'),
            'deskripsi'   => $this->input->post('deskripsi'),
            'status'      => $this->input->post('status')
        ];

        $this->db->insert('produk', $insert);

        redirect('produk');
    }

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('produk/tambah');
    $this->load->view('templates/footer');
}

    public function simpan()
{
    $foto_produk = '';

    if (!empty($_FILES['foto_produk']['name']))
    {
        $config['upload_path']   = './assets/src/images/product/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name']     = time().'_'.$_FILES['foto_produk']['name'];

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_produk'))
        {
            $upload_data = $this->upload->data();
            $foto_produk = $upload_data['file_name'];
        }
        else
        {
            echo $this->upload->display_errors();
            exit;
        }
    }

    $data = [
        'kode_produk' => $this->input->post('kode_produk'),
        'nama_produk' => $this->input->post('nama_produk'),
        'harga'       => $this->input->post('harga'),
        'stok'        => $this->input->post('stok'),
        'satuan'      => $this->input->post('satuan'),
        'deskripsi'   => $this->input->post('deskripsi'),
        'foto_produk' => $foto_produk,
        'status'      => 1
    ];

    $this->db->insert('produk', $data);

    redirect('produk');
}

    public function edit($id)
    {
        $data['title'] = 'Edit Produk';

        $data['produk'] = $this->db
            ->get_where('produk', ['id' => $id])
            ->row();

        if ($this->input->post()) {

            $update = [
                'kode_produk' => $this->input->post('kode_produk'),
                'nama_produk' => $this->input->post('nama_produk'),
                'harga'       => $this->input->post('harga'),
                'stok'        => $this->input->post('stok'),
                'satuan'      => $this->input->post('satuan'),
                'deskripsi'   => $this->input->post('deskripsi'),
                'status'      => $this->input->post('status')
            ];

            $this->db->where('id', $id);

            if(!empty($_FILES['foto_produk']['name']))
            {
                $config['upload_path']   = './assets/src/images/product/';
                $config['allowed_types'] = 'jpg|jpeg|png|webp';
                $config['encrypt_name']  = TRUE;

                $this->load->library('upload', $config);

                if($this->upload->do_upload('foto_produk'))
                {
                    $upload = $this->upload->data();

                    $update['foto_produk'] = $upload['file_name'];
                }
            }
            $this->db->update('produk', $update);

            redirect('produk');
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('produk/edit', $data);
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