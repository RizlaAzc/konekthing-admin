<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_layananfitur extends CI_Model
{
    function getDataFitur($id)
    {
        $this->db->where('id_layanan', $id);
        $query = $this->db->get('layanan_fitur');
        return $query->result();
    }

    function insertDataFitur($data)
    {
        $this->db->insert('layanan_fitur', $data);
    }

    function getDataFiturDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('layanan_fitur');
        return $query->row();
    }

    function updateDataFitur($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('layanan_fitur', $data);
    }

    function hapusDataFitur($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('layanan_fitur');
    }
}
