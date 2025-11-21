<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

<link rel="stylesheet" href="Contenido2.css">

</head>
<body>
    
<div class="burbuja b1"></div>
<div class="burbuja b2"></div>
<div class="burbuja b3"></div>
<div class="burbuja b4"></div>
<div class="burbuja b5"></div>

    <h1>Iniciar el registro de pesca</h1>
    <form action="Procesar_Login2.php" method="post">
        
        <label>Usuario:</label>
        <input type="text" name="Usuario" required><br>

        <label>Contraseña:</label>
        <input type="password" name="Password" required><br>

        <button type="submit">Entrar</button>

    </form>

    <p>¿No tienes registro de pescador? <a href="Registro2.php">Puedes hacerlo aquí</a></p>

</body>
</html>