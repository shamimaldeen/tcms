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
   	public function handler()
	{

	  // echo "<pre>";
	  // print_r($_POST); die;
	  // echo "<pre>";
	  // print_r($_POST); die;

	  $data['report_name'] = $this->input->post('report_name');
	  $data['batch_id'] = $this->input->post('batch_id');
	  $data['course_id'] = $this->input->post('course_id');
	  $data['stu_id'] = $this->input->post('stu_id');
	  $data['acc_cat_id'] = $this->input->post('acc_cat_id');
	  $data['starting_date'] = $this->input->post('starting_date');
	  $data['ending_date'] = $this->input->post('ending_date');


	  if($data['report_name'] == "Students List (Batch)")
	  {
	  	redirect('student_list_batch/'.$data['batch_id'].'/'. $data['starting_date'].'/'.$data['ending_date']);
	  }else if($data['report_name'] == "Students List (Course)")
	  {
	  	redirect('student_list_course/'.$data['course_id'].'/'. $data['starting_date'].'/'.$data['ending_date']);
	  }else if($data['report_name'] == "Course List")
	  {
	  	redirect('course_list/'.$data['course_id']);
	  }else if($data['report_name'] == "New Application")
	  {
	  	redirect('new_application_list');
	  }


      
	}

	/*
	!----------------------------------------
	! student_list-batch View
	!----------------------------------------
	*/
   public function student_list_batch($batch_id,$starting_date,$ending_date)
	{

		$this->db->select('tbl_student.*');

		$this->db->join("tbl_student","tbl_student.stu_id =  tbl_courseapply.stu_id");
		//$this->db->join("tbl_course","tbl_course.course_id =  tbl_courseapply.course_id");
		$this->db->join("tbl_payment","tbl_payment.pay_id =  tbl_courseapply.pay_id");
		$this->db->join("tbl_batch","tbl_batch.batch_id =  tbl_courseapply.batch_id");
		$this->db->where(array(
			'tbl_courseapply.batch_id' => $batch_id,
			'tbl_payment.pay_date >='  => $starting_date,
			'tbl_payment.pay_date <='  => $ending_date
		));
		//$this->db->where('order_date >=', $first_date);
		//$this->db->where('order_date <=', $second_date);
	
		$data['applications'] = $this->db->get('tbl_courseapply')->result_object();
		$data['batch']  = $this->db->where('batch_id',$batch_id)->get('tbl_batch')->result_object();
		$data['starting_date'] = $starting_date;
		$data['ending_date']   = $ending_date;

		 //echo "<pre>";
	  // print_r($data['applications']); die;
		$this->load->view('back/reports/students_list_batch',$data);
  
	}

	/*
	!----------------------------------------
	! student_list_course View
	!----------------------------------------
	*/
  	public function student_list_course($course_id,$starting_date,$ending_date)
	{

	  
      $this->db->select('tbl_student.*');

		$this->db->join("tbl_student","tbl_student.stu_id =  tbl_courseapply.stu_id");
		$this->db->join("tbl_course","tbl_course.course_id =  tbl_courseapply.course_id");
		$this->db->join("tbl_payment","tbl_payment.pay_id =  tbl_courseapply.pay_id");
		$this->db->join("tbl_batch","tbl_batch.batch_id =  tbl_courseapply.batch_id");
		$this->db->where(array(
			'tbl_courseapply.course_id' => $course_id,
			//'tbl_courseapply.batch_id' => $batch_id,
			'tbl_payment.pay_date >='  => $starting_date,
			'tbl_payment.pay_date <='  => $ending_date
		));
		//$this->db->where('order_date >=', $first_date);
		//$this->db->where('order_date <=', $second_date);
	
		$data['applications'] = $this->db->get('tbl_courseapply')->result_object();
		$data['batch']  = $this->db->get('tbl_batch')->result_object();
		 $data['courses']  = $this->db->where('course_id',$course_id)->get('tbl_course')->result_object();
		$data['starting_date'] = $starting_date;
		$data['ending_date']   = $ending_date;

		 //echo "<pre>";
	  // print_r($data['applications']); die;
		$this->load->view('back/reports/students_list_course',$data);
      
	}

		/*
	!----------------------------------------
	! Course list_course View
	!----------------------------------------
	*/
  	public function course_list($course_id)
	{

	  
     $this->db->select('tbl_course.*');
	$data['courses']  = $this->db->get('tbl_course')->result_object();
	$this->load->view('back/reports/course_list',$data);
      
	}

		/*
	!----------------------------------------
	! new_application_list View
	!----------------------------------------
	*/
  	public function new_application_list()
	{

	  
       // $this->db->select('tbl_student.*');

		$this->db->join("tbl_student","tbl_student.stu_id =  tbl_courseapply.stu_id");
		$this->db->join("tbl_course","tbl_course.course_id =  tbl_courseapply.course_id");
		$this->db->join("tbl_payment","tbl_payment.pay_id =  tbl_courseapply.pay_id");
		//$this->db->join("tbl_batch","tbl_batch.batch_id =  tbl_courseapply.batch_id");
		$this->db->where(array(
			'tbl_payment.pay_status >='  => 'pending'
			
		));
		
		$data['applications'] = $this->db->get('tbl_courseapply')->result_object();
		$data['courses']  = $this->db->where('course_id',$course_id)->get('tbl_course')->result_object();
		

		 //echo "<pre>";
	  // print_r($data['applications']); die;
		$this->load->view('back/reports/students_list_course',$data);
      
	}


}

?>
