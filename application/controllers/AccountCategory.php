<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountCategory extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
	
	}
	 /*
	!----------------------------------------
	! save account category View
	!----------------------------------------
	*/


	public function save_account_category()
	{ 
       
		$data['acc_cat_title'] = $this->input->post('acc_cat_title');
		
		$status = $this->db->where(array(

			'acc_cat_title' => $data['acc_cat_title']

		))->get('tbl_account_category');

		$row = $status->result_id->num_rows;
		
		if($row > 0)
		{
			$this->session->set_flashdata('error', 'Account Category already exist !');
			redirect('account_category_list');
		}else{

			$this->db->insert('tbl_account_category',$data);
			$this->session->set_flashdata('success', 'Account Category Added Successfully.');
		    redirect('account_category_list');
		}

	}

	/*
	!----------------------------------------
	! Account Category List
	!----------------------------------------
	*/


	public function account_category_list()
	{ 
      
		$data['categories'] = $this->db->get('tbl_account_category')->result_object();
		
		$this->load->view('back/lib/header',$data);
		$this->load->view('back/account_category_list');
		$this->load->view('back/lib/footer');
		

	}

	  /*
	!--------------------------------------------
	! 		delete Account category
	!--------------------------------------------
	*/ 

	 public function delete_account_caetgory($acc_cat_id)
    {          
           

          $this->accountcategorymodel->delete_account_caetgory($acc_cat_id);
    	  $data =array();
    	  $data = $this->session->set_flashdata('success', 'Deleted Sucessfully ');
          redirect('account_category_list');
		
    }

       /*
	!--------------------------------------------
	! 		update Account category
	!--------------------------------------------
	*/ 


    public function update_account_category($acc_cat_id)
    {

    	$acc_cat_title = $this->input->post('acc_cat_title'); 

	     $this->accountcategorymodel->update_account_category($acc_cat_title);
	   

			$this->db->set('acc_cat_title',$acc_cat_title);
			$this->db->where(array('acc_cat_id'=>$acc_cat_id));
			$this->db->update('tbl_account_category');
			$this->session->set_flashdata('success', 'Updated Sucessfully');
			redirect('account_category_list');
		
    }


}

?>
