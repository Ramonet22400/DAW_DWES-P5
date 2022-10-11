<?php

//EX_01 Utiliza las cookies para contar el número de visitas que realiza el usuario. Este
//contador tardará una hora en volver a contar.
setcookie('contador', 0, time() + 3600, '/');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
    </head>

    <body>
        <h1>Cookie set</h1>

    </body>

</html>