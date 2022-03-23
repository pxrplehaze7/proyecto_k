<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="estiloL.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">




</head>

<body>
    <!--     <form action="validar.php" method="post">
        <h1>Iniciar Sesión</h1>
        <p>Usuario <input required type="text" placeholder="Ingrese su usuario" name="usuario"></p>
        <p>Contraseña <input required type="password" placeholder="Ingrese su contraseña" name="contrasenna"></p>
        <input type="submit" value="Enviar"> -->
    <!-- <button type="submit">Enviar</button> -->

    <div style="background-color:blueviolet;" class="login-container">
        <form action="validar.php" class="form-login" method="post">

            <ul class="opciones">
                <li class="opcion activa">
                    <a href="login">Ingresar</a>
                </li>
                <li class="opcion">
                    <a href="registro">Registrarse</a>
                </li>
            </ul>


            <label for="input-usuario-id" class="login__label">
                Usuario
            </label>
            <input id="input-usuario-id" class="login__input" type="text" name="usuario" />


            <label for="input-contrasenna-id" class="login__label">
                Contraseña
            </label>
            <input id="input-contrasenna-id" class="login__input" type="password" name="contrasenna" />


            <button class="login__submit" type="submit">Continuar</button>
        </form>

    </div>

</body>

</html>