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
}