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
$route['default_controller'] = 'User_controller';
$route['index']     = 'User_controller/index';
$route['about']     = 'User_controller/about';
$route['contact']   = 'User_controller/contact';
$route['news']      = 'User_controller/news';
$route['news_single/(.*)'] = 'User_controller/news_single/$1';
$route['category/(.*)'] = 'User_controller/category/$1';



                // ADMIN

$route['admin_login_page']        = 'Admin_controller/index';
$route['login_act']               = 'Admin_controller/login_act';
$route['logout']               = 'Admin_controller/logout';
$route['admin_dashboard']         = 'Admin_controller/dashboard';
$route['admin_news_list']         = 'Admin_controller/news_list';

$route['admin_news_create']       = 'Admin_controller/news_create';
$route['admin_news_create_act']   = 'Admin_controller/news_create_act';

$route['admin_view_news/(.*)']    = 'Admin_controller/view_news/$1';
$route['admin_delete_news/(.*)']  = 'Admin_controller/delete_news/$1';

$route['admin_news_update/(.*)']  = 'Admin_controller/news_update/$1';
$route['admin_news_update_act/(.*)']  = 'Admin_controller/news_update_act/$1';

$route['admin_not_found']         = 'Admin_controller/error404_page';





$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
