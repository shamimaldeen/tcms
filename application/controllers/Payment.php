<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
		if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }
	
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
	! payment pending view
	!----------------------------------------
	*/
      
	public function payment_pending()
	{  
       
      $this->db->select('tbl_student.stu_id,tbl_student.stu_sex,tbl_student.stu_mobile,tbl_student.stu_name,tbl_admin_payment.apay_id,tbl_admin_payment.apay_date,tbl_admin_payment.apay_tra_id,tbl_admin_payment.apay_fee,tbl_admin_payment.apay_method');

		$this->db->join("tbl_student","tbl_student.stu_id =  tbl_admin_payment.stu_id");
		
		$this->db->where(array(
			'tbl_admin_payment.apay_status'=>'pending'
			
		));
	
		$data['apayments'] = $this->db->get('tbl_admin_payment')->result_object();
		//echo "<pre>";
		//print_r($data['apayments']);die;
      
       $this->load->view('back/lib/header');
       $this->load->view('back/payment_pending',$data);
       $this->load->view('back/lib/footer');
   
	}
	/*
	!----------------------------------------
	! payment approved 
	!----------------------------------------
	*/
      
	public function payment_approved($apay_id)
	{  
		$this->db->set('apay_status','approved');
		$this->db->where(array(
			'tbl_admin_payment.apay_id'=> $apay_id
		));
		$this->db->update('tbl_admin_payment');
		$this->session->set_flashdata('success', 'Payment Apporved Successfully');
		redirect('payment_pending');

	}

	/*
	!----------------------------------------
	! payment approved 
	!----------------------------------------
	*/
      
	public function payment_delete($apay_id)
	{  
		
		$this->db->where(array(
			'tbl_admin_payment.apay_id'=> $apay_id
		));
		$this->db->delete('tbl_admin_payment');
		$this->session->set_flashdata('success', 'Payment Deleted Successfully');
		redirect('payment');

	}

	/*
	!----------------------------------------
	!	Account Llist
	!----------------------------------------
	*/
	
	public function payment()
	{  
		$this->db->select('tbl_student.stu_id,tbl_student.stu_sex,tbl_student.stu_mobile,tbl_student.stu_name,tbl_admin_payment.apay_id,tbl_admin_payment.apay_date,tbl_admin_payment.apay_tra_id,tbl_admin_payment.apay_fee,tbl_admin_payment.apay_method');

		$this->db->join("tbl_student","tbl_student.stu_id =  tbl_admin_payment.stu_id");
		
		$this->db->where(array(
			'tbl_admin_payment.apay_status'=>'approved'
			
		));
	
		$data['apayments'] = $this->db->get('tbl_admin_payment')->result_object();
		//echo "<pre>";
		//print_r($data['apayments']);die;
       $this->load->view('back/lib/header',$data);
       $this->load->view('back/payment');
       $this->load->view('back/lib/footer');
   
	}

	/*
	!----------------------------------------
	!	payment_ receive  Llist
	!----------------------------------------
	*/
	
	public function save_receive()
	{  
        $data['stu_id']      = $this->input->post('stu_id');
		$data['apay_fee']    = $this->input->post('apay_fee');
		$data['apay_tra_id'] = $this->input->post('apay_tra_id');
		$data['apay_method'] = $this->input->post('apay_method');
		$data['apay_date']   = date('Y-m-d H:i:s');
		$data['apay_status'] = 'approved';
		//echo "<pre>";
		//print_r($_POST);die;
		
		$this->db->insert('tbl_admin_payment',$data);
		$this->session->set_flashdata('success', 'Payment  Data Added Successfully.');
		redirect('payment_pending');
     
      
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
		$this->db->set(array(
				'account_description' =>$account_description,
				'acc_cat_id'		  =>$acc_cat_id,
				'account_cash_in'	  =>$account_cash_in,
				'account_cash_out'	  =>$account_cash_out
			));
		
		$this->db->where(array('account_id'=>$account_id));
		$this->db->update('tbl_account');
		$this->session->set_flashdata('success', 'Updated Sucessfully');
		redirect('account_list');
		
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