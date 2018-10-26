<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
		$this->load->model('loginmodel');
		date_default_timezone_set('Asia/Dhaka');
	}

	/*
	!--------------------------------------------
	! 		Login 
	!--------------------------------------------
	*/ 
	public function index()
	{
		//if ($this->session->has_userdata('login')) {
           // redirect('dashboard'); //redirect to dashbaord
       // }

		$this->load->view('back/login');
		$this->load->view('back/lib/footer');
		
	}

	/*
	!--------------------------------------------
	! 		Home
	!--------------------------------------------
	*/ 
	public function dashboard()
	{
		if (!$this->session->has_userdata('login')) {
            redirect('login');
        }
		$this->load->view('lib/header');
		$this->load->view('index');
		$this->load->view('lib/footer');
		
	}


	/*
	!--------------------------------------------
	! 		Login Handeller
	!--------------------------------------------
	*/ 
	public function login()
	{
		// echo "<pre>";
		// print_r($_POST); die;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->loginmodel->login($username, $password);
		$row = $status->result_id->num_rows;
		if ($row > 0) 
		{
			$data = $status->result_object();

			$this->session->set_userdata(array(
				'login' 		 => true,
				'id' 			 => $data[0]->admin_id,
				'admin_username' => $data[0]->admin_username,
				'admin_email'	 => $data[0]->admin_email,
				'admin_role'     => $data[0]->admin_roll
			));
			$this->session->set_flashdata('success', 'Successfully Logged in');
			redirect('dashboard');
			
		}else{
			$this->session->set_flashdata('error', 'Username or Password Not Matched');
           	redirect('login');
		}

	}

}
