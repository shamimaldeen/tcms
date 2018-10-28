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
		$this->db->where('notice_id','3');
		$data['notice'] =  $this->db->get('tbl_notice')->result_object();
        
		$this->load->view('back/lib/header',$data);
		$this->load->view('back/add_notice');
		$this->load->view('back/lib/footer');


	}
	 /*
	!----------------------------------------
	! save notice View
	!----------------------------------------
	*/

	public function update_notice($notice_id)
	{ 
		$this->db->set('notice_description',$this->input->post('notice_description'));
		$this->db->where('notice_id',$notice_id);
		$this->db->update('tbl_notice');
		$data = $this->session->set_flashdata('success', 'Notice Updated Sucessfully ');
        redirect('dashboard');

	}
}

?>
