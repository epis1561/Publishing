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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['header'] = 'welcome/header';
$route['header'] = 'welcome/footer';
$route['about'] = 'welcome/about';
$route['room'] = 'welcome/room';
$route['room2'] = 'welcome/room2';
$route['program'] = 'welcome/program';
$route['program2'] = 'welcome/program2';
$route['facility'] = 'welcome/facility';
$route['facility2'] = 'welcome/facility2';
$route['p_info'] = 'welcome/p_info';
$route['reser01'] = 'welcome/reser01';
$route['kakao'] = 'welcome/kakao';
$route['BBQ'] = 'welcome/BBQ';
$route['BBQ2'] = 'welcome/BBQ2';
$route['reservation01'] = 'welcome/reservation01';
$route['reservation01_01'] = 'welcome/reservation01_01';
$route['reservation02'] = 'welcome/reservation02';
$route['check'] = 'welcome/check';
$route['check2'] = 'welcome/check2';
$route['check3'] = 'welcome/check3';
$route['home'] = 'welcome/home';
$route['special1'] = 'welcome/special1';
$route['special2'] = 'welcome/special2';
$route['special3'] = 'welcome/special3';
$route['special4'] = 'welcome/special4';
$route['special5'] = 'welcome/special5';
$route['special6'] = 'welcome/special6';
$route['special7'] = 'welcome/special7';
$route['special8'] = 'welcome/special8';



$route['login'] = 'login/index';
$route['logout'] = 'func/logout';