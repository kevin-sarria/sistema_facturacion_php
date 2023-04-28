<?php

namespace Controllers;

include_once __DIR__ . '/../includes/funciones.php';

use Model\ActiveRecord;
use MVC\Router;

class DashboardController {

    public static function index( Router $router ) {

        if( !isAuth() ) {
            header('Location: /');
        }

        $router->render('admin/dashboard/index', [
            'titulo' => 'Dashboard'
        ]);

    }

    public static function inventario( Router $router ) {

        if( !isAuth() ) {
            header('Location: /');
        }

        $router->render('admin/inventario/index', [
            "titulo" => "Inventario"
        ]);

    }

}


?>