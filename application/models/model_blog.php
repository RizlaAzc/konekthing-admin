<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_blog extends CI_Model
{
    function getDataBlog()
    {
        $query = $this->db->get('blog');
        return $query->result();
    }

    function insertDataBlog($data)
    {
        $this->db->insert('blog', $data);
    }

    function getDataBlogDetail($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get('blog');
        return $query->row();
    }

    function updateDataBlog($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('blog', $data);
    }

    function hapusDataBlog($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('blog');
    }
}
