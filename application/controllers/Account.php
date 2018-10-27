<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
	
	}

	/*
	!----------------------------------------
	! save account View
	!----------------------------------------
	*/
	
	public function save_account()
	{ 
        $data['acc_cat_id'] = $this->input->post('acc_cat_id');
		$data['account_description'] = $this->input->post('account_description');
		$data['account_date'] = date('Y-m-d H:i:s');
		$data['account_cash_in'] = $this->input->post('account_cash_in');
		$data['account_cash_out'] = $this->input->post('account_cash_out');
		
		$this->db->insert('tbl_account',$data);
			$this->session->set_flashdata('success', 'Account Data Added Successfully.');
		redirect('account_list');
	}

	/*
	!----------------------------------------
	!	Account Llist
	!----------------------------------------
	*/
	
	public function account_list()
	{  
       
      $data['categories'] = $this->db->get('tbl_account_category')->result_object();
      $this->db->join('tbl_account_category','tbl_account_category.acc_cat_id = tbl_account.acc_cat_id');
      $data['accounts']  = $this->db->get('tbl_account')->result_object();
      
       $this->load->view('back/lib/header');
       $this->load->view('back/account_list',$data);
       $this->load->view('back/lib/footer');
   
	}

    /*
	!--------------------------------------------
	! 		update Account 
	!--------------------------------------------
	*/ 


    public function update_account($account_id)
    {

    	$account_description = $this->input->post('account_description'); 
    	$acc_cat_id          = $this->input->post('acc_cat_id'); 
    	$account_cash_in     = $this->input->post('account_cash_in'); 
    	$account_cash_out    = $this->input->post('account_cash_out'); 

	    $row = $this->accountmodel->update_account();
	    if($row > 0)
		{

			$this->session->set_flashdata('error', 'Account category no updated');
			$this->load->view('back/account_list');
		}else{

			$this->db->set(array(
				'account_description'=>$account_description,
				'acc_cat_id'=>$acc_cat_id,
				'account_cash_in'=>$account_cash_in,
				'account_cash_out'=>$account_cash_out
			));
			$this->db->where(array('account_id'=>$account_id));
			$this->db->update('tbl_account');
			$this->session->set_flashdata('success', 'Updated Sucessfully');
			redirect('account_list');
		}
    }

      /*
	!--------------------------------------------
	! 		delete Account 
	!--------------------------------------------
	*/ 

	 public function delete_account($account_id)
    {          
           

          $this->accountmodel->delete_account($account_id);
    	  $data =array();
    	  $data = $this->session->set_flashdata('success', 'Deleted Sucessfully ');
          redirect('account_list');
		
    }






}

?>
