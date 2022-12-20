<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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
$routes->get('/dashboard', 'Admin::index');
// $routes->get('/login', 'Auth::index');
// $routes->get('/register', 'Auth::register');


// Category
$routes->get('/category', 'Category::index');
$routes->get('/category/form', 'Category::form');
$routes->get('/category/formupdate/(:num)', 'Category::formupdate/$1');
$routes->post('/category/tambah', 'Category::tambah');
$routes->post('/category/update', 'Category::update');
$routes->get('/category/delete/(:num)', 'Category::delete/$1');

// Color
$routes->get('/color', 'Color::index');
$routes->get('/color/form', 'Color::form');
$routes->post('/color/tambah', 'Color::tambah');
$routes->get('/color/formupdate/(:num)', 'Color::formupdate/$1');
$routes->post('/color/update', 'Color::update');
$routes->get('/color/delete/(:num)', 'Color::delete/$1');

// Product
$routes->get('/product', 'Product::index');
$routes->get('/product/form', 'Product::form');
$routes->post('/product/tambah', 'Product::tambah');
$routes->get('/product/formupdate/(:num)', 'Product::formupdate/$1');
$routes->post('/product/update', 'Product::update');
$routes->get('/product/delete/(:num)', 'Product::delete/$1');

// Variant
$routes->get('/variant', 'Variant::index');
$routes->get('/variant/form', 'Variant::form');
$routes->post('/variant/tambah', 'Variant::tambah');
$routes->get('/variant/formupdate/(:num)', 'Variant::formupdate/$1');
$routes->post('/variant/update', 'Variant::update');
$routes->get('/variant/delete/(:num)', 'Variant::delete/$1');

// Faq
$routes->get('/faq', 'Faq::index');
$routes->get('/faq/form', 'Faq::form');
$routes->post('/faq/tambah', 'Faq::tambah');
$routes->get('/faq/formupdate/(:num)', 'Faq::formupdate/$1');
$routes->post('/faq/update', 'Faq::update');
$routes->get('/faq/delete/(:num)', 'Faq::delete/$1');

// setting
$routes->get('/setting', 'Setting::index');
$routes->post('/setting/update', 'Setting::update');


// ===================================User=======================================================================================================

// home
$routes->get('/', 'Giftin::index');
$routes->get('/about', 'About::index');
$routes->get('/faqs', 'Faqs::index');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
