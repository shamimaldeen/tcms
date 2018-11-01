<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Studentcoursemodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }

         /*
        !----------------------------------------------------
        !       payment List
        !----------------------------------------------------
        */

        public function payment()
        {

          $status = $this->db->get('tbl_payment');
          return $status->result_object();
         
        }

    

       
     
       
        

       
    }

?>