<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Loginmodel extends  CI_Model{

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
        public function login($username="", $password="")
        {
            $this->db->where(array(
              'admin_username' => $username,
              'admin_password' => md5($password)
           ));
            $result = $this->db->get('admin');
           if($result)
           {
              return $result;
           }else{
               return false;
           }
        }






    }

?>