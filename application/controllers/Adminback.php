<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminback extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
		if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }
	
	}
	/*
	!----------------------------------------
	!	admin back index
	!----------------------------------------
	*/
	
	public function index()
	{  
      $data['pages']  = $this->db->get('tbl_page')->result_object();

       $this->load->view('front/admin_back/lib/header');
       $this->load->view('front/admin_back/index',$data);
       $this->load->view('front/admin_back/lib/footer');
	}


    /*
	!----------------------------------------
	!	admin back page_create
	!----------------------------------------
	*/
	
	public function page_create()
	{  
       $data['pages']  = $this->db->get('tbl_page')->result_object();
        //echo "<pre>";
	    //print_r( $data['pages']); die;
       $this->load->view('front/admin_back/lib/header');
       $this->load->view('front/admin_back/page_create',$data);
       $this->load->view('front/admin_back/lib/footer');
	}



	/*
	!----------------------------------------
	! save page View
	!----------------------------------------
	*/
	
	public function save_page_create()
	{ 

		// echo "<pre>";
		// print_r($_POST); die;
        $data['page_id'] = $this->input->post('page_id');
        $data['page_title'] = $this->input->post('page_title');
		$data['page_type'] = $this->input->post('page_type');
		$data['page_description'] = $this->input->post('page_description');
		$data['page_testemonial_desig'] = $this->input->post('page_testemonial_desig');
		$data['page_slider_button_link'] = $this->input->post('page_slider_button_link');
		$data['page_image'] = $this->input->post('page_image');
		$data['page_added_date'] = date('Y-m-d');
		$data['page_updated_date'] = date('Y-m-d');
		$this->db->insert('tbl_page',$data);

		$page_data = $this->db->order_by('page_id','desc')->limit(1)->get('tbl_page')->result_object();
        $page_id = $page_data[0]->page_id;

		$this->upload_image($page_id);
			$this->session->set_flashdata('success', 'Page Data Added Successfully.');
		redirect('front/admin_back/index');
	}



		/*
	!----------------------------------------
	!  	Upload Image
	!----------------------------------------
	*/
	public function upload_image($page_id)
	{  

		// logo(image ) upload
        if (!empty($_FILES['page_image']['name'])) {

            $config['upload_path']   = './uploads/front/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 10000;
            $config['max_width']     = 10000;
            $config['max_height']    = 10000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('page_image')) {
                 $upload_data = array('upload_data' => $this->upload->data());

                 $data['image'] = $upload_data['upload_data']['file_name'];

                 $this->db->set('page_image',$data['image']);
                 $this->db->where('page_id',$page_id);
                 $this->db->update('tbl_page');
                
            } 
        }
		
	}



    /*
	!----------------------------------------
	!	admin back edit_page_create
	!----------------------------------------
	*/
	
	public function edit_page_create($page_id)
	{  

	 $data= array();
     $data['edit_page'] = $this->adminbackmodel->edit_page_create($page_id);
      
        //echo "<pre>";
	    //print_r( $data['edit_page']); die;

       $this->load->view('front/admin_back/lib/header');
       $this->load->view('front/admin_back/edit_page_create',$data);
       $this->load->view('front/admin_back/lib/footer');
	}


	 /*
	!--------------------------------------------
	! 		update_page_create
	!--------------------------------------------
	*/ 


    public function update_page_create($page_id)
    {

        
        $data['page_title'] = $this->input->post('page_title');
		$data['page_type'] = $this->input->post('page_type');
		$data['page_description'] = $this->input->post('page_description');
		$data['page_testemonial_desig'] = $this->input->post('page_testemonial_desig');
		$data['page_slider_button_link'] = $this->input->post('page_slider_button_link');
		$data['page_image'] = $this->input->post('page_image');
		$data['page_added_date'] = date('Y-m-d');
		$data['page_updated_date'] = date('Y-m-d');
	    $this->update_image($page_id);

	   
		$this->db->set($data);
		$this->db->where(array('page_id'=>$page_id));
		$this->db->update('tbl_page');
		$this->session->set_flashdata('success', 'Updated Sucessfully');
		redirect('front/admin_back/index');
	
    }

    /*
	!----------------------------------------
	!  	Update Image
	!----------------------------------------
	*/
	public function update_image($page_id)
	{  

		// logo(image ) upload
        if (!empty($_FILES['page_image']['name'])) {

        	$page = $this->db->where('page_id',$page_id)->get('tbl_page')->result_object();
        	// echo $staff[0]->staff_image ; die;
        
            if (file_exists('uploads/front/'.$page[0]->page_image)) {
               unlink('uploads/front/'.$page[0]->page_image);
            }

	            $config['upload_path']   = './uploads/front';
	            $config['allowed_types'] = 'gif|jpg|png';
	            $config['max_size']      = 10000;
	            $config['max_width']     = 10000;
	            $config['max_height']    = 10000;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('page_image')) {
                     $upload_data = array('upload_data' => $this->upload->data());

                     $data['image'] = $upload_data['upload_data']['file_name'];

                     $this->db->set('page_image',$data['image']);
                     $this->db->where('page_id',$page_id);
                     $this->db->update('tbl_page');
                    
                } 
        }
		
	}


      /*
	!--------------------------------------------
	! 		delete_page_create
	!--------------------------------------------
	*/ 

	 public function delete_page_create($page_id)
    {          
           

          $this->adminbackmodel->delete_page_create($page_id);
    	  $data =array();
    	  $data = $this->session->set_flashdata('success', 'Deleted Sucessfully ');
         redirect('front/admin_back/index');
		
    }






}

?>