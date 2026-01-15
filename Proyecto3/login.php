<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="form-container">

    <h1>Iniciar sesión</h1>

    <form action="procesar_login.php" method="POST" id="loginForm">

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Contraseña" required>

        <button type="submit" class="btn">Entrar</button>

    </form>

    <p>
        ¿No tienes cuenta?
        <a href="register.php">Regístrate aquí</a>
    </p>

</div>

<script src="js/validacion.js"></script>
</body>
</html>