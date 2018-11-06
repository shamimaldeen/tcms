<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studentsarchive extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
		if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }
	
	}

		/*
	!----------------------------------------
	!	Studentsarchive list
	!----------------------------------------
	*/
	
	public function students_archive()
	{  
       
    
      $data['students_archives']  = $this->db->get('tbl_student')->result_object();

      
      $this->load->view('back/lib/header');
      $this->load->view('back/students_archive',$data);
      $this->load->view('back/lib/footer');
   
	}



	/*
	!----------------------------------------
	!	view_students_archive list
	!----------------------------------------
	*/
	
	public function view_students_archive($stu_id)
	{  
       // start running course

        $this->db->join("tbl_student","tbl_student.stu_id =  tbl_courseapply.stu_id");
		$this->db->join("tbl_course","tbl_course.course_id =  tbl_courseapply.course_id");
		$this->db->join("tbl_payment","tbl_payment.pay_id =  tbl_courseapply.pay_id");
		$this->db->join("tbl_batch","tbl_batch.batch_id =  tbl_courseapply.batch_id");
		$this->db->where(array(
			'tbl_payment.pay_status'=>'approved',
			'tbl_courseapply.capply_status'=>'Incomplete',
			'tbl_courseapply.stu_id'=> $stu_id
		));
	
		$data['running_courses'] = $this->db->get('tbl_courseapply')->result_object();

      //end running course

       


       // start  course cpmpleted
	    $this->db->join("tbl_student","tbl_student.stu_id =  tbl_courseapply.stu_id");
		$this->db->join("tbl_course","tbl_course.course_id =  tbl_courseapply.course_id");
		$this->db->join("tbl_payment","tbl_payment.pay_id =  tbl_courseapply.pay_id");
		$this->db->join("tbl_batch","tbl_batch.batch_id =  tbl_courseapply.batch_id");
		$this->db->where(array(
			'tbl_payment.pay_status'=>'approved',
			'tbl_courseapply.capply_status'=>'Complete',
			'tbl_courseapply.stu_id'=> $stu_id
		));
	
		$data['completed_courses'] = $this->db->get('tbl_courseapply')->result_object();
		// end  course cpmpleted
      



       // start  fees record
	    
		$this->db->join("tbl_student","tbl_payment.stu_id =  tbl_student.stu_id");
		$this->db->where(array(
			'tbl_payment.pay_status'=>'approved',
			'tbl_student.stu_id'=> $stu_id
		));
		$data['fees_records'] = $this->db->get('tbl_payment')->result_object();
		// end  fees record

      
      //echo "<pre>";
     // print_r($data['fess_records']); die;
      



        // view profile
        $this->db->where('stu_id',$stu_id);
        $data['view_students_archive']  = $this->db->get('tbl_student')->result_object();

      //echo "<pre>";
      // print_r($data['view_students_archive']); die;
      
      $this->load->view('back/lib/header');
      $this->load->view('back/view_students_archive',$data);
      $this->load->view('back/lib/footer');
   
	}

	/*
	!----------------------------------------
	!	edit_students_archive 
	!----------------------------------------
	*/
	
	public function edit_students_archive($stu_id)
	{  
       
     $this->db->where('stu_id',$stu_id);

     $status  = $this->db->get('tbl_student');
     if($status->result_id->num_rows > 0)
     {
     	$data['edit_students_archive'] = $status->result_object();
     	 $this->load->view('back/lib/header');
     	 $this->load->view('back/edit_student',$data);
      	$this->load->view('back/lib/footer');
     }else{
     	$this->session->set_flashdata('error', 'No student found');
        redirect('students_archive');
     }


      // echo "<pre>";
       // print_r($data['view_students_archive']); die;
      
     
   
	}


	/*
    !-------------------------------------------------------------
    ! 				Update Student
    !-------------------------------------------------------------
    !*/
    public function update_student($stu_id)
    {
    	$data['stu_marital']           = $this->input->post('stu_marital');
		$data['stu_occupation']        = $this->input->post('stu_occupation');
		$data['stu_guardian']          = $this->input->post('stu_guardian');
		$data['stu_relation']          = $this->input->post('stu_relation');
		$data['stu_guardian_mobile']   = $this->input->post('stu_guardian_mobile');
		$data['stu_mobile']            = $this->input->post('stu_mobile');
		$data['stu_email']             = $this->input->post('stu_email');
		$data['stu_present_address']   = $this->input->post('stu_present_address');
		$data['stu_examination']       = $this->input->post('stu_examination');
		$data['stu_board']             = $this->input->post('stu_board');
		$data['stu_group']             = $this->input->post('stu_group');
		$data['stu_pass_year']         = $this->input->post('stu_pass_year');
		$data['stu_result']            = $this->input->post('stu_result');
		$this->update_image($stu_id);

		$this->db->set(array(
				'stu_marital'			=>	$data['stu_marital'],
				'stu_occupation'		=>	$data['stu_occupation'] ,
				'stu_guardian'			=>	$data['stu_guardian'],
				'stu_relation'			=>	$data['stu_guardian'],
				'stu_guardian_mobile'	=>	$data['stu_guardian_mobile']  ,
				'stu_mobile'			=>	$data['stu_mobile'],
				'stu_email'				=>	$data['stu_email'] ,
				'stu_present_address'	=>	$data['stu_present_address'],
				'stu_examination'		=>	$data['stu_examination'] ,
				'stu_board'				=>	$data['stu_board']  ,
				'stu_group'				=>	$data['stu_group'],
				'stu_pass_year'			=>	$data['stu_pass_year'],
				'stu_result'			=>	$data['stu_result']
			));
		$this->db->where('stu_id',$stu_id);
		$this->db->update('tbl_student');
		$this->session->set_flashdata('success', 'Your Profile Successfully Updated');
		redirect('students_archive');
    }

        /*
	!----------------------------------------
	!  	Update Image
	!----------------------------------------
	*/
	public function update_image($stu_id)
	{  

		// logo(image ) upload
        if (!empty($_FILES['stu_image']['name'])) {

        	$student = $this->db->where('stu_id',$this->session->stu_id)->get('tbl_student')->result_object();
        	// echo $staff[0]->staff_image ; die;
        
            if (file_exists('uploads/student/image/'.$student[0]->stu_image)) {
               unlink('uploads/student/image/'.$student[0]->stu_image);
            }

	            $config['upload_path']   = './uploads/student/image/';
	            $config['allowed_types'] = 'gif|jpg|png';
	            $config['max_size']      = 50000;
	            $config['max_width']     = 50000;
	            $config['max_height']    = 50000;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('stu_image')) {
                     $upload_data = array('upload_data' => $this->upload->data());

                     $data['image'] = $upload_data['upload_data']['file_name'];

                     $this->db->set('stu_image',$data['image']);
                     $this->db->where('stu_id',$stu_id);
                     $this->db->update('tbl_student');
                    
                } 
        }
		
	}


	/*
	!--------------------------------------------
	! 		delete_students_archive 
	!--------------------------------------------
	*/ 

	 public function delete_students_archive($stu_id)
    {          
           

          $this->studentsarchivemodel->delete_students_archive($stu_id);
    	  $data =array();
    	  $data = $this->session->set_flashdata('success', 'Deleted Sucessfully ');
          redirect('students_archive');
		
    }

	






}

?>
