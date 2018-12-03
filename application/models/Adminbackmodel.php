<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Adminbackmodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }

        /*
        !----------------------------------------------------
        !      site
        !----------------------------------------------------
        */

        public function site()
        {

          $status = $this->db->get('tbl_site');
          return $status->result_object();
         
        }




        /*
        !----------------------------------------------------
        !       page
        !----------------------------------------------------
        */

        public function page_create()
        {

          $status = $this->db->get('tbl_page');
          return $status->result_object();
         
        }



        /*
        !----------------------------------------------------
        !       edit_page_create
        !----------------------------------------------------
        */
        public function edit_page_create($page_id)
        {
           
              $this->db->SELECT('*');
              $this->db->FROM('tbl_page');
              $this->db->WHERE('page_id',$page_id);
              $query_result=$this->db->get();
              $result=$query_result->result();
              return $result;
        }

        /*
        !----------------------------------------------------
        !       Update Staff Data Existance Check
        !----------------------------------------------------
        */
        public function update_staff($staff_id)
        {

            $staff_fullname     = $this->input->post('staff_fullname'); 
            $staff_designation  = $this->input->post('staff_designation'); 
            $staff_joining_date = $this->input->post('staff_joining_date'); 
            $staff_cnumber      = $this->input->post('staff_cnumber'); 
          
          $this->db->where(array(
            'staff_fullname'    =>$staff_fullname,
            'staff_designation' =>$staff_designation,
            'staff_joining_date'=>$staff_joining_date,
            'staff_cnumber'     =>$staff_cnumber
          ));
          $status = $this->db->get('tbl_staff');
          $row    = $status->result_id->num_rows; 
          return $row; 
 
        }

          /*
        !----------------------------------------------------
        !       delete_page_create Data Existance Check
        !----------------------------------------------------
        */

        public function delete_page_create($page_id)
        {

          $this->db->where('page_id',$page_id);
          $this->db->delete('tbl_page');
             
        }
    
       
        

       
    }

?>