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
		// echo "<pre>";
		// print_r($_POST); die;
        $data['batch_id'] = $this->input->post('batch_id');
       
		redirect('attendance_entry/'.$data['batch_id']);
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
	
	public function attendance_entry($batch_id)
	{ 

	    $this->db->select('tbl_student.*,tbl_batch.batch_title,tbl_batch.batch_id');

		$this->db->join("tbl_student","tbl_student.stu_id =  tbl_courseapply.stu_id");
		$this->db->join("tbl_batch","tbl_batch.batch_id =  tbl_courseapply.batch_id");
		$this->db->where(array(
	
			'tbl_batch.batch_id'=> $batch_id 
		));
		$this->db->order_by('tbl_student.stu_id','asc');
		$this->db->group_by('tbl_courseapply.stu_id');

		//echo "<pre>";
		//print_r($data['students'] );die; 
       
        $data['students'] = $this->db->get('tbl_courseapply')->result_object();
        $data['batch_id'] = $batch_id;
      
       $this->load->view('back/lib/header');
       $this->load->view('back/attendance_entry',$data);
       $this->load->view('back/lib/footer');
   
	}

	/*
	!-------------------------------------------------------------
	! 			Save Attendance
	!-------------------------------------------------------------
	!*/
	public function save_attendance()
	{
		for($i = 0; $i < count($_POST['stu_id']); $i++)
		{
			$data['stu_id']     = $this->input->post('stu_id')[$i];
			$data['batch_id']   = $this->input->post('batch_id')[$i];
			$data['att_date']   = date('Y-m-d');
			$data['att_status'] = 'absent';
			if(isset($_POST['att_status'][$i]))
			{
				$data['att_status'] = $this->input->post('att_status')[$i];
			}
			$this->db->insert('tbl_attendance',$data);
		}

		$this->session->set_flashdata('success', 'Attendance Added Succssfully');
 		redirect('attendance_record');
	}
    /*
	!-------------------------------------------------------------
	! 			Attendance Record
	!-------------------------------------------------------------
	!*/
    public function attendance_record()
    {
	 	$this->db->select('tbl_student.stu_id,tbl_student.stu_name,tbl_attendance.att_date,tbl_attendance.att_status,tbl_attendance.att_id');

		$this->db->join("tbl_student","tbl_student.stu_id =  tbl_attendance.stu_id");
		//$this->db->join("tbl_batch","tbl_batch.batch_id =  tbl_courseapply.batch_id");
		$this->db->group_by('tbl_attendance.stu_id,tbl_attendance.att_date,tbl_attendance.batch_id');
		$this->db->order_by('tbl_student.stu_id','asc');
		//$this->db->group_by('tbl_courseapply.stu_id');
		$data['attendances'] = $this->db->get('tbl_attendance')->result_object();
		//echo "<pre>";
		//print_r($data['attendances'] );die; 

       $this->load->view('back/lib/header',$data);
       $this->load->view('back/attendance_record');
       $this->load->view('back/lib/footer');
    }

          /*
	!--------------------------------------------
	! 		delete attendance 
	!--------------------------------------------
	*/ 

	 public function delete_attendance($att_id)
    {          
           

          $this->attendancemodel->delete_attendance($att_id);
    	  $data =array();
    	  $data = $this->session->set_flashdata('success', 'Deleted Sucessfully ');
          redirect('attendance_record');
		
    }




   





}

?>
