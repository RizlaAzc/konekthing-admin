<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class forms extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

	}

	public function index ()
	{
		// $this->form_validation->set_rules('email', 'email',' trim|required|valid_email');
		// $this->form_validation->set_rules('password', 'password',' trim|required|');


		// if ($this->form_validation->run() == false) {
		
	    $title['title'] = 'forms login - Konekthing Admin';
        $this->load->view('header-forms', $title);
        $this->load->view('admin/forms/login');
		$this->load->view('footer-forms');

		// } else {
		// 	echo "a";
		// 	die;
		// 	// jika validasi nya sukses
		// 	$this->_login();
		// }
}

	   public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('login', ['email' => $email])->row_array();
		
		// jika usernya ada
		 if ($user) {

		 // jika usernya aktif
         if ($user ['is_active'] == 1) {

	   // cek password nya
	     if (password_verify($password, $user['password'])) {
	     	$data = [	

              'email' => $user ['email'],
              'role_id' => $user ['role_id']

	     	];
	     	$this->session->set_userdata($data);
	     	redirect('dashboard');

	     } else {

	    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">wrong password!</div>');
            redirect('forms');
        }

    	} else {

    	$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">this email has not been activated!</div>');
            redirect('forms');
        }

        } else {

		$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">email is not registered!</div>');
            redirect('forms');

		}
	}


	public function register ()
	{
		$this->form_validation->set_rules('nama', 'nama','required|trim');
		$this->form_validation->set_rules('email', 'email','required|trim|valid_email|is_unique[login.email]', [
             'is_unique' => 'this email has already registered!'
		]);
		
		$this->form_validation->set_rules('password1', 'password','required|trim|min_length[3]|matches[password2]', 
		[
		     'matches' => 'password dont match!',
             'min_length' => 'password to short!' 
		]);

          $this->form_validation->set_rules('password2', 'password','required|trim|matches[password1]');

		if ( $this->form_validation->run() == false) {
	    $title['title'] = 'forms register - Konekthing Admin';
        $this->load->view('header-forms', $title);
		$this->load->view('admin/forms/register');
		$this->load->view('footer-forms');

	} else {

		$data = [
			'nama' => htmlspecialchars ($this->input->post('nama', true)),
			'email' => htmlspecialchars ($this->input->post('email', true)),
			'image' =>'default.jpg',
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'role_id' => 2,
			'is_active' => 1,
			'date_created' => time()
        ];

        $this->db->insert('login', $data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">congratulation! your account has been created. please login!</div>');
        redirect('forms');
          
     }
 }

       public function logout() 
       {
       	// $this->session->unset_unserdata('email');
       	// $this->session->unset_unserdata('role_id');

       	$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">you have been logged out</div>');
        redirect('forms');
       }

  //      public function forgotpassword ()
  //      {

  //       $this->form_validation->set_rules('email', 'email', 'trim|required', 'valid_email');
  //      	if($this->form_validation->run() == false) {

  //      	$title['title'] = 'forgotpassword - Konekthing Admin';
  //       $this->load->view('header-forms', $title);
  //       $this->load->view('admin/forms/forgotpassword');
		// $this->load->view('footer-forms');

	 //  } else {

        // $email = $this->input->post('email');
        // $user = $this->db->get_where('login', ['email' => $email, 'is_active' => 1])-> row_array();

        //  if($user) { 

        // 	$token = base64_encode (random_bytes(32));
        // 	$user_token = [
        // 		'email' => $email,
        // 		'token' => $token,
        // 		'date_created' => $time()
        // 	];

        // $this->db->insert('user_token', $user_token);
        // $this->sendemail($token, 'forgot');

        // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">please check your email to reset your password!</div>');
        // 	redirect ('forms/forgotpassword');

        // } else {

        // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">email is not registered or activited!</div>');
        // 	redirect ('forms/forgotpassword');


  //       }
  //    } 
  // }



  public function resetpassword()
  {
  	 $email->$this->input->get('email');
     $token->$this->input->get('token');

    $user = $this->user->get_where('user', ['email' => $email]) -> row_array();

    if ($user) {
    	$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

    if ($user_token) {
    	$this->session->userdata('reset_email', $email);
    	$this->changepassword();

    } else {

    	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">reset password failed! wrong token.</div>');
        	redirect ('forms');
     }

    } else {
    	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">reset password failed! wrong email.</div>');
        	redirect ('forms');
  }

}


public function changepassword() 
{

if (!$this->session->userdata('reset_email')) {
	redirect ('forms');
}

	$this->form_validation->set_rules('password1', 'password', 'trim|required|min_length[3]matches[password2]');
	$this->form_validation->set_rules('password2', 'repeat password', 'trim|required|min_length[3]matches[password1]');

	    if ($this->form_validation->run() == false) {
	    $title['title'] = 'changepassword - Konekthing Admin';
        $this->load->view('header-forms', $title);
        $this->load->view('admin/forms/changepassword');
		$this->load->view('footer-forms');

} else {
	$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
	$email = $this->session->userdata('reset_email');

	$this->db->set('password', $password);
	$this->db->where('email', $email);
	$this->db->update('user');

	$this->session->unset_unserdata('reset_email'); 

	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">password has been changed 
		! please login.</div>');
        	redirect ('forms/login');

}

}

}



        // } else if($type == 'forgot') {

        // $this->email->subject('reset password');
        // $this->email->message('click this link to reset your password : <a href="' . base_url() . 'forms/reset password?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">reset password</a>');
        // }
		