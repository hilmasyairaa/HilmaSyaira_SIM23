<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('laporan_model');
    }

    public function index() {
    $data['produk'] = $this->laporan_model->get_produk();
    $data['sales'] = $this->laporan_model->get_sales();

    $this->load->view('templates/header');
    $this->load->view('laporan/form_laporan', $data);
    $this->load->view('templates/footer');
    }


    public function cetak_laporan() {
        // Ambil input dari form
        $tanggal_awal = $this->input->post('tanggal_dari');
        $tanggal_akhir = $this->input->post('tanggal_sampai');

        $produk_id = $this->input->post('produk_id');
        $sales_id = $this->input->post('sales_id');

        $data['laporan'] = $this->laporan_model->get_laporan($tanggal_awal, $tanggal_akhir, $produk_id, $sales_id);
        $data['tanggal_awal'] = $tanggal_awal;
        $data['tanggal_akhir'] = $tanggal_akhir;

        // Load view hasil laporan
        $this->load->view('templates/header');
        $this->load->view('laporan/hasil_laporan', $data);
        $this->load->view('templates/footer');
    }
}