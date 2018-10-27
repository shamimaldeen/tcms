<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'admin';


/*
!--------------------------------------------------------------------
! 				Admin Routes
!--------------------------------------------------------------------
*/
$route['admin']     = 'admin/index';
$route['dashboard'] = 'admin/dashboard';



$route['404_override']         = 'error404';
$route['translate_uri_dashes'] = FALSE;

/*
!--------------------------------------------------------------------
! 				category Routes
!--------------------------------------------------------------------
*/
$route['add_account_category']     = 'accountcategory/add_account_category';

