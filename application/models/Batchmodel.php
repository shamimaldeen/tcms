<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Batchmodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }
           
        /*
        !----------------------------------------------------
        !       batch List
        !----------------------------------------------------
        */

        public function batch_list()
        {

          $status = $this->db->get('tbl_batch');
          return $status->result_object();
         
        }

                /*
        !----------------------------------------------------
        !       Update batch Data Existance Check
        !----------------------------------------------------
        */
        public function update_batch()
        {

          $this->db->where(array(
            'batch_title'=>$batch_title
            
          ));
          $status = $this->db->get('tbl_batch');
          $row    = $status->result_id->num_rows; 
          return $row; 
 
        }

           /*
        !----------------------------------------------------
        !       Delete batch  Model Data Existance Check
        !----------------------------------------------------
        */

        public function delete_batch($batch_id)
        {

          $this->db->where('batch_id',$batch_id);
          $this->db->delete('tbl_batch');
             
        }
    }

?>