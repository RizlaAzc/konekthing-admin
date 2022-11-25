<?php

defined('BASEPATH') or exit('No direct script access allowed');

class model_message extends CI_Model
{
    function getDatamessage()
    {
        $query = $this->db->get('message');
        return $query->result();
    }

    function getDatamessageDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('message');
        return $query->row();
    }

    function hapusDatamessage($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('message');
    }
}
