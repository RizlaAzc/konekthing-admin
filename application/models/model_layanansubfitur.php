<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_layanansubfitur extends CI_Model
{
    function getDataSubFitur($id)
    {
        $this->db->where('id_fitur', $id);
        $query = $this->db->get('layanan_subfitur');
        return $query->result();
    }

    function insertDataSubFitur($data)
    {
        $this->db->insert('layanan_subfitur', $data);
    }

    function getDataSubFiturDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('layanan_subfitur');
        return $query->row();
    }

    function updateDataSubFitur($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('layanan_subfitur', $data);
    }

    function hapusDataSubFitur($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('layanan_subfitur');
    }
}
