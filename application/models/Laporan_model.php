<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

    public function get_laporan($tanggal_awal, $tanggal_akhir, $idproduk = null, $idsales = null) {
        $this->db->select('
            so.tanggal, 
            so.kode_so,
            s.nama_sales, 
            p.nama_produk, 
            dso.jumlah, 
            dso.subtotal, 
            pl.nama AS nama_pelanggan
        ');
        $this->db->from('salesorder so');
        $this->db->join('detail_so dso', 'so.idso = dso.idso');
        $this->db->join('produk p', 'dso.idproduk = p.idproduk');
        $this->db->join('sales s', 'so.idsales = s.idsales');
        $this->db->join('pelanggan pl', 'so.idpelanggan = pl.idpelanggan');
        $this->db->where('so.tanggal >=', $tanggal_awal);
        $this->db->where('so.tanggal <=', $tanggal_akhir);

        if (!empty($idproduk)) {
            $this->db->where('p.idproduk', $idproduk);
        }

        if (!empty($idsales)) {
            $this->db->where('s.idsales', $idsales);
        }

        return $this->db->get()->result();
    }

    public function get_produk() {
        return $this->db->get('produk')->result();
    }

    public function get_sales() {
        return $this->db->get('sales')->result();
    }
}
