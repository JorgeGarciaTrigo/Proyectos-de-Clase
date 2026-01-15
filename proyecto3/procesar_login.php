<?php
include "includes/db.php";
session_start();

if ($_POST) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $usuario = $stmt->fetch();

    if ($usuario && password_verify($password, $usuario['password'])) {
        $_SESSION['user_id'] = $usuario['id'];
        $_SESSION['nombre'] = $usuario['nombre'];
        $_SESSION['rol'] = $usuario['rol'];
        
        if ($usuario['rol'] == 'admin') header("Location: admin/list.php");
        else header("Location: dashboard.php");
        exit;
    } else {
        header("Location: login.php?error=credenciales");
        exit;
    }
}
?>