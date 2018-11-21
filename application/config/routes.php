<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'front';


/*
!--------------------------------------------------------------------
! 				Admin Routes
!--------------------------------------------------------------------
*/
$route['admin']     = 'admin/index';
$route['dashboard'] = 'admin/dashboard';

/*
!--------------------------------------------------------------------
! 				Front Routes
!--------------------------------------------------------------------
*/
$route['front'] = 'front/index';
$route['front/contact'] = 'front/contact';
$route['front/about'] = 'front/about';
$route['front/news'] = 'front/news';
$route['front/blog'] = 'front/blog';
$route['front/blog_details'] = 'front/blog_details';
$route['front/course'] = 'front/course';




/*
!--------------------------------------------------------------------
! 				Admin_back  Routes
!--------------------------------------------------------------------
*/

$route['front/admin_back/index']                 = 'adminback/index';
$route['front/admin_back/page_create']           = 'adminback/page_create';
$route['front/admin_back/edit_page_create/(.+)'] = 'adminback/edit_page_create/$1';
$route['front/admin_back/update_page_create/(.+)'] = 'adminback/update_page_create/$1';
$route['front/admin_back/delete_page_create/(.+)'] = 'adminback/delete_page_create/$1';












$route['404_override']         = 'error404';
$route['translate_uri_dashes'] = FALSE;

/*
!--------------------------------------------------------------------
! 				Account category Routes
!--------------------------------------------------------------------
*/
$route['account_category_list']        ='accountcategory/account_category_list';
$route['delete_account_caetgory/(.+)'] ='accountcategory/delete_account_caetgory/$1';

/*
!--------------------------------------------------------------------
! 				Account  Routes
!--------------------------------------------------------------------
*/
$route['account_list']        ='account/account_list';
$route['edit_account_list/(.+)']   ='account/edit_account_list/$1';
$route['delete_account/(.+)'] ='account/delete_account/$1';

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
$route['edit_staff/(.+)']       = 'staff/edit_staff/$1';
$route['delete_staff/(.+)']     = 'staff/delete_staff/$1';
/*
!--------------------------------------------------------------------
! 				Course Routes
!--------------------------------------------------------------------
*/
$route['add_course']         = 'course/add_course';
$route['course_list']        = 'course/course_list';
$route['edit_course/(.+)']   = 'course/edit_course/$1';
$route['update_course/(.+)'] = 'course/update_course/$1';
$route['delete_course/(.+)'] = 'course/delete_course/$1';
/*
!--------------------------------------------------------------------
! 				Batch Routes
!--------------------------------------------------------------------
*/
$route['batch_list']        = 'batch/batch_list';
$route['delete_batch/(.+)'] = 'batch/delete_batch/$1';
/*
!--------------------------------------------------------------------
! 				routine Routes
!--------------------------------------------------------------------
*/
$route['add_routine']         = 'routine/add_routine';
$route['routine_list']        = 'routine/routine_list';
$route['edit_routine/(.+)']   = 'routine/edit_routine/$1';
$route['update_routine/(.+)'] = 'routine/update_routine/$1';
$route['delete_routine/(.+)'] = 'routine/delete_routine/$1';
/*
!--------------------------------------------------------------------
! 				public  Routes
!--------------------------------------------------------------------
*/
$route['public']            = 'publiccontroller/index';
$route['confirmation/(.+)'] = 'publiccontroller/confirmation/$1';
/*
!--------------------------------------------------------------------
! 				students_archive  Routes
!--------------------------------------------------------------------
*/
$route['students_archive']            = 'studentsarchive/students_archive';
$route['delete_students_archive/(.+)']= 'studentsarchive/delete_students_archive/$1';
$route['view_students_archive/(.+)']  = 'studentsarchive/view_students_archive/$1';
$route['edit_students_archive/(.+)']  = 'studentsarchive/edit_students_archive/$1';

/*
!--------------------------------------------------------------------
! 				students_ login  Routes
!--------------------------------------------------------------------
*/
$route['student']           = 'student/index';
$route['student/dashboard'] = 'student/dashboard';
$route['student/view_routine_details/(.+)'] = 'student/view_routine_details/$1';


