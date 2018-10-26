<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Clientmodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }

        /*
          !........................
          !   add client model
          !........................

        */
        public function save_client()
        {
           $data=array();
           //echo "<pre>";
           //print_r($_POST); die;
           $data['cli_name']     = $this->input->post('cli_name');
           $data['cli_address']  = $this->input->post('cli_address');
           $data['cli_contact']  = $this->input->post('cli_contact');
           $data['cli_image']    = $this->input->post('cli_image');
           $data['cli_last_update']    = date()." 00:00:00";
          
           $this->db->insert('client',$data);
          
        }

           /*
        !----------------------------------------------------
        !       client model List
        !----------------------------------------------------
        */

        public function client_list()
        {

          $status = $this->db->get('client');
          return $status->result_object();
         
        }
         /*
        !----------------------------------------------------
        !     Edit  client
        !----------------------------------------------------
        */

        public function edit_client_info($cli_id)

        {
           
            $this->db->SELECT('*');
            
            $this->db->where('cli_id',$cli_id);
            $this->db->FROM('client');
            $query_result=$this->db->get();
            $result=$query_result->result();
            return $result;
        }
          /*
        !----------------------------------------------------
        !     Update client model
        !----------------------------------------------------
        */


         public function update_client($cli_id)
        {
          $data['cli_name']      = $this->input->post('cli_name');
           $data['cli_address']  = $this->input->post('cli_address');
           $data['cli_contact']  = $this->input->post('cli_contact');
           $data['cli_image']    = $this->input->post('cli_image');
           $data['cli_last_update']    = date()." 00:00:00";

         
            $this->db->set(array(
                'cli_name'        => $data['cli_name'] ,
                'cli_address'  => $data['cli_address'],  
                'cli_contact'         => $data['cli_contact']
             ));

          $this->db->where('cli_id', $cli_id);
          $status = $this->db->update('client');
          return $status;


        }

            /*
        !----------------------------------------------------
        !       Delete client Model Data Existance Check
        !----------------------------------------------------
        */

        public function delete_client($cli_id)
        {

          $this->db->where('cli_id',$cli_id);
          $this->db->delete('client');
             
        }



      

    }

?>