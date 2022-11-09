<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_produksubfitur extends CI_Model
{
    function getDataSubFitur($id)
    {
        $this->db->where('id_fitur', $id);
        $query = $this->db->get('produk_subfitur');
        return $query->result();
    }

    function insertDataSubFitur($data)
    {
        $this->db->insert('produk_subfitur', $data);
    }

    function getDataSubFiturDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('produk_subfitur');
        return $query->row();
    }

    function updateDataSubFitur($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('produk_subfitur', $data);
    }

    function hapusDataSubFitur($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('produk_subfitur');
    }
}
