<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_category extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
	
	}
			/*
	!----------------------------------------
	!  add_stock_category View
	!----------------------------------------
	*/
	public function add_stock_category()
	{  
		
		$this->load->view('lib/header');
		$this->load->view('add_stock_category');
		$this->load->view('lib/footer');
	}

		/*
	!----------------------------------------
	! Save stock_category
	!----------------------------------------
	*/
	public function save_stock_category()
	{  
		
		$this->stock_categorymodel->save_stock_category(); 
		$data = $this->session->set_flashdata('success', 'Added Sucessfully ');
		
        redirect('stock_category_list');
		
	}

		/*
	!----------------------------------------
	!  	stock_category_list 
	!----------------------------------------
	*/
	public function stock_category_list()
	{  

	
		$data['stock_categorys'] = $this->db->get('stock_category')->result_object();
		
		$this->load->view('lib/header',$data);
		$this->load->view('stock_category_list');
		$this->load->view('lib/footer');
		
	}

		/*
	!----------------------------------------
	!  	Edit stock_category
	!----------------------------------------
	*/
	public function edit_stock_category($scat_id)
	{ 
	 $data['stock_category'] = $this->stock_categorymodel->edit_stock_category_info($scat_id);
	  

		$this->load->view('lib/header');
		$this->load->view('edit_stock_category',$data);
		$this->load->view('lib/footer');
		
	}
		/*
    !----------------------------------------
    !    update  StocK_category
    !----------------------------------------
    */
	public function update_stock_category($scat_id)
	{
		
	   	$status = $this->stock_categorymodel->update_stock_category($scat_id);
	 
	

	   	 if ($status) {

	   	 	$this->session->set_flashdata('success', 'Updated');
			redirect('stock_category_list');
			
         }else{
            $this->session->set_flashdata('errror', 'Not Updated');
			redirect('stock_category_list');
         }

	}

	  /*
	!--------------------------------------------
	! 		delete StocK_category
	!--------------------------------------------
	*/ 

	 public function delete_stock_category($scat_id)
    {          
           

           $this->stock_categorymodel->delete_stock_category($scat_id);
    	  $data =array();
    	  $data = $this->session->set_flashdata('success', 'Deleted Sucessfully ');
          redirect('stock_category_list');
		
    }



	


}

?>
