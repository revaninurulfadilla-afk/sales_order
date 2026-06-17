<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Laporan_model');
    }

    public function penjualan()
    {
        $data['title'] = 'Laporan Penjualan';

        $tanggal_awal  = $this->input->get('tanggal_awal');
        $tanggal_akhir = $this->input->get('tanggal_akhir');

        $data['laporan'] = $this->Laporan_model
            ->laporan_penjualan(
                $tanggal_awal,
                $tanggal_akhir
            );

        $data['grand_total'] = 0;

        foreach($data['laporan'] as $row)
        {
            $data['grand_total'] += $row->total_harga;
        }

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/penjualan',$data);
        $this->load->view('templates/footer');
    }

    public function produk()
    {
        $data['title'] = 'Laporan Produk';

        $produk_id = $this->input->get('produk_id');

        $data['produk_list'] = $this->db
            ->get('produk')
            ->result();

        $data['laporan'] = $this->Laporan_model
            ->laporan_produk($produk_id);

        $data['grand_total'] = 0;

        foreach($data['laporan'] as $row)
        {
            $data['grand_total'] += $row->total_terjual;
        }

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/produk',$data);
        $this->load->view('templates/footer');
    }

    public function sales()
    {
        $data['title'] = 'Laporan Sales';

        $sales_id = $this->input->get('sales_id');

        $data['sales_list'] = $this->db
            ->get('sales')
            ->result();

        $data['laporan'] = $this->Laporan_model
            ->laporan_sales($sales_id);

        $data['grand_order'] = 0;
        $data['grand_penjualan'] = 0;

        foreach($data['laporan'] as $row)
        {
            $data['grand_order'] += $row->total_order;
            $data['grand_penjualan'] += $row->total_penjualan;
        }

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/sales',$data);
        $this->load->view('templates/footer');
    }
    public function cetak_penjualan()
    {
        $tanggal_awal  = $this->input->get('tanggal_awal');
        $tanggal_akhir = $this->input->get('tanggal_akhir');

        $data['data'] = $this->Laporan_model
            ->laporan_penjualan(
                $tanggal_awal,
                $tanggal_akhir
            );

        $data['tanggal_awal']  = $tanggal_awal;
        $data['tanggal_akhir'] = $tanggal_akhir;

        $this->load->view('laporan/cetak_penjualan', $data);
    }
    public function cetak_produk()
    {
        $produk_id = $this->input->get('produk_id');

        $data['data'] = $this->Laporan_model
            ->laporan_produk($produk_id);

        $data['produk'] = null;

        if($produk_id)
        {
            $data['produk'] = $this->db
                ->get_where('produk',[
                    'id'=>$produk_id
                ])
                ->row();
        }

        $this->load->view(
            'laporan/cetak_produk',
            $data
        );
    }
    public function cetak_sales()
    {
        $sales_id = $this->input->get('sales_id');

        $data['data'] = $this->Laporan_model
            ->laporan_sales($sales_id);

        $this->load->view(
            'laporan/cetak_sales',
            $data
        );
    }
}
