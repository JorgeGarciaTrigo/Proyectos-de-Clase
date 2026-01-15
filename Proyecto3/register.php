<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="form-container">

    <h1>Registro de usuario</h1>

    <form action="procesar_register.php" method="POST" id="registerForm">

        <input type="text" name="nombre" placeholder="Nombre" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Contraseña" required>

        <input type="password" name="password2" placeholder="Repetir contraseña" required>

        <button type="submit" class="btn">Registrarse</button>

    </form>

    <p>
        ¿Ya tienes cuenta?
        <a href="login.php">Inicia sesión</a>
    </p>

</div>

<script src="js/validacion.js"></script>
</body>
</html>