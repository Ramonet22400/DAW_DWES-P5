<?php

//EX_01 Utiliza las cookies para contar el número de visitas que realiza el usuario. Este
//contador tardará una hora en volver a contar.

setcookie('contador','40px',time()+3600)