<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['admin'] = 'welcome/login';
$route['login'] = 'loginr';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
