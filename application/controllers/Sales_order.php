<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_order extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Sales_order_model');
    }

    public function index()
    {
        $role = $this->session->userdata('role');

        if ($role == 'sales')
        {
            $data['order'] = $this->Sales_order_model
                ->get_by_sales(
                    $this->session->userdata('user_id')
                );
        }
        else
        {
            $data['order'] = $this->Sales_order_model
                ->get_all();
        }

        $data['title'] = 'Sales Order';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('sales_order/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Sales Order';

        $data['order'] = $this->Sales_order_model
            ->get_by_id($id);

        $data['detail'] = $this->Sales_order_model
            ->get_detail_order($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('sales_order/detail', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
{
    $data['title'] = 'Tambah Sales Order';

    $data['pelanggan'] = $this->db->get('pelanggan')->result();
    $data['sales']     = $this->db->get('sales')->result();
    $data['produk']    = $this->db->get('produk')->result();

    if($this->input->post())
    {
        $insert = [

            'no_order'      => $this->input->post('no_order'),
            'tanggal_order' => $this->input->post('tanggal_order'),
            'pelanggan_id'  => $this->input->post('pelanggan_id'),
            'sales_id'      => $this->input->post('sales_id'),

            'total_harga'   => 0,

            'status'        => 'draft',

            'created_by'    => $this->session->userdata('user_id')

        ];

        $this->db->insert('sales_order', $insert);

        redirect('sales_order');
    }

    $this->load->view('templates/header',$data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('sales_order/tambah',$data);
    $this->load->view('templates/footer');
}
public function status($id,$status)
{
    $this->db->where('id',$id);
    $this->db->update('sales_order',[
        'status'=>$status
    ]);

    redirect('sales_order');
}

    public function hapus($id)
    {
        $this->db->delete('sales_order', [
            'id' => $id
        ]);

        redirect('sales_order');
    }
}