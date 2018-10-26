<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {


	/*
	!--------------------------------------------------------------------
	! 					Default Constructor
	!--------------------------------------------------------------------
	*/
	public function __construct()
	 {
		parent::__construct();
		date_default_timezone_set('Asia/Dhaka');
		$this->session->set_userdata(
			array(
				'total_department' => $this->departmentmodel->department_list_count()
			)
		);

		if (!$this->session->has_userdata('login')) {
            redirect('home');
        }

	}

	/*
	!--------------------------------------------
	! 		Add Department
	! 		@deparment
	!--------------------------------------------
	*/ 
	public function add_department()
	{
		
		$this->load->view('lib/header');
		$this->load->view('add_department');
		$this->load->view('lib/footer');
		
	}


	/*
	!--------------------------------------------------------------------
	! 				Department List
	! 				@department
	!--------------------------------------------------------------------
	*/
	public function department_list()
	{
		
		$data['departments'] = $this->departmentmodel->department_info();

		$this->load->view('lib/header',$data);
		$this->load->view('department_list');
		$this->load->view('lib/footer');
		
	}


	/*
	!--------------------------------------------
	! 		Save Department
	!--------------------------------------------
	*/ 
	public function save_department()
	{
		$dept_name = $this->input->post('dept_name');
		$data = array(
			'dept_name' => $dept_name
		);
		$status = $this->db->where(array('dept_name'=>$dept_name))->get('department');
		$row = $status->result_id->num_rows;
		if($row > 0)
		{
			$this->session->set_flashdata('error', 'Department already exist');
			redirect('add_department');
		}else{

			$this->db->insert('department',$data);
			$this->session->set_flashdata('success', 'Successfully Added Data');
			redirect('department_list');
		}


	}
	/*
	!--------------------------------------------
	! 		Edit Department
	!--------------------------------------------
	*/ 
    public function edit_department($dept_id)
    {

     $data= array();
     $data['all_edit_department'] = $this->departmentmodel->all_edit_department($dept_id);

    $this->load->view('lib/header');
	$this->load->view('edit_department',$data);
	$this->load->view('lib/footer');

    }

    /*
	!--------------------------------------------
	! 		update Department
	!--------------------------------------------
	*/ 


    public function update_department($dept_id)
    {

    	$dept_name = $this->input->post('dept_name'); 

	    $row = $this->departmentmodel->all_update_department($dept_name);
	    if($row > 0)
		{

			$this->session->set_flashdata('error', 'Department no updated');
			redirect('add_department');
		}else{

			$this->db->set('dept_name',$dept_name);
			$this->db->where(array('dept_id'=>$dept_id));
			$this->db->update('department');
			$this->session->set_flashdata('success', 'Updated');
			redirect('department_list');
		}
    }
    

    /*
	!--------------------------------------------
	! 		delete Department
	!--------------------------------------------
	*/ 
	public function delete_department($dept_id)
    {          
           

          $this->departmentmodel->all_delete_department($dept_id);
    	  $data =array();
    	  $data = $this->session->set_flashdata('success', 'Deleted Sucessfully ');
          redirect('department_list');
		
    }


}

?>
