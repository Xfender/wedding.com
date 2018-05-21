<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['wedd'] = 'wedding/index';
$route['wedd/create'] = 'wedding/create';
$route['wedd/update'] = 'wedding/update';
$route['wedd/Vcreate'] = 'wedding/view_create';
$route['wedd/edit/(:any)'] = 'wedding/edit/$1';
$route['wedd/delete/(:any)'] = 'wedding/delete/$1';

$route['default_controller'] ='wedding/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
