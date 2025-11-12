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

    <link rel="stylesheet" href="ContenidoB1.CSS">

</head>
<body>

    <div class="Titulo1">
        <h1>Bienvenido, <?php echo $_SESSION["usuario"]; ?></h1>
    </div>
    
    <div class="Texto1">
        <p>Has iniciado sesión correctamente.</p>
    </div>

    <div class="Cuenta1">
        <p><a href="Logout1.php">Cerrar sesión</a></p>
    </div>

</body>
</html>