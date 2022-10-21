<?php

if(isset($_GET['Enviar'])){
    $valor_nombre = $_GET['Nombre'];
    $valor_apellidos  = $_GET['Apellidos'];
    $valor_usuario  = $_GET['Usuario'];
    $valor_contra  = $_GET['Contraseña'];
}

setcookie('Nombre', $valor_nombre);
setcookie('Idioma',$valor_apellidos);
setcookie('Idioma',$valor_usuario);
setcookie('Idioma',$valor_contra);

echo($valor_usuario)

?>

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

        <form>
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
            <input type="submit" name="Enviar">
        </form>
    </body>
</html>

$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

$resultados = $conexion->query("CREATE TABLE modelo_usuario(
firstname VARCHAR(30),
lastname VARCHAR(40),
username VARCHAR(40),
contra VARCHAR(30)
)");