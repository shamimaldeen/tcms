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

	   $this->db->where(array(
	   	'page_id'=> 42,
	   	'page_type'=>'About Us'
	   ));
	   $data['abouts']  = $this->db->get('tbl_page')->result_object();


	    $this->db->where(array(
	   	'page_id !=' => 42,
	   	'page_type'=>'About Us'
	   ));
	   $data['about_helpers']  = $this->db->get('tbl_page')->result_object();
	   //echo "<pre>";
	 // print_r($data['about_mission']); die;

  
       $this->db->where('page_type','News');
       $this->db->order_by('page_id','desc') ;
       $this->db->limit(3);
	   $data['News']  = $this->db->get('tbl_page')->result_object();

       $this->db->where('page_type','Blog');
       $this->db->order_by('page_id','desc') ;
       $this->db->limit(3);
	   $data['blogs']  = $this->db->get('tbl_page')->result_object();



	   $this->db->where('page_type','Testimonial');
	   $data['testimonials'] = $this->db->get('tbl_page')->result_object();


	   //$this->db->where('page_type','Our Teams');
	   //$data['teams'] = $this->db->get('tbl_page')->result_object();

	    $this->db->limit(3);
		 $data['courses']  = $this->db->get('tbl_course')->result_object();


	  $data['staffs']  = $this->db->get('tbl_staff')->result_object();
	  //echo "<pre>";
	  //print_r($data['staffs']); die;

      // site view logo
	  $data['sites']  = $this->db->get('tbl_site')->result_object();

        //echo "<pre>";
	    //print_r($data['sites']); die;
          
       $this->load->view('front/lib/header',$data);
       $this->load->view('front/index');
       $this->load->view('front/lib/footer');
   
	}

    /*
	!----------------------------------------
	      front about
	!----------------------------------------
	*/
	
	public function about()
	{  

         $this->db->where(array(
	   	'page_id' => 42,
	   	'page_type'=>'About Us'
	   ));
	   $data['abouts']  = $this->db->get('tbl_page')->result_object();

	    $this->db->where(array(
	   	'page_id !=' => 42,
	   	'page_type'=>'About Us'
	   ));
	   $data['about_helpers']  = $this->db->get('tbl_page')->result_object();

	   //$this->db->where('page_type','Our Teams');
	   //$data['teams'] = $this->db->get('tbl_page')->result_object();

      $data['sites']  = $this->db->get('tbl_site')->result_object();
	  $data['staffs']  = $this->db->get('tbl_staff')->result_object();


       $this->load->view('front/lib/header',$data);
       $this->load->view('front/about');
       $this->load->view('front/lib/footer');
   
	}
	/*
	!----------------------------------------
	      front news
	!----------------------------------------
	*/
	
	public function news($pageid="")
	{  
       if($pageid == '' || $pageid == null)
		{
			$pageid = 1;
		}

		$perpage = 3;
		 $this->db->where(array(
        'page_type'=>'News'

      ));

		$row  = $this->db->get('tbl_page')->result_id->num_rows;
		$data['totalpage'] = ceil($row/$perpage);

		$offset = ($pageid - 1 ) * $perpage;
		$this->db->where('page_type','News');
		$this->db->limit($perpage, $offset);

       $this->db->where('page_type','News');
       $this->db->order_by('page_id','desc') ;
	   $data['News']  = $this->db->get('tbl_page')->result_object();

	   $this->db->where('page_type','About Us');
	   $data['abouts']  = $this->db->get('tbl_page')->result_object();

	   $this->db->where('page_type','Our Teams');
	   $data['teams'] = $this->db->get('tbl_page')->result_object();
	    $data['sites']  = $this->db->get('tbl_site')->result_object();


       $this->load->view('front/lib/header',$data);
       $this->load->view('front/news');
       $this->load->view('front/lib/footer');
   
	}

		/*
	!----------------------------------------
	      front news_details
	!----------------------------------------
	*/
	
	public function news_details($page_id)
	{  
       
      $this->db->where(array(
       'page_type'=>'News',
      'page_id'  =>$page_id


      ));
	   $data['News']  = $this->db->get('tbl_page')->result_object();

       //echo "<pre>";
     // print_r($data['blogs']); die;

	   $this->db->where('page_type','About Us');
	   $data['abouts']  = $this->db->get('tbl_page')->result_object();

	   $this->db->where('page_type','Our Teams');
	   $data['teams'] = $this->db->get('tbl_page')->result_object();
	   $data['sites']  = $this->db->get('tbl_site')->result_object();

       $this->load->view('front/lib/header',$data);
       $this->load->view('front/news_details');
       $this->load->view('front/lib/footer');
   
	}

	/*
	!----------------------------------------
	      front blog
	!----------------------------------------
	*/
	
	public function blog($pageid="")
	{  
		if($pageid == '' || $pageid == null)
		{
			$pageid = 1;
		}

		$perpage = 3;
		 $this->db->where(array(
        'page_type'=>'Blog'


      ));

		$row  = $this->db->get('tbl_page')->result_id->num_rows;
		$data['totalpage'] = ceil($row/$perpage);

		$offset = ($pageid - 1 ) * $perpage;
		$this->db->where('page_type','Blog');
		$this->db->order_by('page_id','desc') ;
		$this->db->limit($perpage, $offset);

	   	$data['blogs']  = $this->db->get('tbl_page')->result_object();
	   	$data['sites']  = $this->db->get('tbl_site')->result_object();
	     $this->db->where('page_type','About Us');
	     $data['abouts']  = $this->db->get('tbl_page')->result_object();

       	$this->load->view('front/lib/header',$data);
       	$this->load->view('front/blog');
        $this->load->view('front/lib/footer');
   
	}


	/*
	!----------------------------------------
	      front blog_details
	!----------------------------------------
	*/
	
	public function blog_details($page_id)
	{  
       
      $this->db->where(array(
       'page_type'=>'Blog',
      'page_id'  =>$page_id


      ));
	   $data['blogs']  = $this->db->get('tbl_page')->result_object();

     	$data['sites']  = $this->db->get('tbl_site')->result_object();

	   $this->db->where('page_type','About Us');
	     $data['abouts']  = $this->db->get('tbl_page')->result_object();

       $this->load->view('front/lib/header',$data);
       $this->load->view('front/blog_details');
       $this->load->view('front/lib/footer');
   
	}


	/*
	!----------------------------------------
	      front contact
	!----------------------------------------
	*/
	
	public function contact()
	{  
       	$data['sites']  = $this->db->get('tbl_site')->result_object();


	     $this->db->where('page_type','About Us');
	     $data['abouts']  = $this->db->get('tbl_page')->result_object();

       $this->load->view('front/lib/header',$data);
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
		 $data['sites']  = $this->db->get('tbl_site')->result_object();

		 $this->db->where('page_type','About Us');
	     $data['abouts']  = $this->db->get('tbl_page')->result_object();
       
       $this->load->view('front/lib/header',$data);
       $this->load->view('front/course');
       $this->load->view('front/lib/footer');
   
	}


}

?>