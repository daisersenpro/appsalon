<?php

namespace Controllers;

use MVC\Router;

class LoginController {
    public static function login(Router $router) {
        
        $router->render('auth/login');
      
    }
    public static function logout() {
        // Lógica de cierre de sesión
        echo "Cerrando sesión";
    }
    public static function olvide() {
        // Lógica de recuperación de contraseña
        echo "Página de restablecer de contraseña";
    }
    public static function recuperar() {
        // Lógica para restablecer la contraseña
        echo "Página para recuperar la contraseña";
    }
    public static function crear() {
        // Lógica para crear una cuenta
        echo "Página para crear una cuenta";
    }
}