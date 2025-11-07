<?php

    session_start();

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    echo "Usuario= $usuario " . "\n";
    echo "Password= $password " . "\n";

    $fichero = file("Usuarios1.txt", FILE_IGNORE_NEW_LINES);

    $login_exitoso = false;
    foreach ($fichero as $linea) {
        list($user, $hash) = explode(":",$linea);

            echo "Usuario= $user " . "\n";
            echo "Password= $hash " . "\n";
            echo "valor=" . password_verify($password, $hash);

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
        echo "<h1>Usuario o contraseña incorrectos</h1>";
        echo "<p><a href='Login1.php'>Volver a intentarlo</a></p>";
    }

?>