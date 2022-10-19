<?php
if (isset($_GET['enviar'])) {

    $var_nombre = $_GET['nombre'];
    $var_idiomas = $_GET['idiomas'];
}
    setcookie('nombre', $var_nombre);
    setcookie('idiomas', $var_idiomas);
?>
<form action="index.php" method="GET">
    Introduzca su nombre:
    <input type="text" id="nombre" name="nombre" value=<?php echo $_COOKIE['nombre']; ?>>
    <br>
    <label for="browser">Escoge el idioma:</label>
    <input list="idiomas" name="idiomas" id="idiomas" value=<?php echo $_COOKIE['idiomas']; ?>>
    <br>
    <input type="submit" name="enviar">
</form>