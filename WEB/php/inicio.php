<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <div class="contenedor-form">

        <div class="palanca">
            <span>Crear Cuenta</span>
        </div>

        <div class="formulario">
            <h2>Iniciar Sesión</h2>
            <form action="#">
                <input type="email" placeholder="Correo Electronico" required>
                <input type="password" placeholder="Contraseña" required>
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>

        <div class="formulario">
            <h2>Crea tu Cuenta</h2>
            <form action="#">
                <input type="text" placeholder="Usuario" required>

                <input type="password" placeholder="Contraseña" required>

                <input type="email" placeholder="Correo Electronico" required>

                <input type="text" placeholder="Teléfono" required>

                <input type="submit" value="Registrarse">
            </form>
        </div>
        <div class="borrar-password">
            <a href="#">¿Has olvidado la contraseña?</a>
        </div>
    </div>
    <!--JAVASCRIPT-->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/index.js"></script>
</body>

</html>