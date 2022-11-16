<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_master_kategori_produk extends CI_Model
{
    function getDatakategori_Produk()
    {
        $query = $this->db->get('master_kategori_produk');
        return $query->result();
    }

    function insertDatakategori_Produk($data)
    {
        $this->db->insert('master_kategori_produk', $data);
    }

    function getDatakategori_ProdukDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('master_kategori_produk');
        return $query->row();
    }

    function updateDatakategori_Produk($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('master_kategori_produk', $data);
    }

    function hapusDatakategori_Produk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('master_kategori_produk');
    }
}
