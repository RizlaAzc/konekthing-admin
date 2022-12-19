<?php

defined('BASEPATH') or exit('No direct script access allowed');

class model_dashboard extends CI_Model
{
    function getChartPengunjung()
    {
        $this->db->select('date_format(date, "%d-%m-%Y") as date_visitor, count(id) as t_visitor');
        $this->db->group_by('date_format(date, "%d-%m-%Y")');
        $this->db->order_by('date');

        $query = $this->db->get('visitor')->result();
        $values = [];
        $dates = [];

        foreach ($query as $index => $item) {
            $values[$index] = $item->t_visitor;
            $dates[$index] = $item->date_visitor;
        }

        $data['data_values'] = $values;
        $data['date_visitor'] = $dates;
        return $data;
    }

    function getChartPengunjungfiltered($date_start, $date_end)
    {
        $this->db->where("date BETWEEN '$date_start' AND '$date_end'");
        $this->db->select('date_format(date, "%d-%m-%Y") as date_visitor, count(id) as t_visitor');
        $this->db->group_by('date_format(date, "%d-%m-%Y")');
        $this->db->order_by('date');

        $query = $this->db->get('visitor')->result();
        $values = [];
        $dates = [];

        foreach ($query as $index => $item) {
            $values[$index] = $item->t_visitor;
            $dates[$index] = $item->date_visitor;
        }

        $data['data_values'] = $values;
        $data['date_visitor'] = $dates;
        return $data;
    }
}
