<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    public function laporan_penjualan($tanggal_awal = null, $tanggal_akhir = null)
    {
        $this->db
            ->select('
                sales_order.*,
                pelanggan.nama_pelanggan,
                sales.nama_sales
            ')
            ->from('sales_order')
            ->join('pelanggan','pelanggan.id=sales_order.pelanggan_id')
            ->join('sales','sales.id=sales_order.sales_id');

        if($tanggal_awal && $tanggal_akhir)
        {
            $this->db->where(
                'tanggal_order >=',
                $tanggal_awal
            );

            $this->db->where(
                'tanggal_order <=',
                $tanggal_akhir
            );
        }

        return $this->db
            ->order_by('sales_order.id','DESC')
            ->get()
            ->result();
    }

    public function laporan_produk($produk_id = null)
    {
        $this->db
            ->select('
                produk.id,
                produk.kode_produk,
                produk.nama_produk,
                SUM(sales_order_detail.qty) as total_terjual
            ')
            ->from('sales_order_detail')
            ->join(
                'produk',
                'produk.id = sales_order_detail.produk_id'
            );

        if($produk_id)
        {
            $this->db->where(
                'produk.id',
                $produk_id
            );
        }

        return $this->db
            ->group_by('produk.id')
            ->get()
            ->result();
    }

    public function laporan_sales($sales_id = null)
    {
        $this->db
            ->select('
                sales.id,
                sales.nama_sales,
                COUNT(sales_order.id) as total_order,
                COALESCE(SUM(sales_order.total_harga),0) as total_penjualan
            ')
            ->from('sales')
            ->join(
                'sales_order',
                'sales_order.sales_id = sales.id',
                'left'
            );

        if($sales_id)
        {
            $this->db->where(
                'sales.id',
                $sales_id
            );
        }

        return $this->db
            ->group_by('sales.id')
            ->get()
            ->result();
    }
}