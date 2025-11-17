<?php

// Valores de conexión - ajústalos según tu entorno XAMPP
$db_host = '127.0.0.1'; // usar 127.0.0.1 en lugar de 'localhost' evita ambigüedades cuando se usa puerto
$db_port = 3307;        // puerto de MySQL en tu XAMPP portable
$db_user = 'root';
$db_pass = '';          // contraseña de root (vacía si no la configuraste)
$db_name = 'appsalon';  // nombre de la base de datos que creaste

$db = @mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);

// Si la conexión con puerto específico falla, intentar con 'localhost' (puerto por defecto)
if (!$db) {
    $db = @mysqli_connect('localhost', $db_user, $db_pass, $db_name);
}

if (!$db) {
    echo "Error: No se pudo conectar a MySQL con los parámetros:\n";
    echo "Host(s): {$db_host}:{$db_port} y localhost (puerto por defecto)\n";
    echo "Usuario: {$db_user}\n";
    echo "Base de datos: {$db_name}\n";
    echo "errno de depuración: " . mysqli_connect_errno() . "\n";
    echo "error de depuración: " . mysqli_connect_error() . "\n";
    exit;
}
