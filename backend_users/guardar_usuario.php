<?php
    include_once "cors.php";
    include_once "api.php";

    $usuario = json_decode(file_get_contents("php://input"));
    $resultado = guardarUsuario($usuario);
    echo json_encode($resultado);
?>