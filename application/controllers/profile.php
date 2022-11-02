<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller 
{

	public function index()
	{
		$title['title'] = 'my profile';
		$title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('header_profile', $title);
		$this->load->view('admin/profile/my_profile');
		$this->load->view('footer_profile');
	}
}