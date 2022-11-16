<?php

defined('BASEPATH') or exit('No direct script access allowed');
class model_master_kategori_portofolio extends CI_Model
{
    function getDatakategori_portofolio()
    {
        $query = $this->db->get('master_kategori_portofolio');
        return $query->result();
    }

    function insertDatakategori_portofolio($data)
    {
        $this->db->insert('master_kategori_portofolio', $data);
    }

    function getDatakategori_PortofolioDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('master_kategori_portofolio');
        return $query->row();
    }

    function updateDatakategori_Portofolio($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('master_kategori_portofolio', $data);
    }

    function hapusDatakategori_Portofolio($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('master_kategori_portofolio');
    }
}
