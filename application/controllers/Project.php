<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
	
	}

	/*
	!----------------------------------------
	! Add Project View
	!----------------------------------------
	*/
	public function add_project()
	{  
		/*
		designation will be dependable in future by ajax
		*/

		//$data =array();
		
		//$data['designations']  = $this->designationmodel->designation_list();
		$this->load->view('lib/header');
		$this->load->view('add_project');
		$this->load->view('lib/footer');
	}



	


}

?>
