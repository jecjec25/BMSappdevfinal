<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('source', 'DemographicController::demographics');
$routes->get('residents', 'ResidentController::residents');
$routes->group('admin', function($routes){
    $routes->post('save', 'DemographicController::SaveData');
}); //routes for inserting of datas in admin
