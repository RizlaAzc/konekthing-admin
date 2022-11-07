<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class model_visitor extends CI_Model {
    function getDatavisitor() {
        $query = $this->db->get('visitor');
        return $query->result();
    }

    function insertDatavisitor($data) {
        $this->db->insert('visitor', $data);
    }

    function getDatavisitorDetail($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('visitor');
        return $query->row();
    }

    function updateDatavisitor($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('visitor', $data);
    }

    function hapusDatavisitor($id) {
        $this->db->where('id', $id);
        $this->db->delete('visitor');
    }
}





 