<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de usuario</title>

    <link rel="stylesheet" href="ContenidoR1.CSS">

</head>
<body>

    <div class="Titulo1">

    <h1>Web de Torrejón</h1>

    <h2>Registro</h2>

    </div>


    <form action="Procesar_Registro1.php" method="post">

        <div class="Usuario1">
        
            <label>Usuario:</label>
            <input type="text" name="usuario" required><br>

        </div>

        <div class="Contraseña1">
        
            <label>Contraseña:</label>
            <input type="password" name="password" required><br>

        </div>

        <div class="Botón1">

            <button style="background-color: chartreuse;" type="submit">Registrarse</button>

        </div>

    </form>

    <div class="Cuenta1">
    
        <p>¿Ya eres un ciudadano? <a href="Login1.php">Iniciar sesion aquí</a></p>
    
    </div>

</body>
</html>