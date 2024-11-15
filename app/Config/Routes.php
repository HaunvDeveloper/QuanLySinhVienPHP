<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/login', 'User::login');
$routes->post('/login', 'User::login');
$routes->get('/forgetpassword', 'User::forgetpassword');
$routes->get('/resetpassword', 'User::resetpassword');
$routes->get('/checkotp', 'User::checkotp');
$routes->get('/teacher', 'Teacher::teacher');
$routes->get('/course', 'Course::list');
