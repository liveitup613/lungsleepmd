<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['services/pulmonary_medicine'] = 'home/pulmonary_medicine';
$route['services/sleep_medicine'] = 'home/sleep_medicine';
$route['services/critical_medicine'] = 'home/critical_medicine';
$route['service-fees'] = 'home/sevice_fees';
$route['additional-services'] = 'home/additional_services';
$route['insurance'] = 'home/insurance';
$route['patient-forms'] = 'home/patient_forms';
$route['instructional-medical-videos'] = 'home/instructional_medical_videos';
$route['blogs'] = 'home/blogs';
$route['blogs/view/(:num)'] = 'home/blogView/$1';
$route['about-us'] = 'home/aboutUs';
$route['contact-us'] = 'home/contactUs';

//Admin Page

$route['admin'] = 'manageLogin';
$route['admin/home'] = 'manageHome';
$route['admin/services/pulmonary_medicine'] = 'manageServices/pulmonary_medicine';
$route['admin/services/sleep_medicine']  = 'manageServices/sleep_medicine';
$route['admin/services/critical_care'] = 'manageServices/critical_care_medicine';
$route['admin/services/additional'] = 'manageServices/additional';
$route['admin/service_fee'] = 'manageServices/service_fees';
$route['admin/about-us'] = 'manageAboutUs';
$route['admin/links/insurance'] = 'manageQuickLinks/insurance';
$route['admin/links/patient_forms'] = 'manageQuickLinks/patient_form';
$route['admin/links/medical_videos'] = 'manageQuickLinks/medical_videos';
$route['admin/links/blogs'] = 'manageQuickLinks/blogs';
$route['admin/links/blog/edit/(:num)'] = 'manageQuickLinks/editBlog/$1';
$route['admin/contact-us'] = 'manageContact';

$route['admin/profile'] = 'manageLogin/userprofile';
$route['admin/logout'] = 'manageLogin/logout';


// Apis

$route['api/home/updateContnet'] = 'manageHome/updateContnet';
$route['api/services/update'] = 'manageServices/updateService';
$route['api/services/additional/add'] = 'manageServices/addAdditional';
$route['api/services/additional/delete'] = 'manageServices/deleteAdditional';
$route['api/services/additional/update'] = 'manageServices/updateAdditional';
$route['api/services/fee/add'] = 'manageServices/addFee';
$route['api/services/fee/get'] = 'manageServices/getFee';
$route['api/services/fee/delete'] = 'manageServices/deleteFee';
$route['api/services/fee/update'] = 'manageServices/updateFee';
$route['api/about-us/update'] = 'manageAboutUs/updateContent';
$route['api/resource/add'] = 'manageAboutUs/addImage';
$route['api/resource/delete'] = 'manageAboutUs/deleteImage';
$route['api/patient-form/add'] = 'manageQuickLinks/addPatientForm';
$route['api/patient-form/get'] = 'manageQuickLinks/getPatientForm';
$route['api/patient-form/update'] = 'manageQuickLinks/updatePatientForm';
$route['api/patient-form/delete'] = 'manageQuickLinks/deletePatientForm';
$route['api/medical-video/add'] = 'manageQuickLinks/addMedicalVideo';
$route['api/medical-video/get'] = 'manageQuickLinks/getMedicalVideo';
$route['api/medical-video/delete'] = 'manageQuickLinks/deleteMedicalVideo';
$route['api/medical-video/update'] = 'manageQuickLinks/updateMedicalVideo';
$route['api/blog/delete'] = 'manageQuickLinks/deleteBlog';
$route['api/blog/edit'] = 'manageQuickLinks/updateBlog';
$route['api/contact/update'] = 'manageContact/update';
$route['api/profile/update'] = 'manageLogin/updateProfile';

$route['api/sendEmail'] = 'home/sendEmail';
