<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class AccountCategorymodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }
          /*
        !----------------------------------------------------
        !       Update account category Data Existance Check
        !----------------------------------------------------
        */
        public function update_account_category($acc_cat_title)
        {

          $this->db->where(array('acc_cat_title'=>$acc_cat_title));
          $status = $this->db->get('tbl_account_category');
          $row = $status->result_id->num_rows; 
          return $row; 

         // echo "<pre>";
         // print_r( $row);
         // die;
                 
        }



         /*
        !----------------------------------------------------
        !       Delete account category Model Data Existance Check
        !----------------------------------------------------
        */

        public function delete_account_caetgory($acc_cat_id)
        {

          $this->db->where('acc_cat_id',$acc_cat_id);
          $this->db->delete('tbl_account_category');
             
        }

        

       
    }

?>