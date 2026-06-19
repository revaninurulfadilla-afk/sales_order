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

        $keyword = $this->input->get('keyword');

        if($keyword)
        {
            $this->db->like('nama_sales', $keyword);
            $this->db->or_like('kode_sales', $keyword);
        }

        $data['sales'] = $this->db->get('sales')->result();

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

    $foto = '';

    if (!empty($_FILES['foto']['name']))
    {
        $config['upload_path']   = './assets/images/user/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['encrypt_name']  = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto'))
        {
            $upload = $this->upload->data();
            $foto = $upload['file_name'];
        }
    }
    $cek = $this->db
        ->get_where('users', [
            'username' => $this->input->post('username')
        ])
        ->row();

    if($cek)
    {
        echo "Username sudah digunakan";
        exit;
    }

    $user = [
        'username' => $this->input->post('username'),
        'password' => md5('123456'),
        'nama'     => $this->input->post('nama_sales'),
        'email'    => $this->input->post('email'),
        'role'     => 'sales',
        'status'   => $this->input->post('status'),
        'foto'     => $foto
    ];
    $this->db->insert('users', $user);

    $user_id = $this->db->insert_id();

    $insert = [
        'kode_sales' => $this->input->post('kode_sales'),
        'nama_sales' => $this->input->post('nama_sales'),
        'telepon'    => $this->input->post('telepon'),
        'email'      => $this->input->post('email'),
        'user_id'    => $user_id,
        'status'     => $this->input->post('status'),
        'foto'       => $foto
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