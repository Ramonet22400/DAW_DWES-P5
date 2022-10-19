<?php

//Configure una base de datos para tener usuarios. Los usuarios tendrán un nombre,
//un correo (identificador de la plataforma), una contraseña, fecha de nacimiento,
//permisos (si son o no administradores) y una imagen (que, por el momento, no tendrá
//ningún valor).


$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

$resultados = $conexion->query("CREATE TABLE RamonPerezM_tablas(
                                id INT(6),
                                firstname VARCHAR(30),
                                lastname VARCHAR(40),
                                email VARCHAR(30),
                                contra VARCHAR(40),
                                fecha_nacimiento DATE,
                                permisos BOOLEAN,
                                imagen VARCHAR(2)
                                )");

