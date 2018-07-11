<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_user';
$route['user'] = 'C_user';
$route['user/(:any)']='C_user/view/$1';
$route['admin'] = 'C_admin';
$route['admin/(:any)']='C_user/view/$1';

$route['profile'] = 'C_profile';

$route['(:any)']='C_home/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
