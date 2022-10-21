<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_kontak extends CI_Model
{
    function getDatakontak()
    {
        $query = $this->db->get('kontak');
        return $query->result();
    }

    function insertDatakontak($data)
    {
        $this->db->insert('kontak', $data);
    }

    function getDatakontakDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('kontak');
        return $query->row();
    }

    function updateDatakontak($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('kontak', $data);
    }

    function hapusDatakontak($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kontak');
    }
}
