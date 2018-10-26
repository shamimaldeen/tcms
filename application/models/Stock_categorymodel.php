<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Stock_categorymodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }

           /*
          !........................
          !   save stock_category model
          !........................

        */
        public function save_stock_category()
        {
           $data=array();
           $data['scat_name']     = $this->input->post('scat_name');
          
          
           $this->db->insert('stock_category',$data);
          
        }
           /*
        !----------------------------------------------------
        !       Stock_category model List
        !----------------------------------------------------
        */

        public function client_list()
        {

          $status = $this->db->get('stock_category');
          return $status->result_object();
         
        }
          /*
        !----------------------------------------------------
        !     Edit  Stock_category 
        !----------------------------------------------------
        */

        public function edit_stock_category_info($scat_id)

        {
           
            $this->db->SELECT('*');
            
            $this->db->where('scat_id',$scat_id);
            $this->db->FROM('stock_category');
            $query_result=$this->db->get();
            $result=$query_result->result();
            return $result;
        }

             /*
        !----------------------------------------------------
        !     Update stock_category model
        !----------------------------------------------------
        */


         public function update_stock_category($scat_id)
        {
           $data['scat_name']      = $this->input->post('scat_name');
          
         
            $this->db->set(array(
                'scat_name'  => $data['scat_name'] ,
             ));

          $this->db->where('scat_id', $scat_id);
          $status = $this->db->update('stock_category');
          return $status;


        }
            /*
        !----------------------------------------------------
        !       Delete stock_category Model Data Existance Check
        !----------------------------------------------------
        */

        public function delete_stock_category($scat_id)
        {

          $this->db->where('scat_id',$scat_id);
          $this->db->delete('stock_category');
             
        }

       

    }

?>