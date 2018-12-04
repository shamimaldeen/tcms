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
		
        if(!$this->session->has_userdata('admin') && !$this->session->has_userdata('student') )
        {
        	$data['sites']  = $this->db->get('tbl_site')->result_object();
        	$this->db->where(array(
        		'page_type' => 'About Us',
        		'page_id'	 => 42
        		
        	));

        	$data['abouts']  = $this->db->get('tbl_page')->result_object();
        	$this->load->view('front/lib/header',$data);
        	$this->load->view('errors/front_error');
        	$this->load->view('front/lib/footer');


   		 }else if($this->session->has_userdata('admin'))
   		 {
   		 	 $this->session->set_flashdata('error', 'No Page Found');
			   redirect('dashboard');

   		 }else if($this->session->has_userdata('student'))
   		 {
   		 	$this->session->set_flashdata('error', 'No Page Found');
			 redirect('student/dashboard');
   		}
	}

}

	

