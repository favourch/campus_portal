<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
  | -------------------------------------------------------------------------
  | URI ROUTING
  | -------------------------------------------------------------------------
  | This file lets you re-map URI requests to specific controller functions.
  |
  | Typically there is a one-to-one relationship between a URL string
  | and its corresponding controller class/method. The segments in a
  | URL normally follow this pattern:
  |
  |	example.com/class/method/id/
  |
  | In some instances, however, you may want to remap this relationship
  | so that a different class/function is called than the one
  | corresponding to the URL.
  |
  | Please see the user guide for complete details:
  |
  |	http://codeigniter.com/user_guide/general/routing.html
  |
  | -------------------------------------------------------------------------
  | RESERVED ROUTES
  | -------------------------------------------------------------------------
  |
  | There area two reserved routes:
  |
  |	$route['default_controller'] = 'welcome';
  |
  | This route indicates which controller class should be loaded if the
  | URI contains no data. In the above example, the "welcome" class
  | would be loaded.
  |
  |	$route['404_override'] = 'errors/page_missing';
  |
  | This route will tell the Router what URI segments to use if those provided
  | in the URL cannot be matched to a valid route.
  |
 */

$route['default_controller'] = "index/index";
$route['404_override'] = '';

//Admin
$route['login'] = "authenticate/index";
$route['validate'] = "authenticate/validateUser";
$route['logout'] = "authenticate/logout";
//=====================================================================//
/*
 * **********************************************************************
 * **************** ADMISSION DEPARTMENT ROUTING START ******************
 * **********************************************************************
 */

//Admission
$route['admission'] = "admission/dashboard/index";
$route['admission/forms'] = "admission/forms/index";
$route['admission/list_forms_json/(:any)/(:num)/(:num)/(:num)'] = "admission/forms/getListJson/$1/$2/$3/$4";
$route['admission/forms/hall_ticket/(:num)'] = "admission/forms/viewHallTicket/$1";
$route['admission/forms/hall_ticket_pdf/(:num)'] = "admission/forms/hallicketPDF/$1";
//---UG FORM 
$route['admission/forms/add_ug'] = "admission/forms/addUGNewForm";
$route['admission/forms/save_ug'] = "admission/forms/saveUGNewForm";
$route['admission/forms/edit/(:num)/(:any)/(:any)'] = "admission/forms/editForm/$1/$2/$3";
$route['admission/forms/edit_ug_status/(:num)'] = "admission/forms/editUGStudentStatus/$1";
$route['admission/forms/update_ug_status/(:num)'] = "admission/forms/updateUGStudentStatus/$1";
$route['admission/forms/update_ug_basic/(:num)'] = "admission/forms/updateUGBasicForm/$1";
$route['admission/forms/update_ug_education/(:num)'] = "admission/forms/updateUGEduForm/$1";
//MDS-MD-MS-SUPER SPECIALITY
$route['admission/forms/add_pg'] = "admission/forms/addPGNewForm";
$route['admission/forms/save_pg'] = "admission/forms/savePGNewForm";
$route['admission/forms/update_pg/(:num)'] = "admission/forms/updatePGBasicForm/$1";
$route['admission/forms/update_pg_education/(:num)'] = "admission/forms/updatePGEduForm/$1";
//--PG OTHER
$route['admission/forms/add_pg_other'] = "admission/forms/addPGOtherNewForm";
$route['admission/forms/save_pg_other'] = "admission/forms/savePGOtherNewForm";
$route['admission/forms/update_pg_other_basic/(:num)'] = "admission/forms/updatePGOtherBasicForm/$1";
$route['admission/forms/update_pg_other_education/(:num)'] = "admission/forms/updatePGOtherEduForm/$1";
//--Common
$route['admission/forms/getPGCourseSpecialization/(:num)'] = "admission/forms/getPGCourseSpecialization/$1";
$route['admission/forms/update_ug_language/(:num)'] = "admission/forms/updateUGLanguagesForm/$1";
$route['admission/forms/update_ug_foreign/(:num)'] = "admission/forms/updateUGForeignForm/$1";
$route['admission/forms/update_ug_images/(:num)'] = "admission/forms/updateUGImagesForm/$1";
$route['admission/forms/view_image/(:num)/(:any)'] = "admission/forms/viewStudentImages/$1/$2";

//Entrance Exam Test
$route['admission/eet'] = "admission/eet/index";
$route['admission/eet/json/(:num)/(:num)/(:num)'] = "admission/eet/getJsonList/$1/$2/$3";
$route['admission/eet/edit_marks/(:num)'] = "admission/eet/editMarks/$1";
$route['admission/eet/update_marks/(:num)'] = "admission/eet/UpdateMarks/$1";

//Merit List
$route['admission/merit_list'] = "admission/merit_list/index";
$route['admission/merit_list/json/(:num)/(:num)'] = "admission/merit_list/getJsonList/$1/$2";
$route['admission/merit_list/print/(:num)/(:num)'] = "admission/merit_list/print_merit_list/$1/$2";

