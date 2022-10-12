<form action="cookies.php" method="get">
    <input type="text" name="Nombre" placeholder="Escriba su nombre" required>
    <input list ="browser" name="Idioma" id="Idioma" placeholder="¿Que idioma prefiere?" required>

        <datalist id="browser">
            <option value="Castellano">
            <option value="Catalan">
            <option value="English">
            </option>
        </datalist>
   <input type="submit" name="Enviar" value="Enviar preferencias">

</form>