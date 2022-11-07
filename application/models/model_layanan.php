<?php

defined('BASEPATH') or exit('No direct script access allowed');

class model_layanan extends CI_Model
{
    function getDataLayanan()
    {
        $query = $this->db->get('layanan');
        return $query->result();
    }

    function insertDataLayanan($data)
    {
        $this->db->insert('layanan', $data);
    }

    function getDataLayananDetail($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get('layanan');
        return $query->row();
    }

    function updateDataLayanan($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('layanan', $data);
    }

    function hapusDataLayanan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('layanan');
    }
}
