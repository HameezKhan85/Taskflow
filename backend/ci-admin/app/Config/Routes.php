<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::dashboard');
$routes->get('home/', 'Home::dashboard');
$routes->match(['get', 'post'], 'login/', 'Login::index');
$routes->match(['get', 'post'], 'edituser/(:num)', 'Home::edituser/$1');
$routes->match(['get', 'post'], 'editmenu/(:num)', 'Home::editmenu/$1');
$routes->get('logout/', 'Login::logout');
$routes->match(['get', 'post'], 'getajax/', 'Home::getData12');
$routes->match(['get', 'post'], 'redirection/(:any)', 'Home::manange_redirection/$1');
$routes->match(['get', 'post'], 'editredirection/(:num)', 'Home::edit_redirection/$1');
$routes->match(['get', 'post'], 'saveSetting', 'Home::save_site_setting');

$routes->match(['get', 'post'], 'gallery_view_ajax', 'Home::Ajax_galleries');
$routes->match(['get', 'post'], 'user/(:any)', 'Home::manangeuser/$1');
$routes->match(['get', 'post'], 'tech/(:any)', 'Home::manangerouts/$1');


