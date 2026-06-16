<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_order_model extends CI_Model
{
    public function get_all()
    {
        return $this->db
            ->select('
                sales_order.*,
                pelanggan.nama_pelanggan,
                sales.nama_sales
            ')
            ->from('sales_order')
            ->join('pelanggan', 'pelanggan.id = sales_order.pelanggan_id')
            ->join('sales', 'sales.id = sales_order.sales_id')
            ->order_by('sales_order.id', 'DESC')
            ->get()
            ->result();
    }

    public function get_by_id($id)
    {
        return $this->db
            ->select('
                sales_order.*,
                pelanggan.nama_pelanggan,
                sales.nama_sales
            ')
            ->from('sales_order')
            ->join('pelanggan', 'pelanggan.id = sales_order.pelanggan_id')
            ->join('sales', 'sales.id = sales_order.sales_id')
            ->where('sales_order.id', $id)
            ->get()
            ->row();
    }

    public function get_by_sales($user_id)
    {
        return $this->db
            ->select('
                sales_order.*,
                pelanggan.nama_pelanggan,
                sales.nama_sales
            ')
            ->from('sales_order')
            ->join('pelanggan', 'pelanggan.id = sales_order.pelanggan_id')
            ->join('sales', 'sales.id = sales_order.sales_id')
            ->where('sales.user_id', $user_id)
            ->order_by('sales_order.id', 'DESC')
            ->get()
            ->result();
    }

    public function get_detail_order($id)
{
    return $this->db
        ->select('
            sales_order_detail.*,
            produk.kode_produk,
            produk.nama_produk
        ')
        ->from('sales_order_detail')
        ->join(
            'produk',
            'produk.id = sales_order_detail.produk_id'
        )
        ->where('order_id', $id)
        ->get()
        ->result();
}
}