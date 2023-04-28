<?php


namespace Controllers;

use MVC\Router;

class NotFoundController {

    public static function index( Router $router ) {
    
        $router->render( '/notFound/404', [
            "titulo" => "404"
        ] );
        
    }

}


?>