<?php
include "includes/db.php";

if ($_POST) {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $edad = $_POST['edad'];
    $rol = 'user';


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: register.php?error=email_invalido");
        exit;
    }


    $check = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
    $check->execute([$email]);
    
    if ($check->rowCount() > 0) {
        header("Location: register.php?error=existe");
        exit;
    }

    $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, password, edad, rol) VALUES (?,?,?,?,?)");
    if ($stmt->execute([$nombre, $email, $password, $edad, $rol])) {
        header("Location: login.php?registrado=1");
    }
}
?>