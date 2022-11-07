<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_blogfitur extends CI_Model
{
    function getDataFitur()
    {
        $query = $this->db->get('blog_fitur');
        return $query->result();
    }

    function insertDataFitur($data)
    {
        $this->db->insert('blog_fitur', $data);
    }

    function getDataFiturDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('blog_fitur');
        return $query->row();
    }

    function updateDataFitur($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('blog_fitur', $data);
    }

    function hapusDataFitur($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('blog_fitur');
    }
}
