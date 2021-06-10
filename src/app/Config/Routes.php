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
$routes->setDefaultController('PagesController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);
 
/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'PagesController::index');

//$routes->add('(:segment)', 'ProfileController::index/$1');
//$routes->add('(:any)/change', 'ProfileController::ChangeProfile');

//LOGIN
$routes->match(['get', 'post'],'login', 'UserController::index', ['as' => 'login_page']);
$routes->match(['get', 'post'], 'register', 'UserController::register', ['as' => 'register_page']);

//CRUD 
// Show the project boxes on homepage
$routes->get('projects', 'ProjectsController::index' );
// Goes to create function
$routes->get('projects/create', 'ProjectsController::create', ['as' => 'create_page']);
// Goes to save function 
$routes->post('projects/create/', 'ProjectsController::save/$1');
// Views the project page
$routes->get('projects/(:num)', 'ProjectsController::view/$1', ['as' => 'project_page']);
// Goes to the edit function
$routes->get('projects/edit/(:num)', 'ProjectsController::edit/$1', ['as' => 'edit_page']);
// Goes to the update function
$routes->post('projects/update/(:num)', 'ProjectsController::update/$1', ['as' => 'update']);
// Goes to the delete function
$routes->get('projects/delete/(:num)', 'ProjectsController::delete/$1');

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
