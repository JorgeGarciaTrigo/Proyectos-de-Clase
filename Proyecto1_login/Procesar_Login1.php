<?php

    session_start();

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $usuarios = file("Usuarios1.txt", FILE_IGNORE_NEW_LINES);

    $login_exitoso = false;
    foreach ($usuarios as $linea) {
        list($user, $hash) = explode(":",$linea);
        if ($user === $usuarios && password_verify($password, $hash)) {
            $login_exitoso = true;
            $_SESSION['usuario'] = $usuario;
            break;
        }
    }
    

?>