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