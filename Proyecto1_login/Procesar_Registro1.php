<?php

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $file = fopen("Usuarios1.txt","a");
    fwrite($file, $usuario . ":" . password_hash($password, PASSWORD_DEFAULT) . "\n");
    fclose($file);

    echo "<h1>Usuario registrado correctamente</h1>";
    echo "<p><a href='Login1.php'>Iniciar Sesion</a></p>";

?>