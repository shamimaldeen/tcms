<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studentcourse extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
		if (!$this->session->has_userdata('student')) {
            redirect('admin');
        }
	
	}

		/*
	!----------------------------------------
	!	student apply Course list about
	!----------------------------------------
	*/
	
	public function applycourse_list()
	{  
       
      
      $data['courses']  = $this->db->get('tbl_course')->result_object();
      
       $this->load->view('student/lib/header');
       $this->load->view('student/applycourse_list',$data);
       $this->load->view('student/lib/footer');
   
	}
	

		/*
	!----------------------------------------
	!	student apply Course Details about
	!----------------------------------------
	*/
	
	public function applycourse_details($course_id)
	{  
       
      $this->db->where('course_id',$course_id);
      $data['courses']  = $this->db->get('tbl_course')->result_object();
      
       $this->load->view('student/lib/header');
       $this->load->view('student/applycourse_details',$data);
       $this->load->view('student/lib/footer');
   
	}

	
	/*
	!----------------------------------------
	!	 student applycourse Details about
	!----------------------------------------
	*/
	
	public function applycourse()
	{  
         $data['course_id'] = $this->input->post('course_id');
      
     // $data['courses']  = $this->db->get('tbl_course')->result_object();
       $this->load->view('student/lib/header');
       $this->load->view('student/applycourse',$data);
       $this->load->view('student/lib/footer');
   
     
	}

	/*
	!----------------------------------------
	!	Save Course
	!----------------------------------------
	*/
	public function save_course()
	{  
		$data['pay_paidamount'] = $this->input->post('pay_paidamount');
		$data['pay_method'] = $this->input->post('pay_method');
		$data['pay_tra_id'] = $this->input->post('pay_tra_id');
		$data['stu_id'] = $this->session->stu_id;
		$data['pay_date'] = date("Y-m-d");
		
	   
		
		
		$this->db->insert('tbl_payment',$data);
		$paystatus =$this->db->order_by('pay_id','desc')->limit(1)->get("tbl_payment")->result_object();
		$pay_id = $paystatus[0]->pay_id;


		$allcourse_apply= array(
			'stu_id'=> $this->session->stu_id,
            'course_id'=> $this->input->post('course_id'),
            'pay_id'=> $pay_id 
          
		);

		//echo "<pre>";
		//print_r($allcourse_apply); die;
		$this->db->insert('tbl_courseapply',$allcourse_apply);

		$this->session->set_flashdata('success', ' Payment Data Added Successfully.');
		redirect('student/dashboard');
	}


	/*
	!----------------------------------------
	!	payment about
	!----------------------------------------
	*/


	     public function payment()
	{  
       
      
      $data['payments']  = $this->db->get('tbl_payment')->result_object();
      
       $this->load->view('student/lib/header');
       $this->load->view('student/applycoure',$data);
       $this->load->view('student/lib/footer');
   
	}




}

?>
