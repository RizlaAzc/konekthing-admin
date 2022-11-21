<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_our_team_riwayat_pendidikan extends CI_Model
{
    function getDatariwayat_pendidikan_ourteam($id)
    {
        $this->db->where('id_our_team' , $id);
        $query = $this->db->get('riwayat_pendidikan_our_team');
        return $query->result();
    }

    function insertData_riwayat_pendidikan_ourteam($data)
    {
        $this->db->insert('riwayat_pendidikan_our_team', $data);
    }

    function getDatariwayat_pendidikan_ourteamDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('riwayat_pendidikan_our_team');
        return $query->row();
    }

    function updateDatariwayat_pendidikan_ourteam($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('riwayat_pendidikan_our_team', $data);
    }

    function hapusDataour_teamriwayat_pendidikan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('riwayat_pendidikan_our_team');
    }
}

