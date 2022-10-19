<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Sessions</title>
</head>
<body>
<h1>Página principal</h1>
<form action="pagina2.php" method="POST">
    Introduzca su nombre:
    <input type="text" placeholder="nombre" name="nombre">
    <br><br>
    <input type="submit" name="enviar">
</form>
<br><br>
</body>
</html>