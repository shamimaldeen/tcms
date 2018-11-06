<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificate extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
		if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }
	
	}

		/*
	!----------------------------------------
	! Certificates archive view
	!----------------------------------------
	*/
	public function certificates_archive()
	{

		$this->db->select('tbl_student.stu_id,tbl_student.stu_sex,tbl_student.stu_mobile,tbl_student.stu_name,tbl_courseapply.capply_id,tbl_courseapply.capply_result,tbl_courseapply.capply_status,tbl_courseapply.capply_ending_date,tbl_course.course_id,tbl_course.course_title,tbl_course.course_duration,tbl_payment.pay_id,tbl_payment.pay_date,tbl_payment.pay_tra_id,tbl_payment.pay_method,tbl_batch.batch_title,tbl_batch.batch_id');

		$this->db->join("tbl_student","tbl_student.stu_id =  tbl_courseapply.stu_id");
		$this->db->join("tbl_course","tbl_course.course_id =  tbl_courseapply.course_id");
		$this->db->join("tbl_payment","tbl_payment.pay_id =  tbl_courseapply.pay_id");
		$this->db->join("tbl_batch","tbl_batch.batch_id =  tbl_courseapply.batch_id");
		$this->db->where(array(
			'tbl_payment.pay_status'=>'approved',
			'tbl_courseapply.capply_status'=>'Complete',
			'tbl_courseapply.capply_result !='=>'F',
			
		));
	
		$data['applications'] = $this->db->get('tbl_courseapply')->result_object();
		
	   $this->load->view('back/lib/header');
       $this->load->view('back/certificates_archive',$data);
       $this->load->view('back/lib/footer');

	}


	/*
	!-------------------------------------------
	! Certificate View
	!-------------------------------------------
	*/
	public function certificates_view($batch_id,$course_id, $stu_id)
	{
		$this->db->join("tbl_student","tbl_student.stu_id =  tbl_courseapply.stu_id");
		$this->db->join("tbl_course","tbl_course.course_id =  tbl_courseapply.course_id");
		$this->db->join("tbl_payment","tbl_payment.pay_id =  tbl_courseapply.pay_id");
		$this->db->join("tbl_batch","tbl_batch.batch_id =  tbl_courseapply.batch_id");
		$this->db->where(array(
			'tbl_payment.pay_status'			=>'approved',
			'tbl_courseapply.capply_status'		=>'Complete',
			'tbl_courseapply.batch_id'			=> $batch_id,
			'tbl_courseapply.course_id'			=> $course_id,
			'tbl_courseapply.capply_result !='	=>'F',
			'tbl_courseapply.stu_id '			=> $stu_id
			
		));
		$status = $this->db->get('tbl_courseapply');
		if($status->result_id->num_rows > 0){
			$data['certificate'] = $status->result_object();
			$this->load->view('back/certificate/certificate',$data);
		}else{
			$this->session->set_flashdata('error', 'No certificate found');
  			redirect('dashboard');
		}

		
	}


}

?>