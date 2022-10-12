<?php
//Haz una web con dos ficheros, index.php y cookies.php. index.php se encargará de
//pedir el nombre de usuario y la lengua que quiere utilizar por defecto mediante un
//formulario. Enviará los datos al archivo cookies.php, el cuál guardará las cookies. El
//próximo acceso que el usuario realice a index.php, tiene que autorellenarse con la
//información anterior.

$nombre=$_POST['Nombre'];
$idioma=$_POST['Idioma'];

setcookie('Nombre', $nombre);
setcookie('Idioma', $idioma);

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Formulario</title>
    </head>

    <body>
        <h1> Formulario nombre e idioma.</h1>

        <div id="Formulario">

        <input id="Nombre" name="Nombre" type="text">

            <input list ="browser" name="buscador" id="Idioma">

                <datalist id="browser">
                    <option value="Castellano">
                    <option value="Català">
                    <option value="English">
                    </option>
                </datalist>
           <input name="Enviar" type="button" value="Enviar">
        </div>

    </body>
</html>