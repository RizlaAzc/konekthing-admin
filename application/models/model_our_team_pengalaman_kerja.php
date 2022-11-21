<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_our_team_pengalaman_kerja extends CI_Model
{
    function getDatapengalaman_kerja_ourteam($id)
    {
        $this->db->where('id_our_team', $id);
        $query = $this->db->get('pengalaman_kerja_ourteam');
        return $query->result();
    }

    function insertDatapengalaman_kerja_ourteam($data)
    {
        $this->db->insert('pengalaman_kerja_ourteam', $data);
    }

    function getDatapengalaman_kerja_ourteamDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('pengalaman_kerja_ourteam');
        return $query->row();
    }

    function updateDatapengalaman_kerja_ourteam($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('pengalaman_kerja_ourteam', $data);
    }

    function pengalaman_kerja_ourteam($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pengalaman_kerja_ourteam');
    }
}
