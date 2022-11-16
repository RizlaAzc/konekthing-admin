<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_ourteam_subfitur extends CI_Model
{
    function getDataSubFitur($id)
    {
        $this->db->where('id_fitur', $id);
        $query = $this->db->get('our_team_subfitur');
        return $query->result();
    }

    function insertDataSubFitur($data)
    {
        $this->db->insert('our_team_subfitur', $data);
    }

    function getDataSubFiturDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('our_team_subfitur');
        return $query->row();
    }

    function updateDataSubFitur($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('our_team_subfitur', $data);
    }

    function hapusDataSubFitur($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('our_team_subfitur');
    }
}
