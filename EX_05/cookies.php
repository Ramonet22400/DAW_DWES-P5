<?php

if (isset($_GET['Enviar'])) {
    $valor_nombre = $_GET['Nombre'];
    $valor_apellidos = $_GET['Apellidos'];
    $valor_usuario = $_GET['Usuario'];
    $valor_contra = $_GET['Contraseña'];
}

setcookie('Nombre', $valor_nombre);
setcookie('Apellido', $valor_apellidos);
setcookie('Usuario', $valor_usuario);
setcookie('Contraseña', $valor_contra);

?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Guardado de perfil</title>
    </head>
    <body>

    <h3> Su perfil a sido guardado correctamente.</h3>
    <p> Bienvenido :)</p>
    <a href="iniciar_session.php">Inicie session</a>

    </body>
</html>



