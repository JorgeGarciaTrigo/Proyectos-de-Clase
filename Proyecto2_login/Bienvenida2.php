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

<link rel="stylesheet" href="Contenido2.css">

</head>
<body>

<div class="burbuja b1"></div>
<div class="burbuja b2"></div>
<div class="burbuja b3"></div>
<div class="burbuja b4"></div>
<div class="burbuja b5"></div>

    <h1>Bienvenido, pescador novato <?php echo $_SESSION['Usuario']; ?></h1>
    <p>Has podido acceder correctamente correctamente.</p>
    <p>Para dejar de pescar, <a href="Logout2.php">pulsa aquí</a></p>

</body>
</html>
