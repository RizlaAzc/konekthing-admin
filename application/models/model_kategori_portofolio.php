<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_kategori_portofolio extends CI_Model
{
    function getDatakategori_portofolio()
    {
        $query = $this->db->get('kategori_portofolio');
        return $query->result();
    }

    function insertDatakategori_portofolio($data)
    {
        $this->db->insert('kategori_portofolio', $data);
    }

    function getDatakategori_PortofolioDetail($id)
    {
        $this->db->where('id_portofolio', $id);
        $query = $this->db->get('kategori_portofolio');
        return $query->result();
    }

    function updateDatakategori_Portofolio($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('kategori_portofolio', $data);
    }

    function hapusDatakategori_Portofolio($id)
    {
        $this->db->where('id_portofolio', $id);
        $query = $this->db->delete('kategori_portofolio');
        return $query;
    }
}
