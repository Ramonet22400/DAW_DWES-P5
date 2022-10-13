<?php
if(isset($_GET['Enviar'])){
    $valor_nombre = $_GET['Nombre'];
    $valor_idioma  = $_GET['Idioma'];
}

setcookie('Nombre', $valor_nombre);
setcookie('Idioma',$valor_idioma);

?>



<form action="cookies.php" method="get">
    <input type="text" name="Nombre" placeholder="Escriba su nombre" value= <?php echo$_COOKIE['Nombre'] ?> required>
    <input list ="browser" name="Idioma" id="Idioma" placeholder="¿Que idioma prefiere?"  value= <?php echo$_COOKIE['Idioma'] ?> required>

   <input type="submit" name="Enviar" value="Enviar preferencias">

</form>
