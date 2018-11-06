<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Paymentmodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }
            /*
        !----------------------------------------------------
        !      Pending 
        !----------------------------------------------------
        */

        public function payment_pending()
        {

          $status = $this->db->get('tbl_admin_payment');
          return $status->result_object();
         
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