<?php

//EX_01 Utiliza las cookies para contar el número de visitas que realiza el usuario. Este
//contador tardará una hora en volver a contar.

$contador = 0;

foreach ()
setcookie('ContadorVisitas',$contador,time() + 3600);
