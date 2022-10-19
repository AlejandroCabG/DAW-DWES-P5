<?php
session_start();
if(isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $_SESSION['nombre'] = $nombre;
    $_SESSION['numero'] = 0;
}

    if( $_SESSION) {
    $_SESSION['numero'] += 10;
    echo $_SESSION['nombre'];
    echo "<br>";
    echo $_SESSION['numero'];
    }
?>

<!--Volver a la página de inicio-->
<br>
<a href="index.php">Ir a la página inicial</a>
