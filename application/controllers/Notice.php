<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
	
	}
    /*
	!----------------------------------------
	! Add notice View
	!----------------------------------------
	*/

	public function add_notice()
	{
        
		$this->load->view('back/lib/header');
		$this->load->view('back/add_notice');
		$this->load->view('back/lib/footer');


	}
	 /*
	!----------------------------------------
	! save notice View
	!----------------------------------------
	*/

	public function save_notice()
	{ 

		$this->noticemodel->save_notice(); 
		$data = $this->session->set_flashdata('success', 'Added Sucessfully ');
		$noti_data = $this->db->order_by('notice_id','desc')->limit(1)->get('tbl_notice')->result_object();
        $notice_id = $noti_data[0]->notice_id;

	}





}

?>
