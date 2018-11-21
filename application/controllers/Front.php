<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
		
	
	}


    /*
	!----------------------------------------
	      front index
	!----------------------------------------
	*/
	
	public function index()
	{  
       $this->db->where('page_type','Slider');
	   $data['sliders']  = $this->db->get('tbl_page')->result_object();

	   $this->db->where('page_type','About Us');
	   $data['abouts']  = $this->db->get('tbl_page')->result_object();

       $this->db->where('page_type','News');
	   $data['News']  = $this->db->get('tbl_page')->result_object();

       $this->db->where('page_type','Blog');
	   $data['blogs']  = $this->db->get('tbl_page')->result_object();

       $this->load->view('front/lib/header');
       $this->load->view('front/index',$data);
       $this->load->view('front/lib/footer');
   
	}

    /*
	!----------------------------------------
	      front about
	!----------------------------------------
	*/
	
	public function about()
	{  

       $this->db->where('page_type','About Us');
	   $data['abouts']  = $this->db->get('tbl_page')->result_object();


       $this->load->view('front/lib/header');
       $this->load->view('front/about',$data);
       $this->load->view('front/lib/footer');
   
	}
	/*
	!----------------------------------------
	      front news
	!----------------------------------------
	*/
	
	public function news()
	{  

       $this->db->where('page_type','News');
	   $data['News']  = $this->db->get('tbl_page')->result_object();


       $this->load->view('front/lib/header');
       $this->load->view('front/news',$data);
       $this->load->view('front/lib/footer');
   
	}

	/*
	!----------------------------------------
	      front blog
	!----------------------------------------
	*/
	
	public function blog()
	{  

      $this->db->where('page_type','Blog');
	   $data['blogs']  = $this->db->get('tbl_page')->result_object();


       $this->load->view('front/lib/header');
       $this->load->view('front/blog',$data);
       $this->load->view('front/lib/footer');
   
	}

		/*
	!----------------------------------------
	      front blog_details
	!----------------------------------------
	*/
	
	public function blog_details()
	{  

      $this->db->where('page_type','Blog');
	   $data['blogs']  = $this->db->get('tbl_page')->result_object();


      // $this->load->view('front/lib/header');
       $this->load->view('front/blog_details',$data);
       //$this->load->view('front/lib/footer');
   
	}


	/*
	!----------------------------------------
	      front contact
	!----------------------------------------
	*/
	
	public function contact()
	{  
       
       $this->load->view('front/lib/header');
       $this->load->view('front/contact');
       $this->load->view('front/lib/footer');
   
	}

	/*
	!----------------------------------------
	! save contact View
	!----------------------------------------
	*/
	
	public function save_contact()
	{ 
        $data['contact_name'] = $this->input->post('contact_name');
		$data['contact_email'] = $this->input->post('contact_email');
		$data['contact_added'] = date('Y-m-d');
		$data['contact_meassage'] = $this->input->post('contact_meassage');
		
		
		$this->db->insert('tbl_contact',$data);
		$this->session->set_flashdata('success', 'Contact Data Added Successfully.');
		redirect('front/contact');
	}


	/*
	!----------------------------------------
	      front course
	!----------------------------------------
	*/
	
	public function course()
	{  
         $this->db->limit(3);
		 $data['courses']  = $this->db->get('tbl_course')->result_object();
       
       $this->load->view('front/lib/header');
       $this->load->view('front/course',$data);
       $this->load->view('front/lib/footer');
   
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

      //echo "<pre>";
      //print_r($data['categories']); die;
      
       $this->load->view('back/lib/header');
       $this->load->view('back/account_list',$data);
       $this->load->view('back/lib/footer');
   
	}

		/*
	!----------------------------------------
	!	 Edit Account Llist
	!----------------------------------------
	*/
	
	public function edit_account_list($account_id)
	{  
       
      $data['categories'] = $this->db->get('tbl_account_category')->result_object();
      $this->db->join('tbl_account_category','tbl_account_category.acc_cat_id = tbl_account.acc_cat_id');
     
       $data['accounts'] = $this->accountmodel->all_edit_account($account_id);

     // echo "<pre>";
     //print_r($data['categories']); die;
      
       $this->load->view('back/lib/header');
       $this->load->view('back/edit_account_list',$data);
       $this->load->view('back/lib/footer');
   
	}

    /*
	!--------------------------------------------
	! 		update Account 
	!--------------------------------------------
	*/ 


    public function update_account($account_id)
    {

    	$data['account_description'] = $this->input->post('account_description'); 
    	$data['acc_cat_id']          = $this->input->post('acc_cat_id'); 

    	$data['account_cash_in']     = $this->input->post('account_cash_in'); 
    	$data['account_cash_out']    = $this->input->post('account_cash_out'); 
    	$this->db->set($data);

		//$this->db->set(array(
				//'account_description'=>$account_description,
				//'acc_cat_id'=>$acc_cat_id,
				//'account_cash_in'=>$account_cash_in,
				//'account_cash_out'=>$account_cash_out
			//));
		
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