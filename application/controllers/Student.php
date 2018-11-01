<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
		date_default_timezone_set('Asia/Dhaka');

	}

	/*
	!--------------------------------------------
	! 		Login 
	!--------------------------------------------
	*/ 
	public function index()
	{
		if ($this->session->has_userdata('student')) {
            redirect('student/dashboard'); //redirect to dashbaord
        }

		$this->load->view('student/index');
		$this->load->view('student/lib/footer');
		
	}

	/*
	!--------------------------------------------
	! 		Home
	!--------------------------------------------
	*/ 
	public function dashboard()
	{
		if ($this->session->has_userdata('admin')) {
            redirect('student/logout');
        }

		if (!$this->session->has_userdata('student')) {
            redirect('student');
        }
     	$this->db->where('stu_id',$this->session->stu_id);
        $data['student']  = $this->db->get('tbl_student')->result_object();

		$this->load->view('student/lib/header',$data);
		$this->load->view('student/dashboard');
		$this->load->view('student/lib/footer');
		
	}


	/*
	!--------------------------------------------
	! 		Login Handeller
	!--------------------------------------------
	*/ 
	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$status  = $this->studentmodel->login($email, $password);
		

		$row = $status->result_id->num_rows;

		if ($row > 0) 
		{
			$data = $status->result_object();

			$this->session->set_userdata(array(
				'student' 	=> true,
				'stu_id' 	=> $data[0]->stu_id,
				'stu_name' 	=> $data[0]->stu_name,
				'stu_email' => $data[0]->stu_email,
				'stu_image' => $data[0]->stu_image
				
			));
		//echo "<pre>";
			//print_r($this->session); die;
			$this->session->set_flashdata('success', 'Logged in Successfully to Dashboard !');
			redirect('student/dashboard');
			
		}else{
			$this->session->set_flashdata('error', 'Username or Password Not Matched');
           	redirect('student');

		}

	}

	/*
	!--------------------------------------------
	! 		Logout
	!--------------------------------------------
	*/ 
	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('success', 'Logged out Successfully');
		redirect('student');
	}

	   /*
	!--------------------------------------------
	! 	update_student
	!--------------------------------------------
	*/ 


    public function edit_student()
    {   
    	
        $this->db->where('stu_id',$this->session->stu_id);
        $data['update_student']  = $this->db->get('tbl_student')->result_object();
        $this->load->view('student/lib/header');
		$this->load->view('student/edit_student',$data);
		$this->load->view('student/lib/footer');
    	
	
    }


    /*
    !-------------------------------------------------------------
    ! 				Update Student
    !-------------------------------------------------------------
    !*/
    public function update_student()
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
		$this->update_image();

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
		$this->db->where('stu_id',$this->session->stu_id);
		$this->db->update('tbl_student');
		$this->session->set_flashdata('success', 'Your Profile Successfully Updated');
		redirect('student/dashboard');
    }

        /*
	!----------------------------------------
	!  	Update Image
	!----------------------------------------
	*/
	public function update_image()
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
                     $this->db->where('stu_id',$this->session->stu_id);
                     $this->db->update('tbl_student');
                    
                } 
        }
		
	}

		/*
	!----------------------------------------
	!	inquiry
	!----------------------------------------
	*/
	public function inquiry()
	{  
       $this->load->view('student/lib/header');
		$this->load->view('student/inquiry');
		$this->load->view('student/lib/footer');
     
	}
			/*
	!----------------------------------------
	!	Save inquiry
	!----------------------------------------
	*/
	public function save_inquiry()
	{  
      
        
		$data['inquiry_details'] = $this->input->post('inquiry_details');
		$data['stu_id'] = $this->session->stu_id;
	     $this->db->insert('tbl_inquiry',$data);
		$this->session->set_flashdata('success', ' Inquiry Data Added Successfully.');
		redirect('student/dashboard');
	}


	

}
