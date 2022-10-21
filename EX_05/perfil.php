<?php
if (isset($_GET['Enviar'])) {
    $valor_nombre_val = $_GET['Nombre'];
    $valor_contra_val = $_GET['Apellidos'];
}

setcookie('Nombre_val', $valor_nombre_val);
setcookie('Contra_val', $valor_contra_val);

$nombre_original = $_COOKIE['Nombre'];
$contraseña_original = $_COOKIE['Contraseña'];

echo($nombre_original);
echo($contraseña_original);

echo"<br>";

echo($valor_nombre_val);
echo($valor_contra_val);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1> H</h1>


</body>
</html>


