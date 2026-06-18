<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public function total_produk()
    {
        return $this->db->count_all('produk');
    }

    public function total_pelanggan()
    {
        return $this->db->count_all('pelanggan');
    }

    public function total_sales()
    {
        return $this->db->count_all('sales');
    }

    public function total_order()
    {
        return $this->db->count_all('sales_order');
    }
    public function order_terbaru()
{
    return $this->db
        ->select('
            sales_order.*,
            pelanggan.nama_pelanggan,
            sales.nama_sales,
            produk.nama_produk,
            produk.foto_produk
        ')
        ->from('sales_order')
        ->join(
            'pelanggan',
            'pelanggan.id = sales_order.pelanggan_id'
        )
        ->join(
            'sales',
            'sales.id = sales_order.sales_id'
        )
        ->join(
            'sales_order_detail',
            'sales_order_detail.order_id = sales_order.id'
        )
        ->join(
            'produk',
            'produk.id = sales_order_detail.produk_id'
        )
        ->order_by('sales_order.id', 'DESC')
        ->limit(5)
        ->get()
        ->result();
}
    public function grafik_order_periode(
    $tanggal_awal,
    $tanggal_akhir
    )
    {
        return $this->db
            ->select("
                DATE(tanggal_order) as tanggal,
                COUNT(id) as total_order
            ")
            ->from('sales_order')
            ->where('tanggal_order >=', $tanggal_awal)
            ->where('tanggal_order <=', $tanggal_akhir)
            ->group_by('DATE(tanggal_order)')
            ->order_by('tanggal_order')
            ->get()
            ->result();
    }
}