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
        !       Update account Data Existance Check
        !----------------------------------------------------
        */
        public function update_account()
        {

          $this->db->where(array(
          	'account_description'=>$account_description,
          	'acc_cat_id'         =>$acc_cat_id,
          	'account_cash_in'    =>$account_cash_in,
          	'account_cash_out'   =>$account_cash_out
          ));
          $status = $this->db->get('tbl_account');
          $row    = $status->result_id->num_rows; 
          return $row; 
 
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