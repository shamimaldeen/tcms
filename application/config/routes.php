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
! 				Account category Routes
!--------------------------------------------------------------------
*/
$route['account_category_list']     = 'accountcategory/account_category_list';
$route['delete_account_caetgory/(.+)']     = 'accountcategory/delete_account_caetgory/$1';

/*
!--------------------------------------------------------------------
! 				Account  Routes
!--------------------------------------------------------------------
*/
$route['account_list']     = 'account/account_list';
$route['delete_account/(.+)']     = 'account/delete_account/$1';

/*
!--------------------------------------------------------------------
! 				Notice board Routes
!--------------------------------------------------------------------
*/
$route['add_notice']     = 'notice/add_notice';

/*
!--------------------------------------------------------------------
! 				Staff Routes
!--------------------------------------------------------------------
*/
$route['staff_list']     = 'staff/staff_list';
$route['delete_staff/(.+)']     = 'staff/delete_staff/$1';
