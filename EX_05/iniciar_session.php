<?php

?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Iniciar Session</title>
    </head>

    <body>

        <h1> Iniciar session </h1>

        <form  action="perfil.php" method="get">
            <h3> Inicie session </h3>
            <input type="text" name="Nombre_val" placeholder="Usuario" required>
            <br>
            <input type="text" name="Contra_val" placeholder="Contraseña" required>
            <br>
            <input type="submit" name="Entrar">
        </form>


        <p> Quiero volver atrás:</p>
        <a href="index.php"> Home page</a>
        <p> No me acordaba no tengo un usuario :(</p>
        <a href="Crear_Usuario.php"> Crear Usuario </a>

    </body>
</html>