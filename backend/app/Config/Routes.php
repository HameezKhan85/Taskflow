<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//*************** Auth Routes  ************************* */
$routes->match(['get', 'post'], 'api/login', 'Login::index');
$routes->post('api/create_account','Login::create_account');
$routes->post('api/logout','Login::logout');
//*************** Workspace Routes  ************************* */
$routes->get('api/workspaces', 'HomeController::view_workspaces');
$routes->post('api/action', 'HomeController::action');
$routes->post('api/invite/generate','HomeController::generateInviteLink');
$routes->get('api/invite/accept/(:segment)','HomeController::acceptInvite/$1');
$routes->post('api/disableLink','HomeController::disableInviteLink');
$routes->get('api/workspaceUser','HomeController::getInviteUsers');
$routes->get('api/updateWorkspaceUser','HomeController::updateInviteUsers');




 