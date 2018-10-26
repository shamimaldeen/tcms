<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Trainingmodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }

              /*
        !----------------------------------------------------
        !       training List
        !----------------------------------------------------
        */

        public function training_list()
        {
          $this->db->join('employee','employee.emp_id = training.tra_id');
          $status = $this->db->get('training');
          return $status->result_object();
         
        }

          /*
        !----------------------------------------------------
        !     Edit  training
        !----------------------------------------------------
        */

        public function edit_training_info($tra_id)

        {
           
            $this->db->SELECT('*');
            $this->db->join('employee','employee.emp_id = training.tra_id');
           
            $this->db->where('training.tra_id',$tra_id);
            $this->db->FROM('training');
            $query_result=$this->db->get();
            $result=$query_result->result();
            return $result;
        }

           /*
        !----------------------------------------------------
        !     Update  training model
        !----------------------------------------------------
        */


         public function update_training($tra_id)
        {

          $data['tra_name']         = $this->input->post('tra_name');
          $data['tra_date']     = $this->input->post('tra_date');
          $data['emp_id']     = $this->input->post('emp_id');
        
          $this->db->set(array(
                'tra_name'        =>  $data['tra_name'] ,
                'tra_date'    => md5($data['tra_date']),
                'emp_id'       => $data['emp_id']
                
             ));
          
          
          $this->db->where('training.tra_id', $tra_id);
          $status = $this->db->update('training');
          return $status;


        }
          /*
        !----------------------------------------------------
        !       Delete training Model Data Existance Check
        !----------------------------------------------------
        */

        public function delete_training($tra_id)
        {

          $this->db->where('tra_id',$tra_id);
          $this->db->delete('training');
             
        }



 
    }

?>