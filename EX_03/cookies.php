<?php

session_start();

if(isset($_GET['Enviar'])) {
    $valor_nombre = $_GET['usuario'];
}

if(isset($_COOKIE['Puntos']))
    setcookie('Puntos',$_COOKIE['Puntos'] + 10);
else
    echo 'ERROR';

$_SESSION['Puntos'] = $_COOKIE['Puntos'];

?>
<a href="logout.php">Cerrar Sesión</a>
<form action="cookies.php" method="get">

    <h1> Hola <?php echo $valor_nombre ?> </h1>

    <p> Gracias al programa de afiliados usted cuenta con los siguientes puntos: </p>
    <p><?php echo "Los puntos con los que cuenta son: ".$_COOKIE['Puntos']." puntos.";?></p>

</form>