<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class model_Portofolio extends CI_Model {
    function getDataportofolio() {
        $query = $this->db->get('portofolio');
        return $query->result();
    }

    function insertDataportofolio($data) {
        $this->db->insert('portofolio', $data);
    }

    function getDataPortofolioDetail($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('portofolio');
        return $query->row();
    }

    function updateDataPortofolio($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('portofolio', $data);
    }

    function hapusDataPortofolio($id) {
        $this->db->where('id', $id);
        $this->db->delete('portofolio');
    }
}

?>