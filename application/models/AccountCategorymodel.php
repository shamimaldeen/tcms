<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class AccountCategorymodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }

        

       
    }

?>