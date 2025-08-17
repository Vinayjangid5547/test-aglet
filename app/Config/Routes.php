<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/***************************************************Customer Routes*************************************************/

$routes->get('/', 'Dashboard::index');
$routes->get('dashboard', 'Dashboard::index');
$routes->get('email', 'Dashboard::sendMail');

/***************************************************Admin Routes*************************************************/
$routes->group('admin', function ($routes) {

    // Login Routes
    $routes->get('/', 'admin\Login::index');
    $routes->get('login', 'admin\Login::index');
    $routes->post('login-validate', 'admin\Login::login');

    // Dashboard Routes
    $routes->get('dashboard', 'admin\Dashboard::index');

    // Customer Routes
    $routes->get('customers', 'admin\Customer::index');
    $routes->get('add-customer', 'admin\Customer::add_customer');
    $routes->post('insert-customer', 'admin\Customer::insert_customer');

    // Order Routes
    $routes->get('orders', 'admin\Order::index');
});
