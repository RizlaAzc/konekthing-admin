<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_kategori_produk extends CI_Model
{
    function getDataKategori()
    {
        $query = $this->db->get('kategori_produk');
        return $query->result();
    }

    function insertDataKategori($data)
    {
        $this->db->insert('kategori_produk', $data);
    }

    function getDataKategoriDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('kategori_produk');
        return $query->row();
    }

    function updateDataKategori($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('kategori_produk', $data);
    }

    function hapusDatakategori($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kategori_produk');
    }
}
