<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Routine extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
		if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }
	
	}
   /*
	!----------------------------------------
	! ADD routine View
	!----------------------------------------
	*/
	public function add_routine()
	{
		$data['batchs'] = $this->db->get('tbl_batch')->result_object();
		//echo "<pre>";
		//print_r($data); die;
        
	   $this->load->view('back/lib/header',$data);
       $this->load->view('back/add_routine');
       $this->load->view('back/lib/footer');
	}

		/*
	!----------------------------------------
	! save routine View
	!----------------------------------------
	*/
	
	public function save_routine()
	{ 
        $data['batch_id'] = $this->input->post('batch_id');
		$data['routine_details'] = $this->input->post('routine_details');
		
		
		$this->db->insert('tbl_routine',$data);
			$this->session->set_flashdata('success', 'Routine Data Added Successfully.');
		redirect('routine_list');
	}

		/*
	!----------------------------------------
	!	routine Llist
	!----------------------------------------
	*/
	
	public function routine_list()
	{  
       
     
      $this->db->join('tbl_batch','tbl_batch.batch_id = tbl_routine.batch_id');
      $data['routines']  = $this->db->get('tbl_routine')->result_object();
     // echo "<pre>";
      //print_r($data['routines']);
     // die;
      
       $this->load->view('back/lib/header');
       $this->load->view('back/routine_list',$data);
       $this->load->view('back/lib/footer');
   
	}
	/*
	!--------------------------------------------
	! 		Edit routine
	!--------------------------------------------
	*/ 
    public function edit_routine($routine_id)
    {

	    $data= array();
	    $data['batchs'] = $this->db->get('tbl_batch')->result_object();
	    $data['all_edit_routine'] = $this->routinemodel->all_edit_routine($routine_id);
	    //echo "<pre>";
	    //print_r($data['all_edit_routine']); die;

	    $this->load->view('back/lib/header');
		$this->load->view('back/edit_routine',$data);
		$this->load->view('back/lib/footer');

    }

 /*
	!--------------------------------------------
	! 		update routine
	!--------------------------------------------
	*/ 


    public function update_routine($routine_id)
    {
    	//echo "<pre>";
    	//print_r($_POST); die;

    	$batch_id        = $this->input->post('batch_id'); 
    	$routine_detail  = $this->input->post('routine_details'); 

	    $this->db->set(array(
				'batch_id'		 => $batch_id,
				'routine_details'=> $routine_detail
		));
		$this->db->where(array('routine_id'=>$routine_id));
		$this->db->update('tbl_routine');
		$this->session->set_flashdata('success', 'Updated Sucessfully');
		redirect('routine_list');
		
    }

    /*
	!--------------------------------------------
	! 		delete routine
	!--------------------------------------------
	*/ 
	public function delete_routine($routine_id)
    {          
          
        $this->routinemodel->all_delete_routine($routine_id);
    	$data =array();
    	$data = $this->session->set_flashdata('success', 'Deleted Sucessfully ');
        redirect('routine_list');
		
    }




}
?>