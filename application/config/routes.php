<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
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
$route['default_controller'] = "home";
/* Ciudades */
$route['home'] = 'home/';
$route['televideo'] = 'home/section/$1/';
$route['rastreo'] = 'home/section/$1/';
$route['monitoreo'] = 'home/section/$1/';
$route['equipos'] = 'home/section/$1/';
$route['sitemap'] = 'home/section/$1/';
$route['error'] = 'home/section/$1/';
$route['sensor-doble-tecnologia'] = 'home/productos/$1/';
$route['magneticos'] = 'home/productos/$1/';
$route['teclado'] = 'home/productos/$1/';
$route['boton-panico'] = 'home/productos/$1/';
$route['sirena'] = 'home/productos/$1/';
$route['radio'] = 'home/productos/$1/';
$route['vibro-sensor'] = 'home/productos/$1/';

/* Ofertas */

/* Adwords */
$route['busqueda'] = "busqueda/index/";
$route['busqueda/(:any)'] = 'busqueda/section/$1/';

$route['display'] = "display/index/";
$route['display/(:any)'] = 'display/section/$1/';

$route['registroseo'] = "registroseo/index/";
$route['registroseo/(:any)'] = 'registroseo/section/$1/';

$route['facebook'] = "facebook/index/";
$route['facebook/(:any)'] = 'facebook/section/$1/';

$route['instagram'] = "instagram/index/";
$route['instagram/(:any)'] = 'instagram/section/$1/';

$route['waze'] = "waze/index/";
$route['waze/(:any)'] = 'waze/section/$1/';

$route['mailing'] = "mailing/index/";
$route['mailing/(:any)'] = 'mailing/section/$1/';

$route['gracias'] = 'gracias/index/';
/* Pagina de error */
$route['404_override'] = 'home/error';

/* End of file routes.php */
/* Location: ./application/config/routes.php */