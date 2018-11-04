<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
		if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }
	
	}

	 /*
	!----------------------------------------
	! report View
	!----------------------------------------
	*/

	public function report()
	{
	   $data['batchs']  = $this->db->get('tbl_batch')->result_object();
	    $data['courses']  = $this->db->get('tbl_course')->result_object();
	    $data['categories'] = $this->db->get('tbl_account_category')->result_object();

	   $this->load->view('back/lib/header');
       $this->load->view('back/report',$data);
       $this->load->view('back/lib/footer');
	}

	/*
	!----------------------------------------
	! student_list-batch View
	!----------------------------------------
	*/
  public function student_list_batch()
	{

	  
       $this->load->view('back/student_list_batch');
      
	}
		/*
	!----------------------------------------
	! student_list_course View
	!----------------------------------------
	*/
  public function student_list_course()
	{

	  
       $this->load->view('back/student_list_course');
      
	}








}

?>
