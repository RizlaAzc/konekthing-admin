<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_our_team_fitur extends CI_Model
{
    function getDataFitur($id)
    {
        $this->db->where('id_our_team' , $id);
        $query = $this->db->get('our_team_biodata_fitur');
        return $query->result();
    }

    function insertDataFitur($data)
    {
        $this->db->insert('our_team_biodata_fitur', $data);
    }

    function getDataFiturDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('our_team_biodata_fitur');
        return $query->row();
    }

    function updateDataFitur($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('our_team_biodata_fitur', $data);
    }

    function hapusDataour_teamFitur($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('our_team_biodata_fitur');
    }
}

