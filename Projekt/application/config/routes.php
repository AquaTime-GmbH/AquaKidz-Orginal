<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$current_page = 'homepage';

/**/

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['(:any)'] = 'Homepage_con/$1';
$route['index'] = 'Homepage_con/index';
