<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Publiccontrollermodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }
               /*
        !----------------------------------------------------
        !       Confirmation model List
        !----------------------------------------------------
        */

        public function confirmation()
        {

          $status = $this->db->get('tbl_student');
          return $status->result_object();
         
        }
     
       
        

       
    }

?>