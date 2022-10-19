<?php
if ( isset( $_COOKIE[ 'visitas' ] ) ) {

    setcookie( 'visitas', $_COOKIE[ 'visitas' ] + 1, time() + 3600);
    $mensaje = 'Numero de visitas: '.$_COOKIE[ 'visitas' ];
}
else {

    setcookie( 'visitas', 1, time() + 3600 );
    $mensaje = 'Bienvenido por primera vez a nuesta web';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEXTO</title>
</head>
<body>
    <?php echo $mensaje;?>
</body>
</html>
