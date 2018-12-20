<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		if ($this->session->has_userdata('admin')) {
            redirect('dashboard'); //redirect to dashbaord
        }

		$this->load->view('back/login');
		$this->load->view('back/lib/footer');
	}

	/*
	!--------------------------------------------
	! 		Home
	!--------------------------------------------
	*/ 
	public function dashboard()
	{
		if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }

        //totall pending course application
        $data['totall_current_student']  =  $this->db->select('count(tbl_student.stu_id) as totall_current_student')->get('tbl_student')->result_object();

        //total pending course application
        $this->db->join("tbl_student","tbl_student.stu_id =  tbl_courseapply.stu_id");
		$this->db->join("tbl_course","tbl_course.course_id =  tbl_courseapply.course_id");
		$this->db->join("tbl_payment","tbl_payment.pay_id =  tbl_courseapply.pay_id");
		$this->db->where('tbl_payment.pay_status','pending');
		
        $data['pending_course_application']  =  $this->db->select('count(tbl_courseapply.capply_id) as pending_course_application')->get('tbl_courseapply')->result_object();

        //totall pending payment request
        $data['pending_payment_request']  =  $this->db->select('count(tbl_admin_payment.apay_id) as pending_payment_request')->get('tbl_admin_payment')->result_object();

        //totall course complited
        $this->db->join("tbl_student","tbl_student.stu_id =  tbl_courseapply.stu_id");
		$this->db->join("tbl_course","tbl_course.course_id =  tbl_courseapply.course_id");
		$this->db->join("tbl_payment","tbl_payment.pay_id =  tbl_courseapply.pay_id");
		$this->db->where('tbl_courseapply.capply_status','Complete');
		
        $data['complited_course']  =  $this->db->select('count(tbl_courseapply.capply_id) as complited_course')->get('tbl_courseapply')->result_object();
		$this->load->view('back/lib/header',$data);
		$this->load->view('back/dashboard');
		$this->load->view('back/lib/footer');
		
	}


	/*
	!--------------------------------------------
	! 		Login Handeller
	!--------------------------------------------
	*/ 
	public function login()
	{
		//echo "<pre>";
		//print_r($_POST); die;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->loginmodel->login($username, $password);
		
		$row = $status->result_id->num_rows;
		if ($row > 0) 
		{
			$data = $status->result_object();

			$site_logo = $this->db->get('tbl_site')->result_object();

			$this->session->set_userdata(array(
				'admin' 		 => true,
				'id' 			 => $data[0]->admin_id,
				'admin_username' => $data[0]->admin_username,
				'admin_email'	 => $data[0]->admin_email,
				'admin_role'     => $data[0]->admin_role,
				'site_logo' 	 => $site_logo[0]->site_logo
			));
			//echo "<pre>";
			//print_r($this->session); die;
			$this->session->set_flashdata('success', 'Successfully Logged in, Dashboard');
			redirect('dashboard');
			
		}else{
			$this->session->set_flashdata('error', 'Username or Password Not Matched');
           	redirect('admin');
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
		redirect('admin');
	}


	/*
	!--------------------------------------------
	! 	Settings
	!--------------------------------------------
	*/ 
	public function settings()
	{

        $this->load->view('back/lib/header');
		$this->load->view('back/settings');
		$this->load->view('back/lib/footer');
		
	}


}