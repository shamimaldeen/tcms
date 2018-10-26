<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designation extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
	
	}


	/*
	!----------------------------------------
	! Add Designation View
	!----------------------------------------
	*/
	public function add_designation()
	{  
		$data =array();
		$data['departments'] = $this->departmentmodel->department_info();
		//$this->designationmodel->designation_info();
		$this->load->view('lib/header');
		$this->load->view('add_designation',$data);
		$this->load->view('lib/footer');
	}


	/*
	!----------------------------------------
	!  	Save Designation
	!----------------------------------------
	*/
	public function save_designation()
	{  
		$data =array();
		$data['dept_id'] = $this->input->post('dept_id');
		$data['desig_name'] = $this->input->post('desig_name');


		$this->db->where(array(
			'desig_name' => $data['desig_name'],
			'dept_id' 	 => $data['dept_id'] 
		));

		$row  = $this->db->get('designation')->result_id->num_rows;
		if($row > 0){
			$this->session->set_flashdata('error', 'Designation already exist');
			redirect('designation_list');
		}else{

			$this->db->insert('designation',$data);
			$this->session->set_flashdata('success', 'Designation added successfully');
			redirect('designation_list');
		}


	}


	/*
	!----------------------------------------
	!  	Designation List
	!----------------------------------------
	*/
	public function designation_list()
	{  

		$this->db->join('department','designation.dept_id = department.dept_id');
		$data['designations'] = $this->db->get('designation')->result_object();
		$this->load->view('lib/header',$data);
		$this->load->view('designation_list');
		$this->load->view('lib/footer');
		
	}

	/*
	!----------------------------------------
	!  	Edit Designation
	!----------------------------------------
	*/
	public function edit_designation($desig_id)
	{ 
	      $data['departments'] = $this->departmentmodel->department_info();

		$this->db->join('department','designation.dept_id = department.dept_id');

		$this->db->where('designation.desig_id',$desig_id);

		$data['designation'] = $this->db->get('designation')->result_object();
		//echo "<pre>";
		//print_r($data['designations']); die;

		$this->load->view('lib/header',$data);
		$this->load->view('edit_designation');
		$this->load->view('lib/footer');
		
	}

    /*
    !----------------------------------------
    !    update  Designation
    !----------------------------------------
    */
	public function update_designation($desig_id)
	{



        $data =array();
		$data['dept_id'] = $this->input->post('dept_id');
		$data['desig_name'] = $this->input->post('desig_name');
		$data['desig_id'] = $this->input->post('desig_id');


	    $row = $this->designationmodel->update_designation($data['dept_id'],$data['desig_name']);

	    if($row > 0)
		{

			$this->session->set_flashdata('error', 'Department no updated');
			redirect('designation_list');
		}else{

			$this->db->set(array(
				'dept_id'=>  $data['dept_id'] ,
				'desig_name'=> $data['desig_name']
			 ));
			$this->db->where('desig_id',$desig_id);
			$this->db->update('designation');
			$this->session->set_flashdata('success', 'Updated');
			redirect('designation_list');
		}

	}


	  /*
	!--------------------------------------------
	! 		delete Designation
	!--------------------------------------------
	*/ 

	 public function delete_designation($desig_id)
    {          
           

           $this->designationmodel->delete_department($desig_id);
    	  $data =array();
    	  $data = $this->session->set_flashdata('success', 'Deleted Sucessfully ');
          redirect('designation_list');
		
    }


}

?>
