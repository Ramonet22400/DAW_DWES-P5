<?php

session_start();

unset($_SESSION['Puntos']);

echo('Los puntos del programa de afiliados han sido borrados correctamente.');

?>
<br>
<br>
<b> Volver a la página principal:</b>
<a href="index.php">Volver</a>