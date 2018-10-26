<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Designationmodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }

        public function designation_info()
        {

          $data=array();
          $data['desig_name'] = $this->input->post('desig_name');
          $data['desig_name'] = $this->input->post('desig_name');
          $this->db->insert('desination',$data);
          redirect('add_designation');
        }

        public function update_designation($dept_id,$desig_name)
        {
          $this->db->join('department','department.dept_id = designation.dept_id' );
          $this->db->where(array(
            'designation.desig_name'=>$desig_name,
            'designation.dept_id'=>$dept_id
             ));
          
          $status = $this->db->get('designation');
          $row = $status->result_id->num_rows; 
          return $row; 


        }

         /*
        !----------------------------------------------------
        !       Designation List
        !----------------------------------------------------
        */

        public function designation_list()
        {

          $status = $this->db->get('designation');
          return $status->result_object();
         
        }


        /*
        !----------------------------------------------------
        !       Delete Model Data Existance Check
        !----------------------------------------------------
        */

        public function delete_department($desig_id)
        {

          $this->db->where('desig_id',$desig_id);
          $this->db->delete('designation');
             
        }

    }

?>