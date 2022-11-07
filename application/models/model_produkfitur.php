<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_produkfitur extends CI_Model
{
    function getDataFitur($id)
    {
        $this->db->where('id_produk', $id);
        $query = $this->db->get('produk_fitur');
        return $query->result();
    }

    function insertDataFitur($data)
    {
        $this->db->insert('produk_fitur', $data);
    }

    function getDataFiturDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('produk_fitur');
        return $query->row();
    }

    function updateDataFitur($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('produk_fitur', $data);
    }

    function hapusDataFitur($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('produk_fitur');
    }
}
