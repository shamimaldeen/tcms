<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Attendancemodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }
             /*
        !----------------------------------------------------
        !       Account List
        !----------------------------------------------------
        */

        public function account_list()
        {

          $status = $this->db->get('tbl_account');
          return $status->result_object();
         
        }

          /*
        !----------------------------------------------------
        !       Delete attendance Model Data Existance Check
        !----------------------------------------------------
        */

        public function delete_attendance($att_id)
        {

          $this->db->where('att_id',$att_id);
          $this->db->delete('tbl_attendance');
             
        }
       


       
        

       
    }

?>