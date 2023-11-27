<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/login', 'LoginController::index');
$routes->get('/register', 'RegisterController::register');
$routes->match(['GET', 'POST'], '/LoginController/login', 'LoginController::loginAuth');
$routes->match(['GET', 'POST'], '/RegisterController/register', 'RegisterController::store');
$routes->get('/index', 'RegisterController::index');
//$routes->get('/demographics', 'ViewController::demography');
$routes->get('/certificate-request', 'ViewController::certiReq');
$routes->get('/residentinfo', 'ViewController::residentinfo');
$routes->get('/brgy-certificate', 'ViewController::brgycertificate');
$routes->get('/announcement', 'ViewController::announcement');
$routes->get('/dash', 'ViewController::dashboard');
$routes->get('/home', 'ViewController::home'); 
$routes->get('/about', 'ViewController::about');  
$routes->get('/barangay', 'ViewController::barangays');

//CRUD - demographic data
$routes->get('/demographics', 'DemographicController::demographics');
$routes->get('/barangay-add', 'DemographicController::create');
$routes->get('demographiccontroller/save', 'DemographicController::barangay_store');
