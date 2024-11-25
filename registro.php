<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="estilos/registro.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>


<body>
    <header>
        <a href="landing.html"><img src="img/logo.jpeg"
                alt="Logo de la copañia que muestra un saxofon dorado sobre un fondo azul"></a>
        <h1>Únete a una comunidad creciente</h1>
    </header>

    <form>
        <fieldset>
            <legend>Información personal</legend>
            <div class="datos-personales">
                <div class="elemento-registro">
                    <label for="name">Nombre*:</label>
                    <input type="text" name="nombre" id="name" class="nombre" required>
                </div>
                <div class="elemento-registro">
                    <label for="apellidos">Apellidos*:</label>
                    <input type="text" name="apellidos" id="apellidos" class="apellidos" required>
                </div>
                <div class="elemento-registro">
                    <label for="fecha_nacimiento">Fecha de Nacimiento*:</label>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="fecha_nacimiento" required>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Datos de contacto</legend>
            <div class="datos-contacto">
                <div class="elemento-registro">
                    <label for="telefono">Teléfono*:</label>
                    <input type="tel" name="telefono" id="telefono" required>
                </div>

                <div class="elemento-registro">
                    <label for="email">Email*:</label>
                    <input type="email" name="email" id="email" required>
                </div>

            </div>


        </fieldset>
        <fieldset>
            <legend>Crea una contraseña</legend>
            <div class="datos-registro">
                <div class="elemento-registro">
                    <label for="password">Contraseña*:</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="elemento-registro">
                    <label for="pass2">Confirma la contraseña*:</label>
                    <input type="password" name="pass2" id="pass2" required>
                </div>
            </div>

        </fieldset>

        <div class="botones">
            <input type="submit" value="Suscríbete">
            <a href="landing.html"><input type="button" value="Salir"></a>
        </div>

        <p>¿Ya tienes cuenta?</p>
        <a href="inicioSesion.php"><i>Login</i></a>

    </form>


</body>

</html>