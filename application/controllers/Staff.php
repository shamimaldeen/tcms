<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
		if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }
	
	}
		/*
	!----------------------------------------
	! save Staff View
	!----------------------------------------
	*/
	
	public function save_staff()
	{ 

		// echo "<pre>";
		// print_r($_POST); die;
  
        $data['staff_fullname'] = $this->input->post('staff_fullname');
		$data['staff_designation'] = $this->input->post('staff_designation');
		$data['staff_joining_date'] = date('Y-m-d H:i:s');
		$data['staff_cnumber'] = $this->input->post('staff_cnumber');
		$data['staff_image'] = $this->input->post('staff_image');
		$this->db->insert('tbl_staff',$data);

		$staff_data = $this->db->order_by('staff_id','desc')->limit(1)->get('tbl_staff')->result_object();
        $staff_id = $staff_data[0]->staff_id;

		$this->upload_image($staff_id);
			$this->session->set_flashdata('success', 'Staff Data Added Successfully.');
		redirect('staff_list');
	}

	/*
	!----------------------------------------
	!	Staff Llist
	!----------------------------------------
	*/
	
	public function staff_list()
	{  
      
      //$this->db->order_by('staff_fullname','asc');
      $data['staffs']  = $this->db->get('tbl_staff')->result_object();
        //echo "<pre>";
		//print_r( $data['staffs']);
		//die;
       $this->load->view('back/lib/header');
       $this->load->view('back/staff_list',$data);
       $this->load->view('back/lib/footer');
     
	}
	/*
	!----------------------------------------
	!  	Upload Image
	!----------------------------------------
	*/
	public function upload_image($staff_id)
	{  

		// logo(image ) upload
        if (!empty($_FILES['staff_image']['name'])) {

            $config['upload_path']   = './uploads/Staff/image/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 10000;
            $config['max_width']     = 10000;
            $config['max_height']    = 10000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('staff_image')) {
                 $upload_data = array('upload_data' => $this->upload->data());

                 $data['image'] = $upload_data['upload_data']['file_name'];

                 $this->db->set('staff_image',$data['image']);
                 $this->db->where('staff_id',$staff_id);
                 $this->db->update('tbl_staff');
                
            } 
        }
		
	}
	 /*
	!--------------------------------------------
	! 		update Staff
	!--------------------------------------------
	*/ 


    public function update_staff($staff_id)
    {

        $staff_fullname     = $this->input->post('staff_fullname'); 
        $staff_designation  = $this->input->post('staff_designation'); 
        $staff_joining_date = $this->input->post('staff_joining_date'); 
        $staff_cnumber      = $this->input->post('staff_cnumber'); 
	    $this->update_image($staff_id);

	   
		$this->db->set(array(
			'staff_fullname'    =>  $staff_fullname,
			'staff_designation' =>  $staff_designation,
			'staff_joining_date'=> $staff_joining_date,
			'staff_cnumber'     => $staff_cnumber
		));
		$this->db->where(array('staff_id'=>$staff_id));
		$this->db->update('tbl_staff');
		$this->session->set_flashdata('success', 'Updated Sucessfully');
		redirect('staff_list');
	
    }

    /*
	!----------------------------------------
	!  	Update Image
	!----------------------------------------
	*/
	public function update_image($staff_id)
	{  

		// logo(image ) upload
        if (!empty($_FILES['staff_image']['name'])) {

        	$staff = $this->db->where('staff_id',$staff_id)->get('tbl_staff')->result_object();
        	// echo $staff[0]->staff_image ; die;
        
            if (file_exists('uploads/Staff/image/'.$staff[0]->staff_image)) {
               unlink('uploads/Staff/image/'.$staff[0]->staff_image);
            }

	            $config['upload_path']   = './uploads/staff/image/';
	            $config['allowed_types'] = 'gif|jpg|png';
	            $config['max_size']      = 10000;
	            $config['max_width']     = 10000;
	            $config['max_height']    = 10000;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('staff_image')) {
                     $upload_data = array('upload_data' => $this->upload->data());

                     $data['image'] = $upload_data['upload_data']['file_name'];

                     $this->db->set('staff_image',$data['image']);
                     $this->db->where('staff_id',$staff_id);
                     $this->db->update('tbl_staff');
                    
                } 
        }
		
	}

	   /*
	!--------------------------------------------
	! 		delete Staff
	!--------------------------------------------
	*/ 

	 public function delete_staff($staff_id)
    {          
           

          $this->staffmodel->delete_staff($staff_id);
    	  $data =array();
    	  $data = $this->session->set_flashdata('success', 'Deleted Sucessfully ');
          redirect('staff_list');
		
    }



}

?>
