<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Sales_model');
    }

    public function index()
    {
        $data['title'] = 'Data Sales';
        $data['sales'] = $this->Sales_model->get_all();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('sales/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['title'] = 'Tambah Sales';

        if ($this->input->post()) {

            $insert = [
                'kode_sales' => $this->input->post('kode_sales'),
                'nama_sales' => $this->input->post('nama_sales'),
                'telepon'    => $this->input->post('telepon'),
                'email'      => $this->input->post('email'),
                'status'     => $this->input->post('status')
            ];

            $this->db->insert('sales', $insert);

            redirect('sales');
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('sales/tambah');
        $this->load->view('templates/footer');
    }
    public function edit($id)
{
    $data['title'] = 'Edit Sales';

    $data['sales'] = $this->db
        ->get_where('sales', ['id' => $id])
        ->row();

    if ($this->input->post()) {

        $update = [
            'kode_sales' => $this->input->post('kode_sales'),
            'nama_sales' => $this->input->post('nama_sales'),
            'telepon'    => $this->input->post('telepon'),
            'email'      => $this->input->post('email'),
            'status'     => $this->input->post('status')
        ];

        $this->db->where('id', $id);
        $this->db->update('sales', $update);

        redirect('sales');
    }

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('sales/edit', $data);
    $this->load->view('templates/footer');
}
public function hapus($id)
{
    $this->db->delete('sales', ['id' => $id]);
    redirect('sales');
}
}