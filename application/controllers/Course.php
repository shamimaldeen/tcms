<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
		if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }
	
	}
	/*
	!----------------------------------------
	! ADD account View
	!----------------------------------------
	*/
	public function add_course()
	{
        
	   $this->load->view('back/lib/header');
       $this->load->view('back/add_course');
       $this->load->view('back/lib/footer');
	}

	
	/*
	!----------------------------------------
	! save account View
	!----------------------------------------
	*/
	
	public function save_course()
	{ 
        $data['course_status'] = $this->input->post('course_status');
        $data['course_title'] = $this->input->post('course_title');
		$data['course_duration'] = $this->input->post('course_duration');
		$data['course_fee'] = $this->input->post('course_fee');
		
		$data['course_details'] = $this->input->post('course_details');
		
		$this->db->insert('tbl_course',$data);
			$this->session->set_flashdata('success', 'Course Data Added Successfully.');
		redirect('course_list');
	}
		/*
	!----------------------------------------
	!	Course Llist
	!----------------------------------------
	*/
	
	public function course_list()
	{  
       
      
      $data['courses']  = $this->db->get('tbl_course')->result_object();
      
       $this->load->view('back/lib/header');
       $this->load->view('back/course_list',$data);
       $this->load->view('back/lib/footer');
   
	}
	/*
	!--------------------------------------------
	! 		Edit course
	!--------------------------------------------
	*/ 
    public function edit_course($course_id)
    {

     $data= array();
     $data['all_edit_course'] = $this->coursemodel->all_edit_course($course_id);
     //echo "<pre>";
     //print_r($data['all_edit_course']); die;

     $this->load->view('back/lib/header');
	 $this->load->view('back/edit_course',$data);
	 $this->load->view('back/lib/footer');

    }
    /*
	!--------------------------------------------
	! 		update Course
	!--------------------------------------------
	*/ 


    public function update_course($course_id)
    {

    	$course_title = $this->input->post('course_title'); 
    	$course_duration = $this->input->post('course_duration'); 
    	$course_fee = $this->input->post('course_fee'); 
    	$course_details = $this->input->post('course_details'); 
    	$course_status = $this->input->post('course_status'); 

	    $this->coursemodel->all_update_course();
	    	$this->db->set(array(
			'course_title'=>$course_title,
            'course_duration'=>$course_duration,
            'course_fee'=>$course_fee,
            'course_details'=>$course_details,
            'course_status'=>$course_status,
			));
			$this->db->where(array('course_id'=>$course_id));
			$this->db->update('tbl_course');
			$this->session->set_flashdata('success', 'Updated Course Data');
			redirect('course_list');
		
    }
      /*
	!--------------------------------------------
	! 		delete Course
	!--------------------------------------------
	*/ 
	public function delete_course($course_id)
    {          
           

          $this->coursemodel->all_delete_course($course_id);
    	  $data =array();
    	  $data = $this->session->set_flashdata('success', 'Deleted Sucessfully ');
          redirect('course_list');
		
    }
    /*
	!----------------------------------------
	! course application View
	!----------------------------------------
	*/
	public function courseapp()
	{
		$this->db->select('tbl_student.stu_id,tbl_courseapply.capply_id,tbl_student.stu_name,tbl_course.course_title,tbl_course.course_duration,tbl_payment.pay_id,tbl_payment.pay_date,tbl_payment.pay_tra_id,tbl_payment.pay_method,tbl_payment.pay_paidamount');
		$this->db->join("tbl_student","tbl_student.stu_id =  tbl_courseapply.stu_id");
		$this->db->join("tbl_course","tbl_course.course_id =  tbl_courseapply.course_id");
		$this->db->join("tbl_payment","tbl_payment.pay_id =  tbl_courseapply.pay_id");
		$this->db->where('tbl_payment.pay_status','pending');
		
		$data['applications'] = $this->db->get('tbl_courseapply')->result_object();
		$data['batchs']  = $this->db->get('tbl_batch')->result_object();
		//echo "<pre>";
		//print_r($data['batchs'] );


	   $this->load->view('back/lib/header',$data);
       $this->load->view('back/courseapp');
       $this->load->view('back/lib/footer');
	}


		/*
	!----------------------------------------
	! course application approved  View
	!----------------------------------------
	*/
	
	public function select_batch($capply_id,$pay_id) //here course is for changing pending to approved in payment table
	{ 


	$data['capply_id'] = $capply_id; 
    $data['pay_id']    = $pay_id;

  
	$data['batchs']  = $this->db->get('tbl_batch')->result_object();

	
       $this->load->view('back/lib/header');
       $this->load->view('back/select_batch',$data);
       $this->load->view('back/lib/footer');
		
	}

		/*
	!----------------------------------------
	! course application approved  View
	!----------------------------------------
	*/
	
	public function save_courseapply() //here course is for changing pending to approved in payment table
	{ 
	
		
        $data['capply_id'] = $this->input->post('capply_id');
        $data['pay_id']    = $this->input->post('pay_id');
        $data['batch_id']    = $this->input->post('batch_id');
     
   
        $this->db->set(array(
			'batch_id'=> $data['batch_id']
			));

        
         $this->db->where('capply_id',$data['capply_id']);
         $this->db->update('tbl_courseapply');


        $this->db->set(array(
			'pay_status'=>'approved',
			'pay_approved_date'=> date('Y-m-d')
			));
       
        $this->db->where('pay_id',$data['pay_id'] );
        $this->db->update('tbl_payment');
        $this->session->set_flashdata('success', ' Students Data Approved Sucessfully ');
        redirect('dashboard');

	}

    /*
	!----------------------------------------
	! Current course  View
	!----------------------------------------
	*/
	public function current_course()
	{
		$this->db->select('tbl_courseapply.capply_id,tbl_course.course_id,tbl_course.course_title,tbl_course.course_duration,tbl_payment.pay_id,tbl_payment.pay_date,tbl_payment.pay_tra_id,tbl_payment.pay_method,tbl_batch.batch_title,tbl_batch.batch_id');

		//$this->db->join("tbl_student","tbl_student.stu_id =  tbl_courseapply.stu_id");
		$this->db->join("tbl_course","tbl_course.course_id =  tbl_courseapply.course_id");
		$this->db->join("tbl_payment","tbl_payment.pay_id =  tbl_courseapply.pay_id");
		$this->db->join("tbl_batch","tbl_batch.batch_id =  tbl_courseapply.batch_id");
		$this->db->where(array(
			'tbl_payment.pay_status'		=>'approved',
			'tbl_courseapply.capply_status' =>'Incomplete'
		));
		$this->db->group_by('tbl_courseapply.course_id,tbl_courseapply.batch_id');
		$data['applications'] = $this->db->get('tbl_courseapply')->result_object();
		//echo "<pre>";
		//print_r($data['applications'] );die;


	   $this->load->view('back/lib/header',$data);
       $this->load->view('back/current_course');
       $this->load->view('back/lib/footer');
	}

	    /*
	!----------------------------------------
	! Current course /Student info  View
	!----------------------------------------
	*/
	public function student_info($course_id,$batch_id)
	{
		$this->db->select('tbl_student.stu_id,tbl_student.stu_sex,tbl_student.stu_mobile,tbl_student.stu_name,tbl_courseapply.capply_id,tbl_course.course_id,tbl_course.course_title,tbl_course.course_duration,tbl_payment.pay_id,tbl_payment.pay_date,tbl_payment.pay_tra_id,tbl_payment.pay_method,tbl_batch.batch_title,tbl_batch.batch_id');

		$this->db->join("tbl_student","tbl_student.stu_id =  tbl_courseapply.stu_id");
		$this->db->join("tbl_course","tbl_course.course_id =  tbl_courseapply.course_id");
		$this->db->join("tbl_payment","tbl_payment.pay_id =  tbl_courseapply.pay_id");
		$this->db->join("tbl_batch","tbl_batch.batch_id =  tbl_courseapply.batch_id");
		$this->db->where(array(
			'tbl_payment.pay_status     '=>'approved',
			'tbl_courseapply.course_id' => $course_id,
			'tbl_courseapply.capply_status' =>'Incomplete',
			'tbl_courseapply.batch_id'  => $batch_id
		));
	
		$data['applications'] = $this->db->get('tbl_courseapply')->result_object();
		$data['course_title'] = $this->db->where(array('tbl_course.course_id'=>$course_id))->get('tbl_course')->result_object();
		$data['batch_title'] = $this->db->where(array('tbl_batch.batch_id'=>$batch_id))->get('tbl_batch')->result_object();

	   $this->load->view('back/lib/header');
       $this->load->view('back/student_info',$data);
       $this->load->view('back/lib/footer');
	}


	/*
	!----------------------------------------
	! Update Student Apply Status and Result
	!----------------------------------------
	*/
	public function updateResultStatus($capply_id)
	{
		$data['capply_result']		 	= $this->input->post('capply_result');
		$data['capply_ending_date']  	= $this->input->post('capply_ending_date');
		$data['capply_status'] 		 	= $this->input->post('capply_status');
		$data['capply_result_publish'] 	= date('Y-m-d');
		$data['capply_certificate_id'] 	= "";

		if($data['capply_status'] == 'Complete')
		{
			//$this->db->join("tbl_student","tbl_student.stu_id =  tbl_courseapply.stu_id");
			//$this->db->join("tbl_course","tbl_course.course_id =  tbl_courseapply.course_id");
			$this->db->join("tbl_payment","tbl_payment.pay_id =  tbl_courseapply.pay_id");
			//$this->db->join("tbl_batch","tbl_batch.batch_id =  tbl_courseapply.batch_id");

			$this->db->where(array(
				'tbl_payment.pay_status     		'=>'approved',
				'tbl_courseapply.capply_status' 	=>'Complete',
				'tbl_courseapply.capply_result !='  =>'F'
			));
			$this->db->order_by('tbl_courseapply.capply_id','desc');
			$this->db->limit(1);
			$status = $this->db->get('tbl_courseapply');


			if($status->result_id->num_rows > 0)
			{
				//echo 'yes';
				$certificate = $status->result_object();
				$certificate_number = $certificate[0]->capply_certificate_id;
				if($data['capply_result'] != 'F')
				{
					$data['capply_certificate_id'] = str_pad($certificate_number + 1, 8, 0, STR_PAD_LEFT); 
				}
				
			}else{
				if($data['capply_result'] != 'F')
				{
					$data['capply_certificate_id'] = str_pad(1, 8, 0, STR_PAD_LEFT); 
				}
				
			}

		}
		
		$this->db->set($data);
		$this->db->where('capply_id',$capply_id);
		$this->db->update('tbl_courseapply');
		$this->session->set_flashdata('success', ' Students Data updated Sucessfully ');
        redirect('dashboard');
	}

    /*
	!----------------------------------------
	!  Complited  Student course   View
	!----------------------------------------
	*/
	public function complited_course()
	{

		$this->db->select('tbl_student.stu_id,tbl_student.stu_sex,tbl_student.stu_mobile,tbl_student.stu_name,tbl_courseapply.capply_id,tbl_courseapply.capply_result,tbl_courseapply.capply_status,tbl_courseapply.capply_ending_date,tbl_course.course_id,tbl_course.course_title,tbl_course.course_duration,tbl_payment.pay_id,tbl_payment.pay_date,tbl_payment.pay_tra_id,tbl_payment.pay_method,tbl_batch.batch_title,tbl_batch.batch_id');

		$this->db->join("tbl_student","tbl_student.stu_id =  tbl_courseapply.stu_id");
		$this->db->join("tbl_course","tbl_course.course_id =  tbl_courseapply.course_id");
		$this->db->join("tbl_payment","tbl_payment.pay_id =  tbl_courseapply.pay_id");
		$this->db->join("tbl_batch","tbl_batch.batch_id =  tbl_courseapply.batch_id");
		$this->db->where(array(
			'tbl_payment.pay_status'=>'approved',
			'tbl_courseapply.capply_status'=>'Complete'
			
		));
	
		$data['applications'] = $this->db->get('tbl_courseapply')->result_object();
		
          // echo "<pre>";
          // print_r($data['applications'] );die;
		

	   $this->load->view('back/lib/header');
       $this->load->view('back/complited_course',$data);
       $this->load->view('back/lib/footer');
	}

	/*
	!----------------------------------------
	! Update Student Apply Status and Result
	!----------------------------------------
	*/
	public function complete_check($capply_id)
	{
		$data['capply_result']		 = $this->input->post('capply_result');
		$data['capply_ending_date']  = $this->input->post('capply_ending_date');
		$data['capply_status'] 		 = $this->input->post('capply_status');
		$data['capply_result_publish'] 	= date('Y-m-d');

		$this->db->set($data);
		$this->db->where('capply_id',$capply_id);
		$this->db->update('tbl_courseapply');
		$this->session->set_flashdata('success', ' Students Data updated Sucessfully ');
        redirect('dashboard');
	}




}
?>