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
$route['staff_list']            = 'staff/staff_list';
$route['delete_staff/(.+)']     = 'staff/delete_staff/$1';
/*
!--------------------------------------------------------------------
! 				Course Routes
!--------------------------------------------------------------------
*/
$route['add_course']       = 'course/add_course';
$route['course_list']      = 'course/course_list';
$route['edit_course/(.+)'] = 'course/edit_course/$1';
$route['update_course/(.+)'] = 'course/update_course/$1';
$route['delete_course/(.+)'] = 'course/delete_course/$1';
/*
!--------------------------------------------------------------------
! 				Batch Routes
!--------------------------------------------------------------------
*/
$route['batch_list']      = 'batch/batch_list';
$route['delete_batch/(.+)'] = 'batch/delete_batch/$1';
/*
!--------------------------------------------------------------------
! 				routine Routes
!--------------------------------------------------------------------
*/
$route['add_routine']       = 'routine/add_routine';
$route['routine_list']       = 'routine/routine_list';
$route['edit_routine/(.+)'] = 'routine/edit_routine/$1';
$route['update_routine/(.+)'] = 'routine/update_routine/$1';
$route['delete_routine/(.+)'] = 'routine/delete_routine/$1';