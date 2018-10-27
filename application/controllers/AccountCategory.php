<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountCategory extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
	
	}
    /*
	!----------------------------------------
	! Add category View
	!----------------------------------------
	*/

	public function add_account_category()
	{
        
		$this->load->view('back/lib/header');
		$this->load->view('back/add_account_category');
		$this->load->view('back/lib/footer');

	}
	 /*
	!----------------------------------------
	! save account category View
	!----------------------------------------
	*/

	public function save_account_category()
	{
		$data['acc_cat_title'] = $this->input->post('acc_cat_title');
			$this->db->where(array(
			'acc_cat_title'=> $data['acc_cat_title'],
			'acc_cat_id'=>$data['acc_cat_id']
			
		    ));
		
		//$status = $this->db->where(array('acc_cat_title'=>$acc_cat_title))->get('tbl_account_category');
		//$row = $status->result_id->num_rows;
		echo "<pre>";
		print_r($_POST);
		die;
		if($row > 0)
		{
			$this->session->set_flashdata('error', 'Category already exist !');
			redirect('back/add_account_category');
		}else{

			$this->db->insert('tbl_account_category',$data);
			$this->session->set_flashdata('success', 'Category Added successfully.');
			//redirect('back/add_account_category');
		}


	}





}

?>
