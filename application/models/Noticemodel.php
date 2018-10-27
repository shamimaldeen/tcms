<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Noticemodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }
          /*
          !........................
          !   add notice model
          !........................

        */
        public function save_notice()
        {
           $data=array();
         
           $data['notice_description']  = $this->input->post('notice_description');
           

           $this->db->insert(' tbl_notice',$data);
          
        }

        

       
    }

?>