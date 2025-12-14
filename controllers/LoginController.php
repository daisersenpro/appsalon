<?php

namespace Controllers;

use Classes\Email;
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

            // Revisar que alertas esté vacío
            if (empty($alertas)) {
                // Verificar que el usuario no esté registrado
                $resultado = $usuario->existeUsuario();

                if($resultado->num_rows){
                    $alertas = Usuario::getAlertas();
                }else {
                    //Hashear el password
                    $usuario->hashPassword();

                    //Generar un token único
                    $usuario->crearToken();

                    //Enviar el email
                    $email = new Email($usuario->email, $usuario->nombre, $usuario->token);

                    $email->enviarConfirmacion();

                    debuguear($usuario);
                }
            }

        }

        $router->render('auth/crear-cuenta', [
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }
}