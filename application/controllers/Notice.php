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
		/*
		designation will be dependable in future by ajax
		*/

		//$data =array();
		
		//$data['designations']  = $this->designationmodel->designation_list();

		$this->load->view('lib/header');
		$this->load->view('add_notice');
		$this->load->view('lib/footer');
	}


	
	/*
	!----------------------------------------
	! Save notice
	!----------------------------------------
	*/
	public function save_notice()
	{  
		
		$this->noticemodel->save_notice(); 
		$data = $this->session->set_flashdata('success', 'Added Sucessfully ');
		$noti_data = $this->db->order_by('noti_id','desc')->limit(1)->get('notice')->result_object();
        $noti_id = $noti_data[0]->noti_id;

		$this->upload_image($noti_id);
		$this->upload_attach('noti_attach1',$noti_id,'noti_attach1'); //3argument is column
		$this->upload_attach('noti_attach2',$noti_id,'noti_attach2'); //3argument is column
		$this->upload_attach('noti_attach3',$noti_id,'noti_attach3'); //3argument is column
        redirect('notice_list');
		
	}

	/*
	!----------------------------------------
	!  	notice List
	!----------------------------------------
	*/
	public function notice_list()
	{  

	
		$data['notices'] = $this->db->get('notice')->result_object();
		//echo  "<pre>";
		//print_r($data['notices'] );
		//die;
		$this->load->view('lib/header',$data);
		$this->load->view('notice_list');
		$this->load->view('lib/footer');
		
	}

	/*
	!----------------------------------------
	!  	Upload Image
	!----------------------------------------
	*/
	public function upload_image($noti_id)
	{  

		// logo(image ) upload
        if (!empty($_FILES['noti_image']['name'])) {

           
           // if (file_exists('uploads/school/'.$userdata[0]->image)) {
              //  unlink('uploads/school/'.$userdata[0]->image);
           // }

	            $config['upload_path']   = './uploads/notice/image/';
	            $config['allowed_types'] = 'gif|jpg|png';
	            $config['max_size']      = 10000;
	            $config['max_width']     = 10000;
	            $config['max_height']    = 10000;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('noti_image')) {
                     $upload_data = array('upload_data' => $this->upload->data());

                     $data['image'] = $upload_data['upload_data']['file_name'];

                     $this->db->set('noti_image',$data['image']);
                     $this->db->where('noti_id',$noti_id);
                     $this->db->update('notice');
                    
                } 
        }
		
	}


	 
	/*
	!----------------------------------------
	!  	Upload Attachment
	!----------------------------------------
	*/
	public function upload_attach($filename,$noti_id,$column)
	{  

		// logo(image ) upload
        if (!empty($_FILES[$filename]['name'])) {

           
           // if (file_exists('uploads/school/'.$userdata[0]->image)) {
              //  unlink('uploads/school/'.$userdata[0]->image);
           // }

	            $config['upload_path']   = './uploads/notice/attachment/';
	            $config['allowed_types'] = 'gif|jpg|png|docx|doc|pdf|xls|csv|xlxs';
	            $config['max_size']      = 10000;
	            $config['max_width']     = 10000;
	            $config['max_height']    = 10000;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload($filename)) {
                     $upload_data = array('upload_data' => $this->upload->data());

                     $data['image'] = $upload_data['upload_data']['file_name'];

                     $this->db->set($column,$data['image']);
                     $this->db->where('noti_id',$noti_id);
                     $this->db->update('notice');
                    
                } 
        }
		
	}
	/*
	!----------------------------------------
	!  	Edit notice
	!----------------------------------------
	*/
	public function edit_notice($noti_id)
	{ 
	 $data['notice'] = $this->noticemodel->edit_notice_info($noti_id);
	  

		//echo "<pre>";
	  // print_r($data['notice']); die;

		$this->load->view('lib/header');
		$this->load->view('edit_notice',$data);
		$this->load->view('lib/footer');
		
	}

		/*
    !----------------------------------------
    !    update  notice
    !----------------------------------------
    */
	public function update_notice($noti_id)
	{
		
	   	$status = $this->noticemodel->update_notice($noti_id);
	   $status_attach= $notice= $this->noticemodel->edit_notice_info($noti_id);
	  // echo "<pre>";
	   //print_r($status_attach);
	  // die;

	   	 if ($status) {
	   	 	$this->update_image($noti_id);
	   	 	$this->update_attach($filename,$noti_id,$column);

        	$this->session->set_flashdata('success', 'Updated');
			redirect('notice_list');
			
         }else{
            $this->session->set_flashdata('errror', 'Not Updated');
			redirect('notice_list');
         }

	}

	/*
	!----------------------------------------
	!  	Update Image
	!----------------------------------------
	*/
	public function update_image($noti_id)
	{  

		// logo(image ) upload
        if (!empty($_FILES['noti_image']['name'])) {
        	//echo "hi";
        	//die;

          $notice= $this->noticemodel->edit_notice_info($noti_id);
            if (file_exists('uploads/notice/image/'.$notice[0]->noti_image)) {
               unlink('uploads/notice/image/'.$notice[0]->noti_image);
            }

	            $config['upload_path']   = './uploads/notice/image/';
	            $config['allowed_types'] = 'gif|jpg|png';
	            $config['max_size']      = 10000;
	            $config['max_width']     = 10000;
	            $config['max_height']    = 10000;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('noti_image')) {
                     $upload_data = array('upload_data' => $this->upload->data());

                     $data['image'] = $upload_data['upload_data']['file_name'];

                     $this->db->set('noti_image',$data['image']);
                     $this->db->where('noti_id',$noti_id);
                     $this->db->update('notice');
                    
                } 
        }
		
	}

	/*
	!----------------------------------------
	!  	Update Attachment
	!----------------------------------------
	*/
	public function update_attach($filename,$noti_id,$column)
	{  

		// logo(image ) upload

        if (!empty($_FILES[$filename]['name'])) {

            $notice= $this->noticemodel->edit_notice_info($noti_id);
            if (file_exists('uploads/notice/attachment/'.$notice[0]->noti_image)) {
              unlink('uploads/notice/attachment/'.$notice[0]->noti_image);
            }

	            $config['upload_path']   = './uploads/notice/attachment/';
	            $config['allowed_types'] = 'gif|jpg|png|docx|doc|pdf|xls|csv|xlxs';
	            $config['max_size']      = 10000;
	            $config['max_width']     = 10000;
	            $config['max_height']    = 10000;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload($filename)) {
                     $upload_data = array('upload_data' => $this->upload->data());

                     $data['image'] = $upload_data['upload_data']['file_name'];

                     $this->db->set($column,$data['image']);
                     $this->db->where('noti_id',$noti_id);
                     $this->db->update('notice');
                    
                } 
        }
		
	}

	  /*
	!--------------------------------------------
	! 		delete notice
	!--------------------------------------------
	*/ 

	 public function delete_notice($noti_id)
    {          
           

           $this->noticemodel->delete_notice($noti_id);
    	  $data =array();
    	  $data = $this->session->set_flashdata('success', 'Deleted Sucessfully ');
          redirect('notice_list');
		
    }


}


?>
