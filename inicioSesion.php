<?php
session_start();

$error="";
if (isset($_POST['enviar'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $archivoUsuarios = fopen("usuarios.txt","r");
        $usuarioValido = false;

        while(!feof($archivoUsuarios)){
            $linea=fgets($archivoUsuarios);
            $datos=explode(";",trim($linea));

            if($email==$datos[0] && $password==$datos[1]){
                $usuarioValido=true;
            }
        }

        if ($usuarioValido) {
            $_SESSION['registrado'] = true;
            header("Location: carrito.php");
            exit();
        } else {
            $error = "Correo electrónico o contraseña incorrectos.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="estilos/inicioSesion.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>

<body>
    <header>
        <a href="landing.html"><img src="img/logo.jpeg"
                alt="Logo de la copañia que muestra un saxofon dorado sobre un fondo azul"></a>
        <h1>¡Bienvenido de nuevo!</h1>
    </header>

    <form action="" method="post">
        <div name="error">
            <?php echo $error;
            ?>
        </div>
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" id="email" required name="email">

        <label for="passwd">Contraseña</label>
        <input type="password"  id="passwd" required name="password">

        <div class="botones">
            <input type="submit" value="Login" name="enviar">
            <a href="landing.html"><input type="button" value="Salir"></a>
        </div>


        <p>¿No tienes cuenta?</p>
        <a href="registro.php">Registrate</a>

    </form>
</body>

</html>