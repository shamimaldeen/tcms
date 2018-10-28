<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Batch extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
	
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


	






}

?>
