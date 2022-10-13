<?php

// Haz una página web que pase entre sus páginas el nombre del usuario y una variable
//(puntos_acumulados) que se irá incrementando en 10 cada vez que el usuario de esa
//sesión pase entre las páginas. La sesión se cerrará cuando el usuario vuelva a la
//página de Login.
if(isset($_POST['Enviar'])){

    $usuario = $_POST['usuario'];
    if($usuario == "Ramonet"){

        echo "Se ha iniciado sesión correctamente.";
    }else{
        echo "No se ha podido iniciar sesión.";
    }
}

setcookie('Puntos',0);
?>

        <form action="cookies.php" method="get">
            Usuario: <input type="text" name="usuario">
            <input type="submit" name="Enviar" value="Iniciar Sesión">
        </form>
    </body>
</html>