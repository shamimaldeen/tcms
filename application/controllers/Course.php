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

}

?>

