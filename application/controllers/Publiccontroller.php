<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publiccontroller extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();

		
	}

			/*
	!----------------------------------------
	! public form  View
	!----------------------------------------
	*/
	
	public function index()
	{ 
      
	
		$this->load->view('public/index');
		
  
       
	}
		/*
	!----------------------------------------
	! save Staff View
	!----------------------------------------
	*/
	
	public function save_student()
	{ 

		// echo "<pre>";
		 //print_r($_POST); die;
  
        $data['stu_name']              = $this->input->post('stu_name');
		$data['stu_dob']               = $this->input->post('stu_dob');
		$data['stu_sex']               = $this->input->post('stu_sex');
		$data['stu_religion']          = $this->input->post('stu_religion');
		$data['stu_marital']           = $this->input->post('stu_marital');
		$data['stu_nid']               = $this->input->post('stu_nid');
		$data['stu_occupation']        = $this->input->post('stu_occupation');
		$data['stu_image']             = $this->input->post('stu_image');
		$data['stu_father']            = $this->input->post('stu_father');
		$data['stu_mother']            = $this->input->post('stu_mother');
		$data['stu_guardian']          = $this->input->post('stu_guardian');
		$data['stu_relation']          = $this->input->post('stu_relation');
		$data['stu_guardian_mobile']   = $this->input->post('stu_guardian_mobile');
		$data['stu_mobile']            = $this->input->post('stu_mobile');
		$data['stu_email']             = $this->input->post('stu_email');
		$data['stu_username']          = $this->input->post('stu_username');
		$data['stu_password']          =$this->input->post('stu_password');
		$data['stu_present_address']   = $this->input->post('stu_present_address');
		$data['stu_permanent_address'] = $this->input->post('stu_permanent_address');
		$data['stu_have_experience']   = $this->input->post('stu_have_experience');
		$data['stu_institute']         = $this->input->post('stu_institute');
		$data['stu_session']           = $this->input->post('stu_session');
		$data['stu_trade']             = $this->input->post('stu_trade');
		$data['stu_roll']              = $this->input->post('stu_roll');
		$data['stu_examination']       = $this->input->post('stu_examination');
		$data['stu_board']             = $this->input->post('stu_board');
		$data['stu_group']             = $this->input->post('stu_group');
		$data['stu_pass_year']         = $this->input->post('stu_pass_year');
		$data['stu_result']            = $this->input->post('stu_result');
		
		$this->session->set_userdata(array(
			'stu_password'=> $this->input->post('stu_password')
		));

		
		//echo "<pre>";
		// print_r($_POST); die;
  

		$string_pass = $data['stu_password'];
		$data['stu_password'] = md5($data['stu_password']);

		$this->db->insert('tbl_student',$data);

		$stu_data = $this->db->order_by('stu_id','desc')->limit(1)->get('tbl_student')->result_object();

        $stu_id = $stu_data[0]->stu_id;
        $this->upload_image($stu_id);

        
      	$message = "Dear ".$data['stu_name'].", Your application has successfully recieved. Your username is ".$data['stu_email']." and password is ".$string_pass;
      	$this->messagemodel->sendMessage($data['stu_name'],$data['stu_mobile'],$message);
		redirect('confirmation/'.$stu_id);
	}


	/*
	!----------------------------------------
	!  	Upload Image
	!----------------------------------------
	*/
	public function upload_image($stu_id)
	{  

		// logo(image ) upload
        if (!empty($_FILES['stu_image']['name'])) {

            $config['upload_path']   = './uploads/student/image/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 50000;
            $config['max_width']     = 50000;
            $config['max_height']    = 50000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('stu_image')) {
                 $upload_data = array('upload_data' => $this->upload->data());

                 $data['image'] = $upload_data['upload_data']['file_name'];

                 $this->db->set('stu_image',$data['image']);
                 $this->db->where('stu_id',$stu_id);
                 $this->db->update('tbl_student');
            }  
        }
		
	}
	/*
	!----------------------------------------
	!	confirmation list
	!----------------------------------------
	*/
	
	public function confirmation($stu_id)
	{  

	 $this->db->where('admin_id',1);

      	$data['admininfo']= $this->db->get('admin')->result_object();
      	//echo "<pre>";
      	//print_r($data['admininfo']);die;
      
      $this->db->where('stu_id',$stu_id);
      $status  = $this->db->get('tbl_student');
      if($status->result_id->num_rows)
      {
      	$data['confirmation'] = $status->result_object();
      	
      	$this->load->view('public/confirmation',$data);
      }else{

      	$this->session->set_flashdata('success', 'No Confirmation Found');
		redirect('public');
      }

 
       
  
	}

	

}

?>