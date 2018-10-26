<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Employeemodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }
         /*
          !........................
          !   add employee model
          !........................

        */
        public function save_employee()
        {
           $data=array();
           //echo "<pre>";
           //print_r($_POST); die;
           $data['emp_name']         = $this->input->post('emp_name');
           $data['emp_username']     = $this->input->post('emp_username');
           $data['emp_password']     = md5($this->input->post('emp_password'));
           $data['emp_email']        = $this->input->post('emp_email');
           $data['emp_address']      = $this->input->post('emp_address');
           $data['emp_contact']      = $this->input->post('emp_contact');
           $data['emp_age']          = $this->input->post('emp_age');
           $data['emp_image']        = $this->input->post('emp_image');
           $data['emp_dof']          = $this->input->post('emp_dof');
           $data['emp_joining_date'] = $this->input->post('emp_joining_date');
           $data['desig_id']         = $this->input->post('desig_id');
           $this->db->insert('employee',$data);
           
        }


           /*
        !----------------------------------------------------
        !       Employee List
        !----------------------------------------------------
        */

        public function employee_list()
        {

          $status = $this->db->get('employee');
          return $status->result_object();
         
        }


        /*
        !----------------------------------------------------
        !     Edit  Employee 
        !----------------------------------------------------
        */

        public function edit_employee_info($emp_id)

        {
           
            $this->db->SELECT('*');
            $this->db->join('designation','designation.desig_id = employee.desig_id');
            $this->db->join('department','department.dept_id = designation.dept_id'); 
            $this->db->where('employee.emp_id',$emp_id);
            $this->db->FROM('employee');
            $query_result=$this->db->get();
            $result=$query_result->result();
            return $result;
        }

        /*
        !----------------------------------------------------
        !     Update  Employee model
        !----------------------------------------------------
        */


         public function update_employee($emp_id)
        {
          $data['emp_name']         = $this->input->post('emp_name');
          $data['emp_username']     = $this->input->post('emp_username');
          $data['emp_password']     = $this->input->post('emp_password');
          $data['emp_email']        = $this->input->post('emp_email');
          $data['emp_address']      = $this->input->post('emp_address');
          $data['emp_contact']      = $this->input->post('emp_contact');
          $data['emp_age']          = $this->input->post('emp_age');
          $data['emp_image']        = $this->input->post('emp_image');
          $data['emp_dof']          = $this->input->post('emp_dof');
          $data['emp_joining_date'] = $this->input->post('emp_joining_date');
          $data['desig_id']         = $this->input->post('desig_id');

          if (empty($data['emp_password'])) {
            $this->db->set(array(
                'emp_name'        => $data['emp_name'] ,
                'emp_email'       => $data['emp_email'],
                'emp_address'     => $data['emp_address'],
                'emp_contact'     => $data['emp_contact'],
                'emp_age'         => $data['emp_age'],
                'emp_image'       => $data['emp_image'],
                'emp_dof'         => $data['emp_dof'],
                'emp_joining_date'=> $data['emp_joining_date'],
                'desig_id'        => $data['desig_id']
            ));
          }else{
              $this->db->set(array(
                'emp_name'        =>  $data['emp_name'] ,
                'emp_password'    => md5($data['emp_password']),
                'emp_email'       => $data['emp_email'],
                'emp_address'     => $data['emp_address'],
                'emp_contact'     => $data['emp_contact'],
                'emp_age'         => $data['emp_age'],
                'emp_image'       => $data['emp_image'],
                'emp_dof'         => $data['emp_dof'],
                'emp_joining_date'=> $data['emp_joining_date'],
                'desig_id'        => $data['desig_id']
             ));
          }
          
          $this->db->where('employee.emp_id', $emp_id);
          $status = $this->db->update('employee');
          return $status;


        }
        /*
        !----------------------------------------------------
        !       Delete employee Model Data Existance Check
        !----------------------------------------------------
        */

        public function delete_employee($emp_id)
        {

          $this->db->where('emp_id',$emp_id);
          $this->db->delete('employee');
             
        }




       
    }

?>