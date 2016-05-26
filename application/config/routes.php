<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
$route['default_controller'] = 'user/index';
$route['404_override'] = '';

/*admin*/
$route['admin'] = 'user/index';
$route['admin/signup'] = 'user/signup';
$route['admin/create_member'] = 'user/create_member';
$route['admin/login'] = 'user/index';
$route['admin/logout'] = 'user/logout';
$route['admin/login/validate_credentials'] = 'user/validate_credentials';

$route['admin/products'] = 'admin/products/index';
$route['admin/products/add'] = 'admin/products/add';
$route['admin/products/update'] = 'admin/products/update';
$route['admin/products/update/(:any)'] = 'admin/products/update/$1';
$route['admin/products/delete/(:any)'] = 'admin/products/delete/$1';
$route['admin/products/(:any)'] = 'admin/products/index/$1'; //$1 = page number

$route['admin/manufacturers'] = 'admin/manufacturers/index';
$route['admin/manufacturers/add'] = 'admin/manufacturers/add';
$route['admin/manufacturers/update'] = 'admin/manufacturers/update';
$route['admin/manufacturers/update/(:any)'] = 'admin/manufacturers/update/$1';
$route['admin/manufacturers/delete/(:any)'] = 'admin/manufacturers/delete/$1';
$route['admin/manufacturers/(:any)'] = 'admin/manufacturers/index/$1'; //$1 = page number

$route['admin/keys'] = 'admin/keys/index';
$route['admin/keys/add'] = 'admin/keys/add';
$route['admin/keys/update'] = 'admin/keys/update';
$route['admin/keys/update/(:any)'] = 'admin/keys/update/$1';
$route['admin/keys/delete/(:any)'] = 'admin/keys/delete/$1';
$route['admin/keys/(:any)'] = 'admin/keys/index/$1'; //$1 = page number


/* End of file routes.php */
/* Location: ./application/config/routes.php */