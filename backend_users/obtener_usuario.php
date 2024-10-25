<?php
    include_once "cors.php";
    include_once "api.php";

    if (!isset($_GET["id"])) {
        echo json_encode(null);
        exit;
    }

    $id = $_GET["id"];
    $usuario = obtenerUsuarioPorId($id);
    echo json_encode($usuario);
?>