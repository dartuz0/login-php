<?php

session_start();
if(isset($_SESSION['user'])) {
    header('location: welcome.php');
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | resgister</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <div class="container-all">
            <div class="box">
                <div class="box-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la página</p>
                    <button id="btn-login-box">Iniciar Sesión</button>
                </div>
                <div class="box-register">
                    <h3>¿No tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn-register-box">Regístrarse</button>
                </div>
            </div>
            <div class="container-forms">
                <form action="services/login.php" method="POST" class="form-login">
                    <h2>Iniciar Sesión</h2>
                    <input type="email" placeholder="Correo Electronico" name="email" required>
                    <input type="password" placeholder="Contraseña" name="password" required>
                    <button class="btn-login">Iniciar sesion</button>
                </form>
                <form action="services/register.php" method="POST" class="form-register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="name" required>
                    <input type="email" placeholder="Correo Electronico" name="email" required>
                    <input type="text" placeholder="Usuario" name="username" required>
                    <input type="password" placeholder="Contraseña" name="password" required>
                    <button class="btn-register" name="register"</button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="js/index.js"></script>
</body>

</html>