<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');


// no boostrap
$routes->get('/', 'SubjectsController::index');
$routes->get('subjects/create', 'SubjectsController::create');
$routes->post('subjects/store', 'SubjectsController::store');
$routes->get('subjects/edit/(:num)', 'SubjectsController::edit/$1');
$routes->post('subjects/update/(:num)', 'SubjectsController::update/$1');
$routes->get('subjects/delete/(:num)', 'SubjectsController::delete/$1');

// with boostrap
$routes->get('/Design', 'SubjectsControllerDesign::index');
$routes->get('subjectsDesign/create', 'SubjectsControllerDesign::create');
$routes->post('subjectsDesign/store', 'SubjectsControllerDesign::store');
$routes->get('subjectsDesign/edit/(:num)', 'SubjectsControllerDesign::edit/$1');
$routes->post('subjectsDesign/update/(:num)', 'SubjectsControllerDesign::update/$1');
$routes->get('subjectsDesign/delete/(:num)', 'SubjectsControllerDesign::delete/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}