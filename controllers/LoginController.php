<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;

class LoginController {
    public static function login(Router $router) {
        
        $router->render('auth/login');
      
    }

    public static function logout() {
        // Lógica de cierre de sesión
        echo "Cerrando sesión";
    }

    public static function olvide(Router $router) {
        // Mostrar formulario de recuperación de contraseña
        $router->render('auth/olvide');
    }

    public static function recuperar() {
        // Lógica para restablecer la contraseña
        echo "Página para recuperar la contraseña";
    }

    public static function crear(Router $router) {
    // Lógica para crear una cuenta

         $usuario = new Usuario;

         //Alertas vacías
         $alertas = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();

        }

        $router->render('auth/crear-cuenta', [
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }
}