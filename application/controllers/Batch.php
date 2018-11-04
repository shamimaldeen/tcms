<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Batch extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
		if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }
	
	}

		/*
	!----------------------------------------
	! save batch View
	!----------------------------------------
	*/
	
	public function save_batch()
	{ 
        $data['batch_title'] = $this->input->post('batch_title');
		
		
		$this->db->insert('tbl_batch',$data);
		$this->session->set_flashdata('success', 'Batch Data Added Successfully.');
		redirect('batch_list');
	}
	/*
	!----------------------------------------
	!	Batch Llist
	!----------------------------------------
	*/
	
	public function batch_list()
	{  
      $data['batchs']  = $this->db->get('tbl_batch')->result_object();
     
      
       $this->load->view('back/lib/header');
       $this->load->view('back/batch_list',$data);
       $this->load->view('back/lib/footer');
   
	}

	  /*
	!--------------------------------------------
	! 		update batch 
	!--------------------------------------------
	*/ 


    public function update_batch($batch_id)
    {

    	$batch_title = $this->input->post('batch_title'); 
    	
	     $this->batchmodel->update_batch();
	    
	
			$this->db->set(array(
				'batch_title'=>$batch_title
				
			));
			$this->db->where(array('batch_id'=>$batch_id));
			$this->db->update('tbl_batch');
			$this->session->set_flashdata('success', 'Updated Sucessfully');
			redirect('batch_list');
		
    }

    /*
	!--------------------------------------------
	! 		delete batch 
	!--------------------------------------------
	*/ 

	 public function delete_batch($batch_id)
    {          
           

          $this->batchmodel->delete_batch($batch_id);
    	  $data =array();
    	  $data = $this->session->set_flashdata('success', 'Deleted Sucessfully ');
          redirect('batch_list');
		
    }


    /*
	!--------------------------------------------
	! 		Sms Alert To All Students
	!--------------------------------------------
	*/ 

	public function sms_alert()
    {           
       
        $data['batchs']  = $this->db->get('tbl_batch')->result_object();
    
       $this->load->view('back/lib/header');
       $this->load->view('back/sms_alert',$data);
       $this->load->view('back/lib/footer');
		
    }


    /*
	!--------------------------------------------
	! 		Send SMS Alert TO All Batch Student
	!--------------------------------------------
	*/ 

	public function send_sms_to_all_batch_students()
    {       

    	// echo "<pre>";
    	// print_r($_POST); die;   
    	$data['batch_id'] = $this->input->post('batch_id'); 
    	$data['message_body'] = $this->input->post('message_body'); 
       $this->db->select('tbl_student.stu_id,tbl_student.stu_name,tbl_student.stu_mobile');

        $this->db->join("tbl_courseapply","tbl_student.stu_id =  tbl_courseapply.stu_id");
		$this->db->join("tbl_batch","tbl_batch.batch_id =  tbl_courseapply.batch_id");
		

		$this->db->where(array(
			'tbl_courseapply.batch_id' => $data['batch_id']
		));
		$this->db->group_by('tbl_courseapply.stu_id');

		$status = $this->db->get('tbl_student'); 
		$row = $status->result_id->num_rows;
		$data['applications'] = $status->result_object();

		if($row > 0)
		{
			// echo "<pre>";
			// print_r($data['applications']); die;

			foreach($data['applications'] as $value)
			{
				$this->messagemodel->sendMessage($value->stu_name,$value->stu_mobile,$data['message_body']);
			}

			$data = $this->session->set_flashdata('success', 'Message Sent Successfully to '.$row .' students');
          	redirect('dashboard');
		}else{

			$data = $this->session->set_flashdata('error', 'No student found to send message');
          	redirect('dashboard');
		
		}

		

		echo "<pre>";
		print_r($data); die;

		
    }

}

?>
