<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Departmentmodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }

        /*
        !---------------------------------------
        !  Department model
        !---------------------------------------
        */ 
        public function department_info()
        {  
          
          $this->db->order_by('dept_name','asc');
          $departments = $this->db->get('department');
          return $departments->result_object();
          
        }

        public function all_edit_department($dept_id)

        {
           
              $this->db->SELECT('*');
              $this->db->FROM('department');
              $this->db->WHERE('dept_id',$dept_id);
              $query_result=$this->db->get();
              $result=$query_result->result();
              return $result;
        }


        /*
        !----------------------------------------------------
        !       Update Model Data Existance Check
        !----------------------------------------------------
        */
        public function all_update_department($dept_name)
        {

          $this->db->where(array('dept_name'=>$dept_name));
          $status = $this->db->get('department');
          $row = $status->result_id->num_rows; 
          return $row; 
                 
        }

          /*
        !----------------------------------------------------
        !       Delete Model Data Existance Check
        !----------------------------------------------------
        */

        public function all_delete_department($dept_id)
        {

          $this->db->where('dept_id',$dept_id);
          $this->db->delete('department');
        
                 
        }


        /*
        !----------------------------------------------------
        !       department list count Model Data Existance Check
        !----------------------------------------------------
        */

        public function department_list_count()
        {
            $status = $this->db->get('department');
            $row    = $status->result_id->num_rows; 
            return $row;
                 
        }


    }

?>