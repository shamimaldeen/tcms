 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();
	
	}


		/*
	!----------------------------------------
	! Add client View
	!----------------------------------------
	*/
	public function add_client()
	{  
		
		$this->load->view('lib/header');
		$this->load->view('add_client');
		$this->load->view('lib/footer');
	}

		/*
	!----------------------------------------
	! Save Client
	!----------------------------------------
	*/
	public function save_client()
	{  
		
		$this->clientmodel->save_client(); 
		$data = $this->session->set_flashdata('success', 'Added Sucessfully ');
		$cli_data = $this->db->order_by('cli_id','desc')->limit(1)->get('client')->result_object();
        $cli_data = $cli_data[0]->cli_id;

        //echo "<pre>";
       // print_r($cli_data);
       // die;

		$this->upload_image($cli_data);
		
        redirect('client_list');
		
	}
	/*
	!----------------------------------------
	!  	Upload Image in client
	!----------------------------------------
	*/
	public function upload_image($cli_id)
	{  

		// logo(image ) upload
        if (!empty($_FILES['cli_image']['name'])) {

           
           // if (file_exists('uploads/school/'.$userdata[0]->image)) {
              //  unlink('uploads/school/'.$userdata[0]->image);
           // }

	            $config['upload_path']   = './uploads/client/image/';
	            $config['allowed_types'] = 'gif|jpg|png';
	            $config['max_size']      = 10000;
	            $config['max_width']     = 10000;
	            $config['max_height']    = 10000;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('cli_image')) {
                     $upload_data = array('upload_data' => $this->upload->data());

                     $data['image'] = $upload_data['upload_data']['file_name'];

                     $this->db->set('cli_image',$data['image']);
                     $this->db->where('cli_id',$cli_id);
                     $this->db->update('client');
                    
                } 
        }
		
	}

	/*
	!----------------------------------------
	!  	Client List
	!----------------------------------------
	*/
	public function client_list()
	{  

	
		$data['clients'] = $this->db->get('client')->result_object();
		//echo  "<pre>";
		//print_r($data['notices'] );
		//die;
		$this->load->view('lib/header',$data);
		$this->load->view('client_list');
		$this->load->view('lib/footer');
		
	}
	/*
	!----------------------------------------
	!  	Edit client
	!----------------------------------------
	*/
	public function edit_client($cli_id)
	{ 
	 $data['client'] = $this->clientmodel->edit_client_info($cli_id);
	  

		//echo "<pre>";
	  //print_r($data['client']); die;

		$this->load->view('lib/header');
		$this->load->view('edit_client',$data);
		$this->load->view('lib/footer');
		
	}

		/*
    !----------------------------------------
    !    update  client
    !----------------------------------------
    */
	public function update_client($cli_id)
	{
		
	   	$status = $this->clientmodel->update_client($cli_id);
	 
	  // echo "<pre>";
	   //print_r($status_attach);
	  // die;

	   	 if ($status) {
	   	 	$this->update_image($cli_id);
	   	 	

        	$this->session->set_flashdata('success', 'Updated');
			redirect('client_list');
			
         }else{
            $this->session->set_flashdata('errror', 'Not Updated');
			redirect('client_list');
         }

	}

		/*
	!----------------------------------------
	!  	Update Image
	!----------------------------------------
	*/
	public function update_image($cli_id)
	{  

		// logo(image ) upload
        if (!empty($_FILES['cli_image']['name'])) {
        	//echo "hi";
        	//die;

          $client= $this->clientmodel->edit_client_info($cli_id);
            if (file_exists('uploads/client/image/'.$client[0]->cli_image)) {
               unlink('uploads/client/image/'.$client[0]->cli_image);
            }

	            $config['upload_path']   = './uploads/client/image/';
	            $config['allowed_types'] = 'gif|jpg|png';
	            $config['max_size']      = 10000;
	            $config['max_width']     = 10000;
	            $config['max_height']    = 10000;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('cli_image')) {
                     $upload_data = array('upload_data' => $this->upload->data());

                     $data['image'] = $upload_data['upload_data']['file_name'];

                     $this->db->set('cli_image',$data['image']);
                     $this->db->where('cli_id',$cli_id);
                     $this->db->update('client');
                    
                } 
        }
		
	}

	  /*
	!--------------------------------------------
	! 		delete client
	!--------------------------------------------
	*/ 

	 public function delete_client($cli_id)
    {          
           

           $this->clientmodel->delete_client($cli_id);
    	  $data =array();
    	  $data = $this->session->set_flashdata('success', 'Deleted Sucessfully ');
          redirect('client_list');
		
    }





}

?>
