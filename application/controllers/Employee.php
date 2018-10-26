<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
	
	}

	/*
	!----------------------------------------
	! Add employee View
	!----------------------------------------
	*/
	public function add_employee()
	{  
		/*
		designation will be dependable in future by ajax
		*/

		$data =array();
		
		$data['designations']  = $this->designationmodel->designation_list();
		$this->load->view('lib/header');
		$this->load->view('add_employee',$data);
		$this->load->view('lib/footer');
	}



	/*
	!----------------------------------------
	! Save Employee 
	!----------------------------------------
	*/
	public function save_employee()
	{  
		
		$this->employeemodel->save_employee(); 
		$data = $this->session->set_flashdata('success', 'Added Sucessfully ');
          redirect('employee_list');

		
	}

    /*
	!----------------------------------------
	!  Employee list
	!----------------------------------------
	*/
	public function employee_list()
	{  
		
		
		
		$this->db->join('designation','designation.desig_id = employee.desig_id');
		$this->db->join('department','department.dept_id = designation.dept_id');
		$data['employees'] = $this->db->get('employee')->result_object();
		
		$this->load->view('lib/header',$data);
		$this->load->view('employee_list');
		$this->load->view('lib/footer');
		
	}

	/*
	!----------------------------------------
	!  	Edit Employee
	!----------------------------------------
	*/
	public function edit_employee($emp_id)
	{ 
	  $data['employees'] = $this->employeemodel->edit_employee_info($emp_id);
	  $data['designations']  = $this->designationmodel->designation_list();

		//echo "<pre>";
	   //	print_r($data['employees']); die;

		$this->load->view('lib/header',$data);
		$this->load->view('edit_employee');
		$this->load->view('lib/footer');
		
	}

	/*
    !----------------------------------------
    !    update  Employee
    !----------------------------------------
    */
	public function update_employee($emp_id)
	{
		
	   	$status = $this->employeemodel->update_employee($emp_id);
	   	 if ($status) {

        	$this->session->set_flashdata('success', 'Updated');
			redirect('employee_list');
			
         }else{
            $this->session->set_flashdata('errror', 'Not Updated');
			redirect('employee_list');
         }

	}
	  /*
	!--------------------------------------------
	! 		delete employee
	!--------------------------------------------
	*/ 

	 public function delete_employee($emp_id)
    {          
           

           $this->employeemodel->delete_employee($emp_id);
    	  $data =array();
    	  $data = $this->session->set_flashdata('success', 'Deleted Sucessfully ');
          redirect('employee_list');
		
    }

}

?>
