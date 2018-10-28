<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Routinemodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }

             /*
        !----------------------------------------------------
        !       routine List
        !----------------------------------------------------
        */

        public function routine_list()
        {

          $status = $this->db->get('tbl_routine');
          return $status->result_object();
         
        }
          /*
        !----------------------------------------------------
        !       Routine Edit
        !----------------------------------------------------
        */
        public function all_edit_routine($routine_id)
        {
           
              $this->db->SELECT('*');
              $this->db->WHERE('routine_id',$routine_id);
              $query_result=$this->db->get('tbl_routine');
              $result  =$query_result->result();
              return $result;
        }

        /*
        !----------------------------------------------------
        !       Delete routine Model Data Existance Check
        !----------------------------------------------------
        */

        public function all_delete_routine($routine_id)
        {

          $this->db->where('routine_id',$routine_id);
          $this->db->delete('tbl_routine');
        
                 
        }
    
       
        

       
    }

?>