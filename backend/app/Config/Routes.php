<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->match(['get', 'post'], 'blog', 'Home::blogpage');
$routes->match(['get', 'post'], 'blog/page/(:num)', 'Home::blogpage/$1');
$routes->match(['get', 'post'], 'custom-box-videos', 'Home::videopage');
$routes->match(['get', 'post'], 'custom-box-videos/page/(:num)', 'Home::videopage/$1');  
$routes->get('search', 'SearchController::index');
$routes->match(['get', 'post'], 'saveForm', 'Home::submit_form');  
$routes->match(['get', 'post'], 'submitQuoteForm/', 'EmailController::submitQuoteForm'); 
// $routes->match(['get', 'post'], 'video/(:num)', 'Home::page/$1');
$routes->match(['get', 'post'], '(:any)/page/(:num)', 'Home::category_product/$1/$2');    
 $routes->get('(:any)', 'Home::page/$1');




 