//counselling
$route['admission/counselling'] = "admission/counselling/index";
$route['admission/counselling/get_student'] = "admission/counselling/getStudentList";
$route['admission/counselling/get_student_history/(:num)'] = "admission/counselling/getStudentHistory/$1";
$route['admission/counselling/updateData/(:num)'] = "admission/counselling/updateStudentDetails/$1";

//Admission Confirmed
$route['admission/confirm'] = "admission/admission_confirm/index";
$route['admission/confirm/get_student'] = "admission/admission_confirm/getStudentList";
$route['admission/confirm/get_student_history/(:num)'] = "admission/admission_confirm/getStudentHistory/$1";
$route['admission/confirm/updateData/(:num)'] = "admission/admission_confirm/updateStudentDetails/$1";

//Student List
$route['admission/list'] = "admission/student_list/index";
$route['admission/list/json/(:num)/(:num)/(:num)/(:num)/(:any)'] = "admission/student_list/getJsonList/$1/$2/$3/$4/$5";
$route['admission/list/print/(:any)/(:any)/(:any)/(:any)/(:any)'] = "admission/student_list/print_student_list/$1/$2/$3/$4/$5";
$route['admission/list/coursecpecialization/(:num)'] = "admission/student_list/getPGCourseSpecialization/$1";

//Profile & Change Password
$route['admission/profile'] = "admission/profile/index";
$route['admission/change_password'] = "admission/profile/changePassword";
$route['admission/profile/updateProfile'] = "admission/profile/updateProfile";
$route['admission/profile/updatePassword'] = "admission/profile/updatePassword";

//Import Excel
$route['admission/import'] = "admission/import/index";
$route['admission/file/(:any)'] = "admission/import/uploadfile/$1";
$route['admission/import/upload'] = "admission/import/fetchDataFromExcel";
/*
 * **********************************************************************
 * ***************** ADMISSION DEPARTMENT ROUTING END *******************
 * **********************************************************************
 */
//=====================================================================//
/*
 * **********************************************************************
 * ****************** STUDENT SECTION ROUTING START *********************
 * **********************************************************************
 */

//Student Section
$route['student_section'] = "student_section/dashboard/index";

//Profile & Change Password
$route['student_section/profile'] = "student_section/profile/index";
$route['student_section/change_password'] = "student_section/profile/changePassword";
$route['student_section/profile/updateProfile'] = "student_section/profile/updateProfile";
$route['student_section/profile/updatePassword'] = "student_section/profile/updatePassword";

//Admission Confirmed
$route['student_section/confirm'] = "student_section/admission_confirm/index";
$route['student_section/confirm/get_student'] = "student_section/admission_confirm/getStudentList";
$route['student_section/confirm/get_student_history/(:num)'] = "student_section/admission_confirm/getStudentHistory/$1";
$route['student_section/confirm/updateData/(:num)'] = "student_section/admission_confirm/updateStudentDetails/$1";

//Student List
$route['student_section/list'] = "student_section/student_list/index";
$route['student_section/list/json/(:num)/(:num)/(:num)/(:num)/(:any)'] = "student_section/student_list/getJsonList/$1/$2/$3/$4/$5";
$route['student_section/list/print/(:any)/(:any)/(:any)/(:any)/(:any)'] = "student_section/student_list/print_student_list/$1/$2/$3/$4/$5";
/*
 * **********************************************************************
 * ******************* STUDENT SECTION ROUTING END **********************
 * **********************************************************************
 */
//=====================================================================//
/*
 * **********************************************************************
 * ****************** HOSTEL SECTION ROUTING START **********************
 * **********************************************************************
 */

//Hostel Section
$route['hostel'] = "hostel/dashboard/index";

//Check Student Status
$route['hostel/student'] = "hostel/student/index";
$route['hostel/list_forms_json/(:num)/(:num)'] = "hostel/student/getListJson/$1/$2";

//Profile & Change Password
$route['hostel/profile'] = "hostel/profile/index";
$route['hostel/change_password'] = "hostel/profile/changePassword";
$route['hostel/profile/updateProfile'] = "hostel/profile/updateProfile";
$route['hostel/profile/updatePassword'] = "hostel/profile/updatePassword";

/*
 * **********************************************************************
 * ******************* HOSTEL SECTION ROUTING END ***********************
 * **********************************************************************
 */
//=====================================================================//
/*
 * **********************************************************************
 * ********************** EXAM SECTION ROUTING START ********************
 * **********************************************************************
 */

//Exam Section
$route['exam_section'] = "exam_section/dashboard/index";

//Students


//Profile & Change Password
$route['exam_section/profile'] = "exam_section/profile/index";
$route['exam_section/change_password'] = "exam_section/profile/changePassword";
$route['exam_section/profile/updateProfile'] = "exam_section/profile/updateProfile";
$route['exam_section/profile/updatePassword'] = "exam_section/profile/updatePassword";

/*
 * **********************************************************************
 * *********************** EXAM SECTION ROUTING END *********************
 * **********************************************************************
 */
//=====================================================================//
/* End of file routes.php */
/* Location: ./application/config/routes.php */