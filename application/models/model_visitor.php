<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class model_visitor extends CI_Model {

    function getDatavisitor() {
        
        $query = $this->db->get('visitor');
        return $query->result();
    }
}


    







 