<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$current_page = 'homepage';

/**/

$route['Homepage_con'] = 'Homepage_con';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['(:any)'] = 'Homepage_con/$1';
