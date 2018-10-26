<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Noticemodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }
      
        /*
          !........................
          !   add notice model
          !........................

        */
        public function save_notice()
        {
           $data=array();
           //echo "<pre>";
           //print_r($_POST); die;
           $data['noti_title']        = $this->input->post('noti_title');
           $data['noti_description']  = $this->input->post('noti_description');
           $data['noti_image']        = $this->input->post('noti_image');
           $data['noti_attach1']      = $this->input->post('noti_attach1');
           $data['noti_attach2']      = $this->input->post('noti_attach2');
           $data['noti_attach3']      = $this->input->post('noti_attach3');
           $data['noti_date']         = $this->input->post('noti_date')." 00:00:00";

           $this->db->insert('notice',$data);
          
        }

           /*
        !----------------------------------------------------
        !       Notice model List
        !----------------------------------------------------
        */

        public function notice_list()
        {

          $status = $this->db->get('notice');
          return $status->result_object();
         
        }

         /*
        !----------------------------------------------------
        !     Edit  Notice
        !----------------------------------------------------
        */

        public function edit_notice_info($noti_id)

        {
           
            $this->db->SELECT('*');
            
            $this->db->where('noti_id',$noti_id);
            $this->db->FROM('notice');
            $query_result=$this->db->get();
            $result=$query_result->result();
            return $result;
        }

        /*
        !----------------------------------------------------
        !     Update notice model
        !----------------------------------------------------
        */


         public function update_notice($noti_id)
        {
          $data['noti_title']        = $this->input->post('noti_title');
           $data['noti_description']  = $this->input->post('noti_description');
           $data['noti_image']        = $this->input->post('noti_image');
           $data['noti_attach1']      = $this->input->post('noti_attach1');
           $data['noti_attach2']      = $this->input->post('noti_attach2');
           $data['noti_attach3']      = $this->input->post('noti_attach3');
           $data['noti_date']         = $this->input->post('noti_date')." 00:00:00";

         
            $this->db->set(array(
                'noti_title'        => $data['noti_title'] ,
                'noti_description'  => $data['noti_description'],  
                'noti_date'         => $data['noti_date']
             ));

          $this->db->where('noti_id', $noti_id);
          $status = $this->db->update('notice');
          return $status;


        }

          /*
        !----------------------------------------------------
        !       Delete notice Model Data Existance Check
        !----------------------------------------------------
        */

        public function delete_notice($noti_id)
        {

          $this->db->where('noti_id',$noti_id);
          $this->db->delete('notice');
             
        }



       
    }

?>