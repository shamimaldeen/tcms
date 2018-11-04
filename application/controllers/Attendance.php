<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
		if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }
	
	}

	/*
	!----------------------------------------
	! save account View
	!----------------------------------------
	*/
	
	public function select_batch()
	{ 
        $data['batch_id'] = $this->input->post('batch_id');
        $this->db->select('tbl_student.*,tbl_batch.batch_title,tbl_batch.batch_id');

		$this->db->join("tbl_student","tbl_student.stu_id =  tbl_courseapply.stu_id");
		$this->db->join("tbl_batch","tbl_batch.batch_id =  tbl_courseapply.batch_id");
		$this->db->where(array(
			
			
			'tbl_batch.batch_id'=> $data['batch_id'] 
			
		));
	
		$data['students'] = $this->db->get('tbl_courseapply')->result_object();
		//echo "<pre>";
		//print_r($data['students'] );die;
		redirect('attendance_entry');
	}

	/*
	!----------------------------------------
	!	Account Llist
	!----------------------------------------
	*/
	
	public function attendance_search()
	{  
       
       $data['batchs']  = $this->db->get('tbl_batch')->result_object();
      
       $this->load->view('back/lib/header');
      $this->load->view('back/attendance_search',$data);
       $this->load->view('back/lib/footer');
   
	}

	/*
	!----------------------------------------
	!	attendance_entry Llist
	!----------------------------------------
	*/
	
	public function attendance_entry()
	{  
       
     $data['students'] = $this->db->get('tbl_courseapply')->result_object();
      
       $this->load->view('back/lib/header');
      $this->load->view('back/attendance_entry',$data);
       $this->load->view('back/lib/footer');
   
	}


   





}

?>
