<?php
    function eliminarUsuario($id)
    {
        $bd = obtenerConexion();
        $sentencia = $bd->prepare("DELETE FROM users WHERE id = ?");
        return $sentencia->execute([$id]);
    }

    function actualizarUsuario($usuario)
    {
        $bd = obtenerConexion();
        $sentencia = $bd->prepare("UPDATE users SET name = ?, lastname = ?, email = ?, phone = ?, password = ? WHERE id = ?");
        return $sentencia->execute([$usuario->name,, $usuario->lastname, $usuario->email, $usuario->phone, $usuario->password, $usuario->id]);
    }

    function obtenerUsuarioPorId($id)
    {
        $bd = obtenerConexion();
        $sentencia = $bd->prepare("SELECT id, name, lastname, email, phone, password FROM users WHERE id = ?");
        $sentencia->execute([$id]);
        return $sentencia->fetchObject();
    }

    function obtenerUsuarios()
    {
        $bd = obtenerConexion();
        $sentencia = $bd->query("SELECT id, name, lastname, email, phone, password FROM users");
        return $sentencia->fetchAll();
    }

    function guardarUsuario($usuario)
    {
        $bd = obtenerConexion();
        $sentencia = $bd->prepare("INSERT INTO users(name, lastname, email, phone, password) VALUES (?, ?, ?, ?, ?)");
        return $sentencia->execute([$usuario->name, $usuario->lastname, $usuario->email, $usuario->phone, $usuario->password]);
    }

    function obtenerVariableDelEntorno($key)
    {
        if (defined("_ENV_CACHE")) {
            $vars = _ENV_CACHE;
        } else {
            $file = "env.php";
            if (!file_exists($file)) {
                throw new Exception("El archivo de las variables de entorno ($file) no existe.");
            }
            $vars = parse_ini_file($file);
            define("_ENV_CACHE", $vars);
        }
        if (isset($vars[$key])) {
            return $vars[$key];
        } else {
            throw new Exception("La clave especificada (" . $key . ") no existe en el archivo de las variables de entorno");
        }
    }

    function obtenerConexion()
    {
        //$password = obtenerVariableDelEntorno("MYSQL_PASSWORD");
        //$user = obtenerVariableDelEntorno("MYSQL_USER");
        //$dbName = obtenerVariableDelEntorno("MYSQL_DATABASE_NAME");

        $password = "";
        $user = "root"
        $dbName = "usuarios"

        $database = new PDO('mysql:host=localhost;dbname=' . $dbName, $user, $password);
        $database->query("set names utf8;");
        $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $database;
    }
?>