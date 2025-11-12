<?php

    echo "<link rel='stylesheet' href='ContenidoPL1.CSS'>";

    echo "<body>";

    session_start();

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $fichero = file("Usuarios1.txt", FILE_IGNORE_NEW_LINES);

    $login_exitoso = false;
    foreach ($fichero as $linea) {
        list($user, $hash) = explode(":",$linea);
        if ($user === $usuario && password_verify($password, $hash)) {
            $login_exitoso = true;
            $_SESSION['usuario'] = $usuario;
            break;
        }
    }
    
    if ($login_exitoso) {
        header("Location:Bienvenida1.php");
        exit;
    } else {

        echo "<div class=Titulo1>";
        echo "<h1>Usuario o contraseña incorrectos</h1>";
        echo "</div>";

        echo "<div class=Cuenta1>";
        echo "<p><a href='Login1.php'>Volver a intentarlo</a></p>";
        echo "</div>";
    }

    echo "</body>";

?>