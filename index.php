<?php

require_once __DIR__ . '/includes/app.php';

use MVC\Router;
use Controllers\AuthController;
use Controllers\DashboardController;
use Controllers\NotFoundController;

$router = new Router();

// Login
$router->get('/', [AuthController::class, 'login']);
$router->post('/', [AuthController::class, 'login']);
$router->get('/crear-super-usuario', [AuthController::class, 'createSuperAdmin']);
$router->post('/crear-super-usuario', [AuthController::class, 'createSuperAdmin']);

// Admin
$router->get('/admin/dashboard', [DashboardController::class, 'index']);
$router->get('/admin/inventario', [DashboardController::class, 'inventario']);

// No se encuentra la ruta
$router->get('/404', [NotFoundController::class, 'index']);


$router->comprobarRutas();

?>