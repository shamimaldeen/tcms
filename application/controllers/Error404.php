<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {

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
		if (!$this->session->has_userdata('admin')) {
            redirect('dashboard'); //redirect to dashbaord
        }
        $this->load->view('back/lib/header');
		$this->load->view('back/error404');
		$this->load->view('back/lib/footer');
		
	}

}
