<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');
$routes->get('inicio', 'Vivienda::viewInicio');
$routes->get('ofertas', 'Vivienda::viewOfertas');
$routes->get('novedades', 'Vivienda::viewNovedades');
$routes->get('mas-informacion', 'Pages::viewMasInformacion');
$routes->get('login', 'RegistroLogin::viewLogIn');
$routes->get('signup', 'RegistroLogin::viewSignUp');
$routes->get('alta', 'Vivienda::viewAlta', ['filter' => 'user_auth']);
$routes->get('users', 'User::list', ['filter' => 'admin_auth']);
$routes->get('viviendas', 'Vivienda::list', ['filter' => 'admin_auth']);
$routes->get('mis-propiedades', 'User::misPropiedades', ['filter' => 'user_auth']);
$routes->get('buscarPropiedadesUsuario', 'User::propiedadesUsuario', ['filter' => 'user_auth']);
$routes->get('buscarPropiedadesCompradas', 'User::propiedadesCompradas', ['filter' => 'user_auth']);
$routes->get('buscarPropiedadesAlquiladas', 'User::propiedadesAlquiladas', ['filter' => 'user_auth']);

$routes->match(['get', 'post'], '/', '\App\Controllers\User::unauthorized');
$routes->match(['get', 'post'], '/loginprocess', '\App\Controllers\User::login');
$routes->match(['get', 'post'], '/login', '\App\Controllers\RegistroLogin::viewLogIn');
$routes->match(['get', 'post'], '/register', '\App\Controllers\User::register');
$routes->match(['get', 'post'], '/subirVivienda', '\App\Controllers\Vivienda::darDeAlta', ['filter' => 'user_auth']);
$routes->match(['get', 'post'], '/editar', '\App\Controllers\Vivienda::viewEditar', ['filter' => 'user_auth']);
$routes->match(['get', 'post'], '/editarVivienda', '\App\Controllers\Vivienda::editar', ['filter' => 'user_auth']);
$routes->match(['get', 'post'], '/eliminar', '\App\Controllers\Vivienda::eliminar', ['filter' => 'user_auth']);
$routes->match(['get'], '/logged', '\App\Controllers\User::user_ok', ['filter' => 'user_auth']);
$routes->match(['get'], '/admin_list', '\App\Controllers\User::list',['filter' => 'admin_auth']);
$routes->match(['get'], '/unauthorized', '\App\Controllers\User::unauthorized');
$routes->match(['get'], '/logout', '\App\Controllers\User::logout');

$routes->post('busquedadProcess', 'Vivienda::buscar');
$routes->post('comprarTransaccion', 'Vivienda::comprar', ['filter' => 'user_auth']);
$routes->post('alquilarTransaccion', 'Vivienda::alquilar', ['filter' => 'user_auth']);

$routes->get('(:segment)', 'Pages::view');


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
