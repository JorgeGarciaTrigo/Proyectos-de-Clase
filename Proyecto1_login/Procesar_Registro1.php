<?php

    echo "<link rel='stylesheet' href='ContenidoPR1.CSS'>";

    echo "<body>";

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $file = fopen("Usuarios1.txt","a");
    fwrite($file, $usuario . ":" .password_hash($password, PASSWORD_DEFAULT) . "\n");
    fclose($file);

    echo "<div class=Titulo1>";
    echo "<h1>Usuario registrado correctamente</h1>";
    echo "</div>";
    
    echo "<div class=Cuenta1>";
    echo "<p><a href='Login1.php'>Iniciar Sesion</a></p>";
    echo "</div>";
    
    echo "</body>";

?>