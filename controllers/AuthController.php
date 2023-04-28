<?php

namespace Controllers;

use Model\Usuario;
use MVC\Router;

class AuthController {

    public static function login( Router $router ) {

        $alertas = [];

        if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

            $usuario = new Usuario($_POST);
            $alertas = $usuario->validarLogin();

            if( empty($alertas) ) {
                // Verificar que el usuario exista
                $usuario = Usuario::where('correo', $usuario->correo);
                if( !$usuario ) {
                    Usuario::setAlerta('error', 'El usuario no existe o esta baneado');
                } else {
                    // Si el usuario existe
                    if( password_verify($_POST['password'], $usuario->password) ) {

                        // Iniciar Sesion
                        session_start();
                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['nombre'] = $usuario->nombre;
                        $_SESSION['correo'] = $usuario->correo;
                        $_SESSION['admin'] = $usuario->admin;
                        $_SESSION['user'] = $usuario->user;
                        

                        if( $usuario ) {
                            header('Location: /admin/dashboard');
                        }
                    }
                }
            }

        }

        $alertas = Usuario::getAlertas();

        // Renderizamos la vista
        $router->render( 'auth/login', [
            'titulo' => 'Iniciar Sesion',
            'alertas' => $alertas
        ]);

    }

    public static function createSuperAdmin( Router $router ) {

        $usuario = new Usuario;

        if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

            $usuario->sincronizar($_POST);
            $usuario->nombre = "Kevin Sarria";
            $usuario->admin = 1;
                
            // Hashear el password
            $usuario->hashPassword();

            // Crear un nuevo usuario
            $resultado =  $usuario->guardar();
                    

            if($resultado) {
                var_dump($resultado);
            }   

        }

        // Renderizamos la vista
        $router->render( 'auth/superUser', [
            'titulo' => 'Crear Super Usuario'
        ]);

    }

}
