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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['solutions/budget_analysis'] = 'BudgetAnalysis/index';
$route['solutions/customer_stories'] = 'CustomerStories/index';
$route['solutions/industry_specific'] = 'IndustrySpecific/index';
$route['/get_a_demo'] = 'Get-a_demo/index';
// services
$route['services/abm'] = 'Abm/index';
$route['services/contentsyndication'] = 'Contentsyndication/index';
$route['services/email'] = 'Email/index';
$route['services/intent'] = 'Intent/index';


// company
$route['company/about'] = 'About/index';
$route['company/blogs'] = 'Blogs/index';
$route['company/career'] = 'Career/index';
$route['company/newsroom'] = 'Newsroom/index';

// footer

$route['footer/c_policy'] = 'C_policy/index';
$route['footer/terms_of_use'] = 'Terms_of_use/index';
$route['footer/privacy_policy'] = 'Privacy_Policy/index';
$route['footer/cookie_policy'] = 'Cookies_policy/index';
$route['footer/do_not_sell_my_data'] = 'Do_not_s_m_data/index';





