<?php 
session_start();

if(!isset($_SESSION['Usuario'])) {
    header("Location: Login2.php");
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

    <h1>Bienvenido, <?php echo $_SESSION['Usuario']; ?></h1>
    <p>Has iniciado sesión correctamente.</p>
    <p><a href="Logout2.php">Cerrar sesión</a></p>

</body>
</html>
