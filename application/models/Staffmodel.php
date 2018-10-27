<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Staffmodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }
             /*
        !----------------------------------------------------
        !       Staff List
        !----------------------------------------------------
        */

        public function staff_list()
        {

          $status = $this->db->get('tbl_staff');
          return $status->result_object();
         
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
        !       Delete staff  Model Data Existance Check
        !----------------------------------------------------
        */

        public function delete_staff($staff_id)
        {

          $this->db->where('staff_id',$staff_id);
          $this->db->delete('tbl_staff');
             
        }
    
       
        

       
    }

?>