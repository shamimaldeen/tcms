<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Studentsarchivemodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }

        /*
        !----------------------------------------------------
        !       students_archive List
        !----------------------------------------------------
        */

        public function students_archive()
        {

          $status = $this->db->get('tbl_student');
          return $status->result_object();
         
        }

        /*
        !----------------------------------------------------
        !       view_students_archive List
        !----------------------------------------------------
        */

        public function view_students_archive()
        {

          $status = $this->db->get('tbl_student');
          return $status->result_object();
         
        }

           /*
        !----------------------------------------------------
        !       delete_students_archive Model Data Existance Check
        !----------------------------------------------------
        */

        public function delete_students_archive($stu_id)
        {

          $this->db->where('stu_id',$stu_id);
          $this->db->delete('tbl_student');
             
        }
     
       
        

       
    }

?>