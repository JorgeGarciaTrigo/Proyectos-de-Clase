<?php
    session_start();

    if(!isset($_SESSION['usuario'])) {
        header("Location: Login1.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
</head>
<body>

    <h1>Bienvenido, <?php echo $_SESSION["usuario"]; ?></h1>
    <p>Has iniciado sesión correctamente.</p>
    <p><a href="Logout1.php">Cerrar sesión</a></p>
    
</body>
</html>