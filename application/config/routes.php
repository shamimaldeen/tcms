<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'admin';


/*
!--------------------------------------------------------------------
! 					Main Routes
!--------------------------------------------------------------------
*/
$route['login']     = 'admin/index';
$route['dashboard'] = 'admin/dashboard';



$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;

