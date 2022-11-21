<?php

defined('BASEPATH') or exit('No direct script access allowed');

class model_our_partners extends CI_Model
{
    function getDataPartners()
    {
        $query = $this->db->get('our_partners');
        return $query->result();
    }

    function insertDataPartners($data)
    {
        $this->db->insert('our_partners', $data);
    }

    function getDataPartnersDetail($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get('our_partners');
        return $query->row();
    }

    function updateDataPartners($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('our_partners', $data);
    }

    function hapusDataPartners($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('our_partners');
    }
}
