<?php 

require 'admin/config.php';

require 'funtions.php';

$conexion = conexion($bd_config);

if (!$conexion) {
    header('location: error.php');
}

$posts = obtener_Post($blog_config['post_por_pagina'], $conexion);

if (!$posts) {
    header('location: error.php');
}

require 'views/index.view.php';

?>