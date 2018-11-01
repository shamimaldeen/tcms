<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Studentmodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
        }

        /*
        !---------------------------------------
        !   Admin Login To Dashboard
        !---------------------------------------
        */ 
        public function login($email="", $password="")
        {
            $this->db->where(array(
              'stu_email'    => $email,
              'stu_password' => md5($password)
           ));
            $result = $this->db->get('tbl_student');
           if($result)
           {
              return $result;
           }else{
               return false;
           }
        }






    }

?>