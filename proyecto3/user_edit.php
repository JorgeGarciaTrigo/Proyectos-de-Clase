<?php
include "includes/db.php";
session_start();
if (!isset($_SESSION['user_id'])) { header("Location: login.php"); exit; }

$id = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
$stmt->execute([$id]);
$usuario = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Datos</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="form-container">
        <h1>Mis Datos</h1>
        <form action="procesar_user_edit.php" method="POST">
            <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>" required>
            <input type="email" name="email" value="<?= $usuario['email'] ?>" required>
            <input type="number" name="edad" value="<?= $usuario['edad'] ?>" required>
            <button class="btn" type="submit">Guardar Cambios</button>
        </form>
        <a href="dashboard.php" style="display:block; text-align:center; margin-top:10px;">Cancelar</a>
    </div>
    <script src="js/validacion.js"></script>
</body>
</html>