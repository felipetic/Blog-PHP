<?php session_start();

// Archivo Index Del Admin

require 'config.php';
require '../funtions.php';

$conexion = conexion($bd_config);

comprobarSession();



if (!$conexion) {
    header('location: ../error.php');
}


$posts = obtener_Post($blog_config['post_por_pagina'], $conexion);


require '../views/admin_index.view.php';

?>