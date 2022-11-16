<?php

defined('BASEPATH') or exit('No direct script access allowed');

class profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function my_profile()
	{
		$title['title'] = 'My Profile - Konekthing Admin';
		$title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('header_profile', $title);
		$this->load->view('admin/profile/my_profile');
		$this->load->view('footer_profile');
	}

	public function edit_profile()
	{
		$title['title'] = 'Edit Profile - Konekthing Admin';
		$title['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('header_profile', $title);
		$this->load->view('admin/profile/edit_profile');
		$this->load->view('footer_profile');
	}

	public function proses_edit()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');

		// cek kjika ada gambar yang ingin di upload
		$upload_image = $_FILES['gambar'];

		if ($upload_image) {
			$config['upload_path'] = './assets/img/profile/';
			$config['allowed_types'] = 'jpg|png|gif|jpeg|svg';
			$this->load->library('upload');
			$this->upload->initialize($config);

			if ($this->upload->do_upload('gambar')) {

				$new_image = $this->upload->data('file_name');

				$this->db->set('image', $new_image);
			} else {
				echo $this->upload->display_errors();
				die;
			}
		}

		$this->db->set('nama', $name);
		$this->db->where('email', $email);
		$this->db->update('login');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">your profile has been updated!</div>');
		redirect('profile/my_profile');
	}
}
