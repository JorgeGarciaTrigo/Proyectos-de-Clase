<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    if (empty($nombre) || empty($email) || empty($password) || empty($password2)) {
        header("Location: register.php");
        exit;
    }

    if ($password !== $password2) {
        header("Location: register.php");
        exit;
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->fetch()) {
        header("Location: register.php");
        exit;
    }

    $insert = $pdo->prepare(
        "INSERT INTO usuarios (nombre, email, password, rol)
         VALUES (?, ?, ?, 'user')"
    );

    $insert->execute([$nombre, $email, $hash]);

    header("Location: login.php");
    exit;
}
?>