<?php
session_start();
if (!isset($_SESSION['user_id'])) { header("Location: login.php"); exit; }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Hola, <?= $_SESSION['nombre'] ?></h1>
        <p>Has iniciado sesión correctamente.</p>
        <a class="btn" href="user_edit.php" style="width: auto;">Editar mis datos</a>
        <?php if($_SESSION['rol'] == 'admin'): ?>
            <a class="btn" href="admin/list.php" style="background-color: purple; width:auto;">Ir a Admin</a>
        <?php endif; ?>
        <a class="btn-delete" href="logout.php" style="display:block; margin-top:20px; text-align:center;">Cerrar Sesión</a>
    </div>
</body>
</html>