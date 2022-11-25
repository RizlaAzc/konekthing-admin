<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_sosial_media extends CI_Model
{
    function getDatasosial_media()
    {
        $query = $this->db->get('sosial_media');
        return $query->result();
    }

    function insertDatasosial_media($data)
    {
        $this->db->insert('sosial_media', $data);
    }

    function getDatasosial_mediaDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('sosial_media');
        return $query->row();
    }

    function updateDatasosial_media($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('sosial_media', $data);
    }

    function hapusDatasosial_media($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('sosial_media');
    }
}
