<?php session_start();
require 'admin/config.php';
require 'funtions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = limpiardatos($_POST['usuario']);
    $password = limpiardatos($_POST['password']);

    if ($usuario == $blog_admin['usuario'] && $password == $blog_admin['password']) {
        $_SESSION['admin'] = $blog_admin['usuario'];
        header('location: ' . RUTA . '/admin');
    }
}




require 'views/login.view.php';

?>