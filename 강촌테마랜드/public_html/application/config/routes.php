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
$route['leisure'] = 'welcome/leisure';
$route['leisure2'] = 'welcome/leisure2';
$route['leisure3'] = 'welcome/leisure3';
$route['leisure4'] = 'welcome/leisure4';
$route['package2'] = 'welcome/package2';
$route['package3'] = 'welcome/package3';
$route['package4'] = 'welcome/package4';
$route['reserve'] = 'welcome/reserve';
$route['check'] = 'welcome/check';
$route['check2'] = 'welcome/check2';
$route['sms'] = 'welcome/sms';
$route['p_info'] = 'welcome/p_info';

$route['inistdpay'] = 'welcome/inistdpay';
$route['inistdpay_return'] = 'welcome/inistdpay_return';
$route['inistdpay_close'] = 'welcome/inistdpay_close';
$route['inimobile_mo_return'] = 'welcome/inimobile_mo_return';

$route['adminLogin'] = 'welcome/adminLogin';
$route['adminSetting'] = 'welcome/adminSetting';
$route['adminReserve'] = 'welcome/adminReserve';
$route['test'] = 'welcome/test';

$route['INIpayStdMakeSignature'] = 'welcome/INIpayStdMakeSignature';

$route['login'] = 'login/index';
$route['logout'] = 'func/logout';