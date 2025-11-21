<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>

<link rel="stylesheet" href="Contenido2.css">

</head>
<body>

<div class="burbuja b1"></div>
<div class="burbuja b2"></div>
<div class="burbuja b3"></div>
<div class="burbuja b4"></div>
<div class="burbuja b5"></div>

    <h1>Registro del pescador</h1>

    <form action="Procesar_Registro2.php" method="post">

        <label>Usuario:</label>
        <input type="text" name="Usuario" required><br>

        <label>Contraseña:</label>
        <input type="password" name="Password" required><br>
        
        <button type="submit">Registrarse</button>
    
    </form>

    <p>¿Ya tienes licencia? <a href="Login2.php">Empieza la pesca aquí</a></p>

</body>
</html>