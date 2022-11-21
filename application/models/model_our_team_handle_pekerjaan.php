<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_our_team_handle_pekerjaan extends CI_Model
{
    function getData_handle_pekerjaan($id)
    {
        $this->db->where('id_our_team', $id);
        $query = $this->db->get('handle_pekerjaan_ourteam');
        return $query->result();
    }

    function insertData_handle_pekerjaan($data)
    {
        $this->db->insert('handle_pekerjaan_ourteam', $data);
    }

    function getData_handle_pekerjaanDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('handle_pekerjaan_ourteam');
        return $query->row();
    }

    function updateData_handle_pekerjaan($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('handle_pekerjaan_ourteam', $data);
    }

    function hapusData_handle_pekerjaan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('handle_pekerjaan_ourteam');
    }
}
