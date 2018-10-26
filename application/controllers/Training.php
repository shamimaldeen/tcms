<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
	
	}
		/*
	!----------------------------------------
	! Add training View
	!----------------------------------------
	*/
	public function add_training()
	{  
		$data =array();
		$data['employees'] = $this->employeemodel->employee_list();

		//echo "<pre>";
		//print_r($data['employees']);
		//die;
		
		
		$this->load->view('lib/header');
		$this->load->view('add_training',$data);
		$this->load->view('lib/footer');
	}


	/*
	!----------------------------------------
	! Save training
	!----------------------------------------
	*/

	public function save_training()
	{  
		$data =array();
		$data['emp_id'] = $this->input->post('emp_id');
		$data['tra_name'] = $this->input->post('tra_name');
		$data['tra_date'] = $this->input->post('tra_date');


		$this->db->where(array(
			'tra_name' => $data['tra_name'],
			'emp_id' 	 => $data['emp_id'] ,
			'tra_date' 	 => $data['tra_date'] ,
		    ));

		// echo "<pre>";
          // print_r($_POST); die;

	    $this->db->insert('training',$data);
	    $this->session->set_flashdata('success', ' Added successfully');
		redirect('training_list');


	}

	 /*
	!----------------------------------------
	!  training list
	!----------------------------------------
	*/
	public function training_list()
	{  
		
		
		$data['trainings'] = $this->trainingmodel->training_list();
		
		 

		//echo "<pre>";
		//print_r($data['trainings']);
		//die;
		
		$this->load->view('lib/header',$data);
		$this->load->view('training_list');
		$this->load->view('lib/footer');
		
	}
	/*
	!----------------------------------------
	!  	Edit Training
	!----------------------------------------
	*/
	public function edit_training($tra_id)
	{ 
	  $data['trainings'] = $this->trainingmodel->edit_training_info($tra_id);
	  $data['employees']  = $this->employeemodel->employee_list();

		//echo "<pre>";
	   	//print_r($data['trainings']); die;

		$this->load->view('lib/header');
		$this->load->view('edit_training',$data);
		$this->load->view('lib/footer');
		
	}


	/*
    !----------------------------------------
    !    update  Training
    !----------------------------------------
    */
	public function update_training($tra_id)
	{
		
	   	$status = $this->trainingmodel->update_training($tra_id);
	   	 if ($status) {

        	$this->session->set_flashdata('success', 'Updated');
			redirect('training_list');
			
         }else{
            $this->session->set_flashdata('errror', 'Not Updated');
			redirect('training_list');
         }

	}
	  /*
	!--------------------------------------------
	! 		delete trainging
	!--------------------------------------------
	*/ 

	 public function delete_training($tra_id)
    {          
           

           $this->trainingmodel->delete_training($tra_id);
    	  $data =array();
    	  $data = $this->session->set_flashdata('success', 'Deleted Sucessfully ');
         	redirect('training_list');
		
    }








}

?>