/*
!--------------------------------------------------------------------
! 		Update student  Routes
!--------------------------------------------------------------------
*/
$route['edit_student']     = 'student/edit_student';
/*
!--------------------------------------------------------------------
! 		 student apply course  Routes
!--------------------------------------------------------------------
*/
$route['student/applycourse_list']     = 'studentcourse/applycourse_list';
$route['student/applycourse_details/(.+)'] = 'studentcourse/applycourse_details/$1';
$route['student/applycourse/(.+)']     = 'studentcourse/applycourse/$1';

/*
!--------------------------------------------------------------------
! 		 student payment  Routes
!--------------------------------------------------------------------
*/
$route['student/payment']     = 'student/payment';



/*
!--------------------------------------------------------------------
! 		Student Inquiry   Routes
!--------------------------------------------------------------------
*/
$route['student/inquiry'] = 'student/inquiry';
/*
!--------------------------------------------------------------------
! 		course application   Routes
!--------------------------------------------------------------------
*/
$route['courseapp'] = 'course/courseapp';
/*
!--------------------------------------------------------------------
! 		  admin Inquiry   Routes
!--------------------------------------------------------------------
*/
$route['inquiry'] = 'inquiry/inquiry';
/*
!--------------------------------------------------------------------
! 	 About course Application   Routes
!--------------------------------------------------------------------
*/
$route['save_courseapp'] = 'course/save_courseapp';
$route['select_batch/(.+)/(.+)'] = 'course/select_batch/$1/$2';
/*
!--------------------------------------------------------------------
! 	 About current course   Routes
!--------------------------------------------------------------------
*/
$route['current_course'] = 'course/current_course';
$route['student_info/(.+)/(.+)'] = 'course/student_info/$1/$2';
/*
!--------------------------------------------------------------------
! 	Student complited  course   Routes
!--------------------------------------------------------------------
*/
$route['complited_course'] = 'course/complited_course';
/*
!--------------------------------------------------------------------
! 	Cetificate archive    Routes
!--------------------------------------------------------------------
*/
$route['certificates_archive'] = 'certificate/certificates_archive';
$route['certificates_view/(.+)/(.+)/(.+)/(.+)']    = 'certificate/certificates_view/$1/$2/$3/$4';
/*
!--------------------------------------------------------------------
!   Attendance     Routes
!--------------------------------------------------------------------
*/
$route['attendance_search']      = 'attendance/attendance_search';
$route['attendance_entry/(.+)']  = 'attendance/attendance_entry/$1';
$route['attendance_record']      = 'attendance/attendance_record';
$route['delete_attendance/(.+)'] = 'attendance/delete_attendance/$1';

/*
!--------------------------------------------------------------------
!   SMS Alert
!--------------------------------------------------------------------
*/
$route['sms_alert']      = 'batch/sms_alert';




/*
!--------------------------------------------------------------------
!   payment route
!--------------------------------------------------------------------
*/
$route['payment'] 				= 'payment/payment';
$route['payment_pending'] 		= 'payment/payment_pending';
$route['payment_approved/(.+)'] = 'payment/payment_approved/$1';
/*
!--------------------------------------------------------------------
!   Admin inquiry route
!--------------------------------------------------------------------
*/
/*
!--------------------------------------------------------------------
!   Record route
!--------------------------------------------------------------------
*/
$route['report']      = 'report/report';
$route['student_list_batch/(.+)/(.+)/(.+)'] = 'report/student_list_batch/$1/$2/$3';
$route['student_list_course/(.+)/(.+)/(.+)'] = 'report/student_list_course/$1/$2/$3';
$route['course_list/(.+)'] = 'report/course_list/$1';
$route['new_application_list'] = 'report/new_application_list';
$route['result/(.+)'] = 'report/result/$1';
$route['attendance_indv/(.+)/(.+)/(.+)'] = 'report/attendance_indv/$1/$2/$3';
$route['collection_report/(.+)/(.+)'] = 'report/collection_report/$1/$2';
$route['report_stuff_list'] = 'report/report_stuff_list';
$route['account_report_by_date/(.+)/(.+)'] = 'report/account_report_by_date/$1/$2';
$route['account_report_by_date_category/(.+)/(.+)/(.+)'] = 'report/account_report_by_date_category/$1/$2/$3';

/*
!--------------------------------------------------------------------
!   Setting route
!--------------------------------------------------------------------
*/
$route['settings'] = 'admin/settings';