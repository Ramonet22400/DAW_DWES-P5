<?php

if(isset($_COOKIE['contador']))

    setcookie('contador',$_COOKIE['contador'] + 1);
else
    echo 'error';

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title> Contador </title>
    </head>

    <body>
        <p>Contador de visitas</p>
        <p><?php echo "La pagina se a visitado: ".$_COOKIE['contador']." veces.";?></p>
    </body>
</html>
