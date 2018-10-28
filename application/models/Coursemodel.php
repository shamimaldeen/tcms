<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Coursemodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }
        /*
        !----------------------------------------------------
        !       Course List
        !----------------------------------------------------
        */

        public function course_list()
        {

          $status = $this->db->get('tbl_course');
          return $status->result_object();
         
        }
        /*
        !----------------------------------------------------
        !       Course Edit
        !----------------------------------------------------
        */
        public function all_edit_course($course_id)
        {
           
              $this->db->SELECT('*');
              $this->db->FROM('tbl_course');
              $this->db->WHERE('course_id',$course_id);
              $query_result=$this->db->get();
              $result=$query_result->result();
              return $result;
        }


        /*
        !----------------------------------------------------
        !       Update  Course Model Data Existance Check
        !----------------------------------------------------
        */
        public function all_update_course()
        { 
          $course_title    = $this->input->post('course_title'); 
          $course_duration = $this->input->post('course_duration'); 
          $course_fee      = $this->input->post('course_fee'); 
          $course_details  = $this->input->post('course_details'); 
          $course_status  = $this->input->post('course_status'); 


          $this->db->where(array(
            'course_title'=>$course_title,
            'course_duration'=>$course_duration,
            'course_fee'=>$course_fee,
            'course_details'=>$course_details,
            'course_status'=>$course_status,
          ));
          $status = $this->db->get('tbl_course');
          $row = $status->result_id->num_rows; 
          return $row; 
                 
        }
          /*
        !----------------------------------------------------
        !       Delete course Model Data Existance Check
        !----------------------------------------------------
        */

        public function all_delete_course($course_id)
        {

          $this->db->where('course_id',$course_id);
          $this->db->delete('tbl_course');
        
                 
        }
      

       
        

       
    }

?>