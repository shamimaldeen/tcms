<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
    class Messagemodel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
            
        }


        /*
        !-------------------------------------
        !    Send Message to Applicant
        !    After Completing Application
        !------------------------------------
        */
        public function sendMessage($name='',$mobile='',$message)
        {
            //return false;
            
            $token = "77f9a4d2c5ea51913e1cd7624705239c";
            $url   = "http://sms.greenweb.com.bd/api.php";
            $data = array(
                'to'        => $mobile,
                'message'   => $message,
                'token'     => "$token"
            ); // Add parameters in key value
            $ch = curl_init(); // Initialize cURL
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $smsresult = curl_exec($ch); //execute statement to send sms
            return $smsresult;
        }
    
       
    }

?>