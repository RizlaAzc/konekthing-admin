<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_our_team extends CI_Model
{
    function getData_our_team()
    {
        $query = $this->db->get('our_team');
        return $query->result();
    }

    function insertData_our_team($data)
    {
        $this->db->insert('our_team', $data);
    }

    function getData_our_teamDetail($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get('our_team');
        return $query->row();
    }

    function updateData_our_team($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('our_team', $data);
    }

    function hapusData_our_team($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('our_team');
    }
}
