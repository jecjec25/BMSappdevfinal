<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('source', 'DemographicController::demographics');
$routes->get('residents', 'ResidentController::residents');
$routes->get('purok', 'ResidentController::getResidentInfo');
$routes->get('barangay', 'ResidentController::getbarangay');


//routes for inserting of datas in admin
$routes->group('admin', static function($routes){
$routes->post('save', 'DemographicController::SaveData');
$routes->post('barangay', 'BarangayController::InsertBrgy');
$routes->post('insertbrgyofficials', 'BarangayController::InsertOfficial');
$routes->post('addResidents', 'ResidentController::saveResident');
$routes->get('brgyofficials', 'BarangayController::barangayofficial');
 });


 $routes->get('hi', 'UserController::hi');

$routes->group('user', static function($routes){
$routes->post('register', 'UserController::register');
$routes->post('loginAuth', 'UserController::loginAuth');
});
$routes->get('resident', 'ResidentController::residentCount');
$routes->post('/send', 'EmailController::sendEmail');
