<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_beranda extends CI_Model
{
    function getDataBeranda()
    {
        $query = $this->db->get('beranda');
        return $query->result();
    }

    function insertDataBeranda($data)
    {
        $this->db->insert('beranda', $data);
    }

    function getDataBerandaDetail($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get('beranda');
        return $query->row();
    }

    function updateDataBeranda($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('beranda', $data);
    }

    function hapusDataBeranda($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('beranda');
    }
}
