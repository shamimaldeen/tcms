<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Accountmodel extends  CI_Model{

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
        !    Edit Account 
        !----------------------------------------------------
        */
        public function all_edit_account($account_id)
        {
           
              $this->db->SELECT('*');
              $this->db->FROM('tbl_account');
              $this->db->WHERE('account_id',$account_id);
              $query_result=$this->db->get();
              $result=$query_result->result();
              return $result;
        }


        /*
        !----------------------------------------------------
        !       Delete account  Model Data Existance Check
        !----------------------------------------------------
        */

        public function delete_account($account_id)
        {

          $this->db->where('account_id',$account_id);
          $this->db->delete('tbl_account');
             
        }
       
        

       
    }

?>