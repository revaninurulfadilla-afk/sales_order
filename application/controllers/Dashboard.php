<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Dashboard_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        $data['total_produk']    = $this->Dashboard_model->total_produk();
        $data['total_pelanggan'] = $this->Dashboard_model->total_pelanggan();
        $data['total_sales']     = $this->Dashboard_model->total_sales();
        $data['total_order']     = $this->Dashboard_model->total_order();

        $data['order_terbaru']   = $this->Dashboard_model->order_terbaru();

        $tanggal_awal = $this->input->get('tanggal_awal');
        $tanggal_akhir = $this->input->get('tanggal_akhir');

        if(!$tanggal_awal)
        {
            $tanggal_awal = date('Y-m-01');
        }

        if(!$tanggal_akhir)
        {
            $tanggal_akhir = date('Y-m-t');
        }

        $data['tanggal_awal']  = $tanggal_awal;
        $data['tanggal_akhir'] = $tanggal_akhir;

        $grafik = $this->Dashboard_model
        ->grafik_order_periode(
            $tanggal_awal,
            $tanggal_akhir
        );

        $chart_label = [];
        $chart_data  = [];

        foreach($grafik as $g)
        {
            $chart_label[] = date(
                'd M',
                strtotime($g->tanggal)
            );

            $chart_data[] = $g->total_order;
        }

        $data['chart_label'] = $chart_label;
        $data['chart_data']  = $chart_data;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);

        $this->load->view('dashboard/index', $data);

        $this->load->view('templates/footer');
    }
}