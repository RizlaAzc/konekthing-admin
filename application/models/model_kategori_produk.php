<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_kategori_produk extends CI_Model
{
    function getDatakategori_Produk()
    {
        $query = $this->db->get('kategori_produk');
        return $query->result();
    }

    function insertDatakategori_Produk($data)
    {
        $this->db->insert('kategori_produk', $data);
    }

    function getDatakategori_ProdukDetail($id)
    {
        $this->db->where('id_produk', $id);
        $query = $this->db->get('kategori_produk');
        return $query->result();
    }

    function updateDatakategori_Produk($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('kategori_produk', $data);
    }

    function hapusDatakategori_Produk($id)
    {
        $this->db->where('id_produk', $id);
        $query = $this->db->delete('kategori_produk');
        return $query;
    }
}
