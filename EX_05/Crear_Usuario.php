<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nuevo Usuario</title>
    </head>

    <body>

        <h1> Crear un usuario nuevo </h1>

        <p> Quiero volver atrás:</p>
        <a href="index.php"> Home page</a>
        <br>
        <p> Ya soy usuario solo venia a cotillear...</p>
        <a href="iniciar_session.php"> Iniciar Session </a>

        <form action="cookies.php" method="get">
            <br>
            <h3> Inicie session </h3>
            <input type="text" name="Nombre" placeholder="Escriba su nombre" required>
            <br>
            <input type="text" name="Apellidos" placeholder="Apellidos" required>
            <br>
            <input type="text" name="Usuario" placeholder="Usuario" required>
            <br>
            <input type="password" name="Contraseña" placeholder="Contraseña" required>
            <br>
            <input type="submit" name="Enviar" value="Enviar">
        </form>
        </form>
    </body>
</html>