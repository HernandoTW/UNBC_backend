<?php
    include_once "cors.php";
    include_once "api.php";
    $usuarios = obtenerUsuarios();
    echo json_encode($usuarios);
?>