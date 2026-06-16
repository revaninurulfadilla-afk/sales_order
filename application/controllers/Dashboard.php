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

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);

        $this->load->view('dashboard/index', $data);

        $this->load->view('templates/footer');
    }
}