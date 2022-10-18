<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class model_produk extends CI_Model {
    function getDataProduk() {
        $query = $this->db->get('produk');
        return $query->result();
    }

    function insertDataProduk($data) {
        $this->db->insert('produk', $data);
    }

    function getDataProdukDetail($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('produk');
        return $query->row();
    }

    function updateDataProduk($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('produk', $data);
    }

    function hapusDataProduk($id) {
        $this->db->where('id', $id);
        $this->db->delete('produk');
    }
}
