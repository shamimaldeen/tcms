<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inquiry extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
		if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }
	
	}

	   /*
	!----------------------------------------
	! admin Inquiry View
	!----------------------------------------
	*/
	public function inquiry()
	{
		$this->db->select('tbl_student.stu_id,tbl_student.stu_name,tbl_inquiry.inquiry_id,tbl_inquiry.inquiry_date,tbl_inquiry.inquiry_details');
		$this->db->join("tbl_student","tbl_student.stu_id = tbl_inquiry.stu_id");
		
		
		$data['inquirys'] = $this->db->get('tbl_inquiry')->result_object();
		// echo "<pre>";
		// print_r($data['inquirys']);
		// die;
	   $this->load->view('back/lib/header',$data);
       $this->load->view('back/inquiry');
       $this->load->view('back/lib/footer');
	}


	/*
	!----------------------------------------
	! Update Admin Apply
	!----------------------------------------
	*/
	public function reply($inquiry_id)
	{

		echo "<pre>";
		print_r($_POST);

		$data['inquiry_details'] = $this->input->post('inquiry_details');
		$data['inquiry_status']  = 'answered';
		$this->db->set($data);
		$this->db->where('inquiry_id',$inquiry_id);
		$this->db->update('tbl_inquiry');
		$this->session->set_flashdata('success', 'Inquiry Replied Successfully');
  		redirect('inquiry');
		
	}


}

?>